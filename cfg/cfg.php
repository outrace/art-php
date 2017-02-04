<?php
/**
 * 项目通用配置文件
 */
return array( // 全局配置信息
	'dev' => array(
		'show_sql' => FALSE,  // 是否打印执行的sql语句
		'dao_cache' => FALSE,  // dao是否使用缓存
		'session' => array(
			'secret' => 'dev',  // 加密的key。
			'to_cookie' => TRUE,  // 是否将加密的session串放到cookie中
			                     // 如果存到cookie的话，对应的参数，其含义参考php的setcookie函数
			'cookie' => array(
				'expire' => 0, 
				'path' => '/', 
				'domain' => $_SERVER['HTTP_HOST'],
				'secure' => FALSE, 
				'httponly' => FALSE 
			) 
		),
        'email' => array(//邮件发送服务
            'port' => 25,
            'host' => 'smtp.exmail.qq.com',
            'host_name' => 'exmail.qq.com',
            'user' => '',
            'user_pass' => '',
            'from' => '',
            'from_name' => ''
        ),
		'upload_root' => OP,  // 上传目录
		'upload_path' => array( // 上传文件路径
			 'temps_file'=>array(//临时文件保存路径, 比如excel处理的时候
			 		'http' => 'http://'.$_SERVER['HTTP_HOST'].'/',	// http路径
			 		'path' => 'upload' . DS . 'file' . DS . 'temps' . DS,	// 相对路径
			 		'deep' => 0,	// 目录深度
                    'max_size' => 10*1024*1024
			 )
		)
	),
	'pro' => array(
        'show_sql' => FALSE,  // 是否打印执行的sql语句
        'dao_cache' => FALSE,  // dao是否使用缓存
        'session' => array(
            'secret' => 'pro',  // 加密的key。
            'to_cookie' => TRUE,  // 是否将加密的session串放到cookie中
                                 // 如果存到cookie的话，对应的参数，其含义参考php的setcookie函数
            'cookie' => array(
                'expire' => 0, 
                'path' => '/', 
                'domain' => $_SERVER['HTTP_HOST'],
                'secure' => FALSE, 
                'httponly' => FALSE 
            ) 
        ),
        'email' => array(//邮件发送服务
            'port' => 25,
            'host' => 'smtp.exmail.qq.com',
            'host_name' => 'exmail.qq.com',
            'user' => '@nd.com.cn',
            'user_pass' => '',
            'from' => 'o@nd.com.cn',
            'from_name' => ''
        ),
        'upload_root' => OP,  // 上传目录
        'upload_path' => array( // 上传文件路径
             'temps_file'=>array(//临时文件保存路径
                    'http' => 'http://'.$_SERVER['HTTP_HOST'].'/',  // http路径
                    'path' => 'upload' . DS . 'file' . DS . 'temps' . DS,   // 相对路径
                    'deep' => 0,    // 目录深度
                    'max_size' => 10*1024*1024
             )
        )
	 )
);