<?php
return array(
//'配置项'=>'配置值'
 'DB_TYPE'   => 'mysql', // 数据库类型
 'DB_PORT'   => 3306, // 端口        
  
//'DB_SQL_BUILD_CACHE' => true,//SQL缓存
 'APP_GROUP_LIST' => 'Home,Admin,Api', //项目分组设定
 'TMPL_PARSE_STRING'  =>array(
     'TIFAWEB_DSWJCMS' => 'Dswjcms', //后台访问地址
  ),
  'DEFAULT_FILTER'=>'htmlspecialchars,addslashes',	//get、post过滤
 //'TMPL_EXCEPTION_FILE'=>'./Tpl/Home/Logo/error.html',// 定义公共错误模板
 //'URL_404_REDIRECT'=>__ROOT__.'/error.html',
 'DS_PATH'=>'',
 'AUTH_CONFIG'=>array(
	'AUTH_ON' => true, //认证开关
	'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
	'AUTH_GROUP' => 'ds_auth_group', //用户组数据表名
	'AUTH_GROUP_ACCESS' => 'ds_auth_group_access', //用户组明细表
	'AUTH_RULE' => 'ds_auth_rule', //权限规则表
	'AUTH_USER' => 'ds_admin'//用户信息表
 ),
 'URL_ROUTER_ON'   => true, //开启路由
 //调试 
 //'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息

 //征信地址
 'DS_CREDIT_URL'	=>'http://www.dswjcms.com/Api/Core/',	//测试环境：http://www.dswjcms.cn/Api/Core/正式环境：http://www.tifaweb.cn/Api/Core/
// 'DATA_CACHE_TYPE'=>'Memcache',
 'URL_ROUTE_RULES' => array( //定义路由规则
		'Admin/Index/editsys/:id\d'				=> 'Admin/Index/editsys',
		'Admin/Basis/editlin/:id\d'				=> 'Admin/Basis/editlin',
		'Admin/Basis/delelin/:id\d'				=> 'Admin/Basis/delelin',
		'Admin/Basis/editint/:id\d'				=> 'Admin/Basis/editint',
		'Admin/Basis/deleint/:id\d'				=> 'Admin/Basis/deleint',
		'Admin/Basis/editshu/:id\d'				=> 'Admin/Basis/editshu',
		'Admin/Basis/delesh/:id\d'				=> 'Admin/Basis/delesh',
		'Admin/Basis/editlink/:id\d'			=> 'Admin/Basis/editlink',
		'Admin/Basis/deleli/:id\d'				=> 'Admin/Basis/deleli',
		'Admin/Fund/withdrawal_page/:id\d'		=> 'Admin/Fund/withdrawal_page',
		'Admin/Fund/recharge_page/:id\d'		=> 'Admin/Fund/recharge_page',
		'Admin/Integral/editgoo/:id\d'			=> 'Admin/Integral/editgoo',
		'Admin/Integral/delego/:id\d'			=> 'Admin/Integral/delego',
		'Admin/Integral/delivery/:id\d'			=> 'Admin/Integral/delivery',
		'Admin/Ganged/index/:id\d'				=> 'Admin/Ganged/index',
		'Admin/Ganged/exitgan/:id\d'			=> 'Admin/Ganged/exitgan',
		'Admin/Integralconf/index/:id\d'		=> 'Admin/Integralconf/index',
		'Admin/Integralconf/exitgan/:id\d'		=> 'Admin/Integralconf/exitgan',
		'Admin/Audit/vip/:id\d'					=> 'Admin/Audit/vip',
		'Admin/Audit/exitgan/:id\d'				=> 'Admin/Audit/exitgan',
	),
	//系统变量不要更改，更改将引响系统正常动作
	'DS_ENTERPRISE'			=>	'Dswjcms独立商城系统',
	'DS_EN_ENTERPRISE'		=>	'dsshop',
	'DS_TOP_POWERED'		=>	'Powered by Dswjcms!',
	'DS_POWERED'			=>	'<p class="pull-left">Powered by <strong><a href="http://www.dswjcms.com" target="_blank">Dswjcms!</a></strong> <em>X2.4.6</em><br/>&copy; 2003-2018<a href="http://www.tifaweb.com" target="_blank">Tf Inc.</a></p>',
	
	
);
?>