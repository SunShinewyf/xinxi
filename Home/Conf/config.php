<?php
$project_config = require('./config.inc.php');
$app_config = array(
    //'配置项'=>'配置值'
    'TMPL_PARSE_STRING' => array(
        '__ROOT__' => '/xinxi',
		'__UPLOADS__' => '/xinxi/Uploads',
		'SHOW_PAGE_TRACE'=>true,//开启页面Trace
        '__PUBLIC__' => '/xinxi/Public'
    ),  //部署前需修改
);
return array_merge($project_config, $app_config);
?>