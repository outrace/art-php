<?php
/**
 * 数据库及缓存的配置
 */
return array( // 各模块数据库和缓存配置
    'dev' => array( //开发版本
        'sys' => array( // 系统配置，用来保存一些非模块使用的cache
            'cache' => array( 'host' => '127.0.0.1', 'port' => 11211) ,
            'mongo' => array(//Mongo配置
                'servers' => 'mongodb://user:pwd@127.0.0.1:27017', 'options' => array('db'=>'')
            ),
            'redis' => array('host' => '192.168.19.196', 'port' =>6379, 'auth' => '')
        ),
        'design' => array( //
            'mysql' => array( 'dsn' => 'mysql:host=127.0.0.1;port=3306;charset=utf8;dbname=art', 'user' => 'root','pwd' => 'root'),
            'cache' => array('host' => '127.0.0.1', 'port' => 11211),
            'mongo' => array('servers' => 'mongodb://127.0.0.1:27017','options' => array( 'db'=>'art') )
        )
    ),
    'pro' => array( //开发版本
        'sys' => array( // 系统配置，用来保存一些非模块使用的cache
            'cache' => array( 'host' => '127.0.0.1', 'port' => 11211) ,
            'mongo' => array(//Mongo配置
                'servers' => 'mongodb://user:pwd@127.0.0.1:27017', 'options' => array('db'=>'')
            ),
            'redis' => array('host' => '192.168.19.196', 'port' =>6379, 'auth' => '')
        ),
        'design' => array( //
            'mysql' => array( 'dsn' => 'mysql:host=127.0.0.1;port=3306;charset=utf8;dbname=art', 'user' => 'admin','pwd' => 'aDmin123!@#'),
            'cache' => array('host' => '127.0.0.1', 'port' => 11211),
            'mongo' => array('servers' => 'mongodb://127.0.0.1:27017','options' => array( 'db'=>'art') )
        )
    )
);