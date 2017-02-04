<?php
/**
 * 主入口 
 * @author 欧远宁
 */
define('DS', DIRECTORY_SEPARATOR);
define('OP', dirname(__FILE__) . DS);    //定义项目代码根目录
define('FP',  dirname(OP). DS);          //定义开发框架根目录                   （这里请根据实际项目修改）
define('SITE_ROOT','/');                //站点根路径，比如 /   或者  /path/    （这里请根据实际项目修改）

require(FP.'now'.DS. 'control.php');
use now\control;
control::init();
control::execute();