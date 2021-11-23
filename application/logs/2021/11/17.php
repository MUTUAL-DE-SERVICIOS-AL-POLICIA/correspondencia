<?php defined('SYSPATH') or die('No direct script access.'); ?>

2021-11-17 15:39:29 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]