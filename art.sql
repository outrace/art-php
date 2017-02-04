DROP DATABASE IF EXISTS `art`;
CREATE DATABASE IF NOT EXISTS `art`;
USE `art`;
CREATE TABLE IF NOT EXISTS `log` (
  `log_id` char(16) NOT NULL DEFAULT '' COMMENT 'ID',
  `mdl` char(2) NOT NULL DEFAULT '' COMMENT '模块',
  `msg` varchar(300) NOT NULL DEFAULT '' COMMENT '消息',
  `user_id` char(16) NOT NULL DEFAULT '' COMMENT '操作人',
  `add_time` int unsigned NOT NULL DEFAULT 0 COMMENT '操作时间',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='日志';

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` char(16) NOT NULL DEFAULT '' COMMENT 'ID',
  `uno` varchar(20) NOT NULL DEFAULT '' COMMENT '工号',
  `uname` varchar(30) NOT NULL DEFAULT '' COMMENT '姓名',
  `pwd` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `last_login` int unsigned NOT NULL DEFAULT 0 COMMENT '最后登录时间',
  `last_ip` varchar(50) NOT NULL DEFAULT '' COMMENT '最后登录IP',
  `add_time` int unsigned NOT NULL DEFAULT 0 COMMENT '新增时间',
  `lv_kind` char(1) NOT NULL DEFAULT 'P' COMMENT '级别类型',
  `lv_no` tinyint NOT NULL DEFAULT 3 COMMENT '级别数',
  `team_id` char(16) NOT NULL DEFAULT '' COMMENT '小组ID',
  `role` tinyint NOT NULL DEFAULT 0 COMMENT '0普通1管理员',
  `status` tinyint NOT NULL DEFAULT 0 COMMENT '0正常1停用',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户';

CREATE TABLE IF NOT EXISTS `utag` (
  `utag_id` char(16) NOT NULL DEFAULT '' COMMENT 'ID',
  `user_id` char(16) NOT NULL DEFAULT '' COMMENT '用户ID',
  `tag_id` varchar(20) NOT NULL DEFAULT '' COMMENT '标签ID',
  `sort` smallint NOT NULL DEFAULT 0 COMMENT '排序',
  PRIMARY KEY (`utag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户标签';

CREATE TABLE IF NOT EXISTS `team` (
  `team_id` char(16) NOT NULL DEFAULT '' COMMENT 'ID',
  `tname` varchar(50) NOT NULL DEFAULT '' COMMENT '组名',
  `user_id` char(16) NOT NULL DEFAULT '' COMMENT '组长',
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='小组';

CREATE TABLE IF NOT EXISTS `task` (
  `task_id` char(16) NOT NULL DEFAULT '' COMMENT 'ID',
  `tname` varchar(100) NOT NULL DEFAULT '' COMMENT '任务名称',
  `tqd` varchar(20) NOT NULL DEFAULT '' COMMENT 'TQD',
  `step` varchar(20) NOT NULL DEFAULT '' COMMENT '阶段',
  `user_id` char(16) NOT NULL DEFAULT '' COMMENT '执行人',
  `plan_begin` varchar(20) NOT NULL DEFAULT '' COMMENT '计划开始',
  `plan_end` varchar(20) NOT NULL DEFAULT '' COMMENT '计划结束',
  `plan_time` float NOT NULL DEFAULT 0 COMMENT '计划投入',
  `real_begin` varchar(20) NOT NULL DEFAULT '' COMMENT '实际开始',
  `real_end` varchar(20) NOT NULL DEFAULT '' COMMENT '实际结束',
  `real_time` float NOT NULL DEFAULT 0 COMMENT '实际投入',
  `rate` int NOT NULL DEFAULT 0 COMMENT '进度',
  `flag` tinyint NOT NULL DEFAULT 0 COMMENT '0开始1进行2审核3完成',
  `ck_user_id` char(16) NOT NULL DEFAULT '' COMMENT '审核人',
  `pass_time` varchar(20) NOT NULL DEFAULT '' COMMENT '通过时间',
  `erp_link` varchar(200) NOT NULL DEFAULT '' COMMENT 'ERP单据地址',
  `prj_id` char(16) NOT NULL DEFAULT '' COMMENT '项目ID',
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='任务';

CREATE TABLE IF NOT EXISTS `check` (
  `check_id` char(16) NOT NULL DEFAULT '' COMMENT 'ID',
  `ck_user_id` char(16) NOT NULL DEFAULT '' COMMENT '审核人',
  `task_id` char(16) NOT NULL DEFAULT '' COMMENT '任务ID',
  `add_time` int unsigned NOT NULL DEFAULT 0 COMMENT '审核时间',
  `flag` tinyint NOT NULL DEFAULT 0 COMMENT '0不通过1通过',
  `msg` varchar(500) NOT NULL DEFAULT '' COMMENT '原因说明',
  PRIMARY KEY (`check_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='审核';

CREATE TABLE IF NOT EXISTS `prj` (
  `prj_id` char(16) NOT NULL DEFAULT '' COMMENT 'ID',
  `pname` varchar(100) NOT NULL DEFAULT '' COMMENT '项目名称',
  `add_time` int unsigned NOT NULL DEFAULT 0 COMMENT '新增时间',
  PRIMARY KEY (`prj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='项目';

