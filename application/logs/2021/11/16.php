<?php defined('SYSPATH') or die('No direct script access.'); ?>

2021-11-16 10:24:06 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:24:11 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:24:16 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:24:25 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:24:30 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:25:20 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:25:25 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:42:43 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:42:48 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:43:30 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:43:35 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:43:40 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:44:43 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:44:48 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:45:23 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:46:32 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:47:09 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:47:14 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:47:21 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:47:26 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:47:34 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:49:08 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:49:15 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:49:20 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 10:49:25 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:00:20 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:00:32 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:01:09 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:02:14 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:14:48 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:14:53 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:14:59 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:15:05 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:15:11 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:15:17 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:15:23 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:15:29 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:15:34 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 11:44:24 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:14:31 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:14:39 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:14:44 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:17:12 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:17:17 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:17:22 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:17:27 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:17:32 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:17:37 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:17:48 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:17:53 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:17:58 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:18:03 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:18:08 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:18:13 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:18:18 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:18:23 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:18:28 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:18:33 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2021-11-16 13:38:20 --- ERROR: Database_Exception [ 0 ]: [1146] Table 'dbsigec.sesiones' doesn't exist ( SELECT c.last_active,ROUND(minutos,2) AS segundos,nombre,cargo,id FROM (SELECT *  FROM (
                SELECT DISTINCT(user_id),session,(unix_timestamp()-last_active)/60 as minutos,from_unixtime(last_active) AS last_active  FROM dbsigec.sesiones) AS x
                WHERE x.minutos < 10 )
                AS c INNER JOIN users u ON c.user_id=u.id order by last_active DESC ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]