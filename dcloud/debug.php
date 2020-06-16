<?php

return [
	'DB_HOST' => 'mysql', // 服务器地址
	'DB_NAME' => 'dcloud', // 数据库名
	'DB_USER' => 'root', // 用户名
	'DB_PWD' => 'root', // 密码
	'DB_PORT' => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀

	// CFS
	'CFS_ROOT' => "/Users/zhangwenbo/Work/Code/dcloud.oa.com",

	'TMPL_EXCEPTION_FILE' => THINK_PATH . 'Tpl/think_exception.tpl',

	//'CDC_DEBUG' => true,

	// 开发环境
	'CDC_DEV' => true,
	// 邮件接收人
	'CDC_DEV_EMAIL_RECEIVER' => 'v_wbozhang@tencent.com',
	// rtx接收人
	'CDC_DEV_RTX_RECEIVER' => 'v_wbozhang',
	// MOA审批人
	'CDC_DEV_MOA' => '95005',
	// 添加一个开发环境开启MOA的配置项
	'CDC_DEV_MOA_OPEN' => false,
	// 开发环境的邮件配置
	"SMTP_HOST" => "smtp.tencent.com",
	"SMTP_OPTIONS" => [
		'ssl' => [
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		]
	],

	'URL_HTML_SUFFIX' => '',
	"URL_MODEL" => 2,

	// cURL代理
	"DEV_PROXY_HOST" => "web-proxy.oa.com",
	"DEV_PROXY_PORT" => 8080,

	"HTTP_HOST" => "http://dcloud.home.com/"

];
