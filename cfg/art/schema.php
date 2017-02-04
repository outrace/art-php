<?php
/**
 * [art]库的表配置
 * @package
 */
return array(
    'log' => array( //日志
        'fields'=>'`log_id`,`mdl`,`msg`,`user_id`,`add_time`',
        'default' => array('log_id'=>'','mdl'=>'','msg'=>'','user_id'=>'','add_time'=>0),
        'check' => array('log_id'=>'uuid','mdl'=>'str-2','msg'=>'str-0-300','user_id'=>'uuid','add_time'=>'timestamp'),
        'name' => array('log_id'=>'ID','mdl'=>'模块','msg'=>'消息','user_id'=>'操作人','add_time'=>'操作时间'),
        'ver'=>'1',
        'cache'=>1,
        'driver'=>'mysql'
    ),

    'user' => array( //用户
        'fields'=>'`user_id`,`uno`,`uname`,`pwd`,`last_login`,`last_ip`,`add_time`,`lv_kind`,`lv_no`,`team_id`,`role`,`status`',
        'default' => array('user_id'=>'','uno'=>'','uname'=>'','pwd'=>'','last_login'=>0,'last_ip'=>'','add_time'=>0,'lv_kind'=>'P','lv_no'=>3,'team_id'=>'','role'=>0,'status'=>0),
        'check' => array('user_id'=>'uuid','uno'=>'num-3-20','uname'=>'str-2-30','pwd'=>'str-6-32','last_login'=>'timestamp','last_ip'=>'ip','add_time'=>'timestamp','lv_kind'=>'str-1','lv_no'=>'int-1-12','team_id'=>'uuid','role'=>'int-0-1','status'=>'int-0-1'),
        'name' => array('user_id'=>'ID','uno'=>'工号','uname'=>'姓名','pwd'=>'密码','last_login'=>'最后登录时间','last_ip'=>'最后登录IP','add_time'=>'新增时间','lv_kind'=>'级别类型','lv_no'=>'级别数','team_id'=>'小组ID','role'=>'0普通1管理员','status'=>'0正常1停用'),
        'ver'=>'1',
        'cache'=>1,
        'driver'=>'mysql'
    ),

    'utag' => array( //用户标签
        'fields'=>'`utag_id`,`user_id`,`tag_id`,`sort`',
        'default' => array('utag_id'=>'','user_id'=>'','tag_id'=>'','sort'=>0),
        'check' => array('utag_id'=>'uuid','user_id'=>'uuid','tag_id'=>'str-1-20','sort'=>'int-0-3'),
        'name' => array('utag_id'=>'ID','user_id'=>'用户ID','tag_id'=>'标签ID','sort'=>'排序'),
        'ver'=>'1',
        'cache'=>1,
        'driver'=>'mysql'
    ),

    'team' => array( //小组
        'fields'=>'`team_id`,`tname`,`user_id`',
        'default' => array('team_id'=>'','tname'=>'','user_id'=>''),
        'check' => array('team_id'=>'uuid','tname'=>'str-1-50','user_id'=>'uuid'),
        'name' => array('team_id'=>'ID','tname'=>'组名','user_id'=>'组长'),
        'ver'=>'1',
        'cache'=>1,
        'driver'=>'mysql'
    ),

    'task' => array( //任务
        'fields'=>'`task_id`,`tname`,`tqd`,`step`,`user_id`,`plan_begin`,`plan_end`,`plan_time`,`real_begin`,`real_end`,`real_time`,`rate`,`flag`,`ck_user_id`,`pass_time`,`erp_link`,`prj_id`',
        'default' => array('task_id'=>'','tname'=>'','tqd'=>'','step'=>'','user_id'=>'','plan_begin'=>'','plan_end'=>'','plan_time'=>0,'real_begin'=>'','real_end'=>'','real_time'=>0,'rate'=>0,'flag'=>0,'ck_user_id'=>'','pass_time'=>'','erp_link'=>'','prj_id'=>''),
        'check' => array('task_id'=>'uuid','tname'=>'str-1-100','tqd'=>'str-1-20','step'=>'str-1-20','user_id'=>'uuid','plan_begin'=>'','plan_end'=>'','plan_time'=>'','real_begin'=>'','real_end'=>'','real_time'=>'','rate'=>'','flag'=>'int-0-10','ck_user_id'=>'','pass_time'=>'','erp_link'=>'','prj_id'=>'uuid'),
        'name' => array('task_id'=>'ID','tname'=>'任务名称','tqd'=>'TQD','step'=>'阶段','user_id'=>'执行人','plan_begin'=>'计划开始','plan_end'=>'计划结束','plan_time'=>'计划投入','real_begin'=>'实际开始','real_end'=>'实际结束','real_time'=>'实际投入','rate'=>'进度','flag'=>'0开始1进行2审核3完成','ck_user_id'=>'审核人','pass_time'=>'通过时间','erp_link'=>'ERP单据地址','prj_id'=>'项目ID'),
        'ver'=>'1',
        'cache'=>1,
        'driver'=>'mysql'
    ),

    'check' => array( //审核
        'fields'=>'`check_id`,`ck_user_id`,`task_id`,`add_time`,`flag`,`msg`',
        'default' => array('check_id'=>'','ck_user_id'=>'','task_id'=>'','add_time'=>0,'flag'=>0,'msg'=>''),
        'check' => array('check_id'=>'uuid','ck_user_id'=>'uuid','task_id'=>'uuid','add_time'=>'timestamp','flag'=>'int-0-1','msg'=>'str-0-500'),
        'name' => array('check_id'=>'ID','ck_user_id'=>'审核人','task_id'=>'任务ID','add_time'=>'审核时间','flag'=>'0不通过1通过','msg'=>'原因说明'),
        'ver'=>'1',
        'cache'=>1,
        'driver'=>'mysql'
    ),

    'prj' => array( //项目
        'fields'=>'`prj_id`,`pname`,`add_time`',
        'default' => array('prj_id'=>'','pname'=>'','add_time'=>0),
        'check' => array('prj_id'=>'uuid','pname'=>'str-1-100','add_time'=>'timestamp'),
        'name' => array('prj_id'=>'ID','pname'=>'项目名称','add_time'=>'新增时间'),
        'ver'=>'1',
        'cache'=>1,
        'driver'=>'mysql'
    ),

);