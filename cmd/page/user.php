<?php
namespace cmd\page;

use cmd\base;
use now\dao;
use now\fun;
use now\session;

/**
 * 一些页面方法
 * @package cmd\page
 */
class user extends base {

    /**
     * 登录
     * @author 欧远宁
     * @param $para mixed
     */
    public function login($para){
        $this->_required($para, array('user'));
        $user = $this->_required($para['user'], array('uno', 'pwd'));
        $this->_valvo('art', 'user', $user);

        $user_dao = new dao('art', 'user');
        $list = $user_dao->get(array('uno'=>$user['uno']));
        if (count($list['user_list']) == 0) {
            $this->_err('用户名或者密码错误');
        } else {
            $guser = $list['user_list'][0];
            if ($guser['pwd'] != md5($user['uname'] . ' ' . $user['pwd'])) {
                $this->_err('用户名或者密码错误');
            }
        }

        //更新最后登录信息
        $user_dao->mdf($guser['user_id'], array(
            'last_login'=>TIME,
            'last_ip'=>fun::get_ip()
        ));

        //设置session
        session::init_session(array(
            'u'=>$guser['user_id'],
            'r'=>$guser['role']
        ));

        $this->_ret(array());
    }

}
