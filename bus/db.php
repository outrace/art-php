<?php
namespace bus;

/**
 * 提供db操作的拦截
 * @package bus
 */
final class db {

    /**
     * 得到分库分表情况
     * @param string $mdl 模块。也就是一个数据库名
     * @param string $tbl 表名
     * @param mixed  $suf_tbl 表后缀参数
     * @param mixed  $suf_mdl 库后缀参数
     * @return array 分库分表的后缀
     */
    public static function split($mdl, $tbl, $suf_tbl= NULL, $suf_mdl=NULL) {
        $ret = array(
            'db'=>'',
            'tbl'=>''
        );

        if (!empty($suf_tbl)) {}

        return $ret;
    }

//	public static function before_add($mdl, $tbl, $data) {
//	}
//
//	public static function after_add($mdl, $tbl, $data) {
//	}
//
//	public static function before_mdf($mdl, $tbl, $id, $data) {
//	}
//
//	public static function after_mdf($mdl, $tbl, $id) {
//	}
//
//	public static function before_del($mdl, $tbl, $id) {
//	}
//
//	public static function after_del($mdl, $tbl, $id) {
//	}
}