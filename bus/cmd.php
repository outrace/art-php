<?php
namespace bus;

use now\bus;
use now\err;
use now\fun;
use now\session;
use now\view;

/**
 * 提供base模块的一些通用方法
 * @package bus
 */
final class cmd {
    
    /**
     * 进行cmd的前置操作
     * @param string $cmd  执行的命令
     * @param array  $para 传入的参数
	 * @throws err
     * @return array
     */
	public static function before($cmd, $para) {
        $para = fun::filter_data($para, false);//全部开启参数过滤，防止漏洞攻击

		/**
		 * page 目录不需登录
		 * super 目录给超管
		 * agent 目录给代理商
		 * user 目录给普通用户
		 * 其他目录给admin
		 */
		if ( strpos($cmd, 'page.') === 0) {
			return $para;
		} else {
			if (!session::get('u')) {
				throw new err('请先登录');
			}

			$role = session::get('r');

			if (strpos($cmd, 'user.') === 0) {  //普通用户
				if ($role !== ROLE_USER) {
					throw new err('您没有当前操作的权限', 90001);
				}
			}  else if (strpos($cmd, 'adm.') === 0) {//管理员
				if ($role !== ROLE_ADMIN) {
					throw new err('您没有当前操作的权限', 90002);
				}
			}
		}

		return $para;
	}

    /**
     * 进行cmd的后置操作
     * @param string $cmd 执行的命令
     * @param array $data 返回的结果数据
     * @param string $type 返回的类型
     * @param array $para 该类型的参数
     * @return array
     */
    public static function after($cmd, $data = array(), $type = 'json', $para = null) {
		if ($type == 'json' || $type == 'jsonp') {
			$data['_t'] = TIME;
			$data['_c'] = 0;
			return fun::filter_data($data);
		} else {
			return $data;
		}
	}

    /**
     * 进行cmd的错误异常操作
     * @param string $cmd   执行的命令
     * @param mixed $error 错误信息
     * @param array  $para  传入参数
     */
	public static function error($cmd, $error, $para) {
		$code = $error->getCode();
		$msg  = $error->getMessage();
		$para = $error->para;

		if (isset($para['ret'])) {
			$ret = $para['ret'];
		} else {
			$ret = 'json';
		}

		switch($ret) {
			case 'json':
				view::json(array(
					'_c'=>$code,
					'_m'=>htmlspecialchars($msg),
					'_t'=>TIME
				));
				break;
			case 'jsonp':
				view::jsonp(
					$para['cb'],
					array(
					'_c'=>$code,
					'_m'=>htmlspecialchars($msg),
					'_t'=>TIME
				));
				break;
				break;
		}
	}
}
