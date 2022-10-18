# CORRESPONDENCIA
* Despliegue del sistema con Docker

* 1. Clonamos el proyecto
```sh
git clone 
```
* 2. Creamos la carpeta sigec_adjuntos
```sh
mkdir sigec_adjuntos
```
* 3. descargamos las imagens del sistema de correspondencia direccionando los lugares marcados con * por el directorio donde se encuentra el sistema
```sh
docker run -d --name app-correspondencia -v */sigec_adjuntos:/home/sigec_adjuntos -v */correspondencia:/var/www/html -p 8081:80 muserpol/correspondencia
```
* 4. Verificar que los contenedores esten arriba
```sh
docker ps -a
```
* 5. Cambiar el propietario al archivo de correspondencia
```sh
sudo chown -R www-data correspondencia
```
* 6. ingresar al contenedor
```sh
docker exec -it {id_contenedor} /bin/bash
```
* 7. reiniciar el servicio apache
```sh
service apache2 restart
```
* 8. Verificar dentro el contenedor que el directorio /var/www/html/ este direccionado al codigo fuente del sistema
* 9. cambiar la configuracion del archivo application/config/database.php con las credenciales de la base de datos
* 10. cambiar las configuraciones del archivo ldap.json con las credenciales de conexion LDAP o cambiar su estado a false

# Despliegue de la base de datos con Docker

* 1. descargamos la imagen de la base de datos
```sh
docker run -e MYSQL_ROOT_PASSWORD=D3v3l0p -e MYSQL_DATABASE=correspondencia -e MYSQL_USER=admincorr -e MYSQL_PASSWORD=ANKoBahIatIC -v {sigec-bd}:/var/lib/mysql -p 3306:3306 --name bd-correspondencia -d mysql:5.5
```
* 2. Verificar la conexion con un cliente mysql
* 3. Restaurar una copia de la base de datos
* 4. Si se usa dbeaber como cliente de base de datos, instala el cliente mysql para restaurar bases de datos
```sh
sudo apt install -y mysql-client
```