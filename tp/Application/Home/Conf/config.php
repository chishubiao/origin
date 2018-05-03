<?php
return array (
    //模板相关
    'TMPL_DETECT_THEME' => true, // 自动侦测模板主题

    // 开启路由
    'URL_ROUTER_ON'   => true,
    'URL_HTML_SUFFIX'=>'html|shtml|xml',//限制伪静态的后缀
    /* URL配置 */

    'URL_MODEL'            => 3, //URL模式
  //    "URL_PATHINFO_DEPR"=>"-",
    'URL_PARAMS_BIND'=>true,
    'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符
    'SHOW_PAGE_TRACE' => false,
    'URL_CASE_INSENSITIVE' => true,
    'DB_LIKE_FIELDS' => 'news_title|news_content|news_flag|news_open',
    'URL_MAP_RULES' =>
        array (
            'about' => 'home/list/index?id=1',
            'contacts' => 'home/list/index?id=10',
            'index' => 'home/index/index',
        ),
    'MODULE_DENY_LIST' => array('Common','Admin'),
    'MODULE_ALLOW_LIST' => array('Home'),
    'APP_GROUP_LIST'=>'Home,Admin',//开启分组
    //'DEFAULT_GROUP'  => 'Home', //默认分组
    'DEFAULT_MODULE' => 'Home', //默认模块
    'URL_ROUTE_RULES' =>
        array (
            'list/:id\\d' => 'home/list/index',
            'news/:id\\d' => 'home/news/index',
        ),
    'YFCMF_VERSION' => 'V1.2.0',
    'THINK_SDK_QQ' =>
        array (
            'APP_KEY' => '203564',
            'APP_SECRET' => 'bab1f3acc0c67b69a1f470ac5e8dc36a',
            'CALLBACK' => 'http://www.rainfer.cn/index.php?m=Home&c=oauth&a=callback&type=qq',
        ),
/*    'THINK_SDK_SINA' =>
        array (
            'APP_KEY' => '602735229',
            'APP_SECRET' => '66781cbeab9fdb9b014a387ab6e943fe',
            'CALLBACK' => 'http://www.rainfer.cn/index.php?m=Home&c=oauth&a=callback&type=sina',
        ),*/
    'COMMENT' =>
        array (
            'T_OPEN' => '1',
            'T_LIMIT' => 60,
        ),
    'TMPL_PARSE_STRING'=>array(
        '__CSS__'=> '/Public/css',
        '__IMG__'=> '/Public/img',
        '__JS__'=> '/Public/js',
    ),
    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    //'DB_HOST'   => '114.119.7.67', // 服务器地址
    'DB_HOST'   => '120.79.88.86', // 服务器地址
    'DB_NAME'   => 'test', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '123456',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'h_', // 数据库表前缀


);
