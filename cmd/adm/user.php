<?php
namespace cmd\page;

use cmd\base;
use now\dao;
use now\fun;

/**
 * 一些页面方法
 * @package cmd\adm
 */
class user extends base {

    /**
     * 获取列表
     * @param $para mixed
     */
    public function get($para) {

        $this->_ret(array());
    }

    /**
     * 修改用户
     * @param $para mixed
     */
    public function mdf($para) {

        $this->_ret(array());
    }

    /**
     * 更改用户状态
     * @param $para mixed
     */
    public function status($para) {

    }

    /**
     * 删除用户
     * @param $para mixed
     */
    public function del($para) {

    }

    /**
     * 重设用户标签
     * @param $para mixed
     */
    public function tag($para) {

    }
}
