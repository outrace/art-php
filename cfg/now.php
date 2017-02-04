<?php
/**
 * 框架使用的配置文件
 */
return array( // 全局配置信息
    'encoding' => 'utf-8',
    'timezone' => 'Asia/Shanghai',
    'lang' => 'zh_CN',
    'locale' => 'zh_CN.utf-8',
    'index' => 'page.index.index',  // 首页默认的处理方法
    'tpl' => OP . 'tpl' . DS,  // 模版位置
    'ver_ip' => array(
        'pro' => array(// 正式环境IP列表
            '192.157.249.15', '192.157.249.150'
        )
    ),

    'dbsplit' => array(
        'bus\db',
        'split'
    ),  // 分库分表的处理函数,如果不进行分库，分表，请注释这里

    'cmd_inject' => 'bus\cmd',  // cmd的前置，后置拦截

    'cmd_cache'=>array(),   //有使用cmd cache的请求，cmd的cache指根据传入数据hash,与session无关

    'db_inject' => 'bus\db',  // db操作的前置，后置拦截

    'cmd_cache'=>array(  //cmd缓存
 		//key是cmd,返回数据格式目前只支持json和string，120是缓存时间
 		//'base.user.login'=>array('json', 120)
    )
);