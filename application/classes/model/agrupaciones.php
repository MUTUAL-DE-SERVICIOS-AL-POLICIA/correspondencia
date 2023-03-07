<?php
defined('SYSPATH') or die ('no tiene acceso');
class Model_Agrupaciones extends ORM{
    protected $_table_names_plural = false;
    public function sql($sql) {
        return db::query(Database::SELECT, $sql)->execute()->as_array();
    }
}
?>
