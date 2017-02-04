<?php
$dbs = array('art');
$out = array();
foreach($dbs as $db) {
    $tbls = require_once './cfg/'.$db.'/schema.php';
    $out[$db] = array();
    foreach($tbls as $tname=>$tbl) {
        $data = array();
        foreach($tbl['name'] as $k=>$v) {
            $data[$k] = array($v, $tbl['check'][$k]);
        }
        $out[$db][$tname] = $data;
    }
}
//echo 'module.exports = {tbls:'.json_encode($out).'};';
echo 'module.exports = '.json_encode($out, JSON_UNESCAPED_UNICODE);