<?php
/**
 * class OperateDB
 *
 * @author Dorothy <koueig@gmail.com> 2015-04-22
 */
class OperateDB {
    private $conn;
    function __construct() {
       require_once '/core/ConnDB.class.php';
       $conn = ConnDB::getInstance();
       mysql_select_db("KAIZEN", $conn);
    }
 
    public function query($sql) {
        $result = mysql_query($sql);
        return $result;
    }
}