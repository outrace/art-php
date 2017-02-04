<?php
namespace cmd;

use now\session;
use now\cmd;
use now\dao;

/**
 * cmd通用的一些方法。
 * @package cmd
 */
class base extends cmd {

	/**
	 * 当前登录用户的uid
	 * @var string
	 */
	protected $uid = '';

	/**
	 * 覆盖构造函数
	 * @param string $method 模块名称
	 */
	public function __construct($method) {
		parent::__construct($method);
		$this->uid = session::get('u');
	}

	/**
	 * 日志记录
	 * @param string $msg  消息
	 * @example $this->_log('a10', '新增了专业类别:aaa');
	 */
	protected final function _log($mdl, $msg) {
		$log_dao = new dao('art', 'log');
		$log_dao->add(array(
			'user_id'=>$this->uid,
			'mdl'=>$mdl,
			'msg'=>$msg,
			'add_time'=>TIME
		));
	}

}