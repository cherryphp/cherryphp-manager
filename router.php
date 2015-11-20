<?php
return array(
    'login'                => array('mcp\login', '', ''),
    'index'                => array('mcp\main', 'index', ''),
    'authorization'        => array('mcp\authorization', '', ''),
    'dataset'              => array('mcp\dataset', '', ''),
    'emailtype'            => array('mcp\dataset', 'emailtype', ''),
	'itemsetting'          => array('mcp\dataset', 'itemsetting', ''),
	'rewardsetting'        => array('mcp\dataset', 'rewardsetting', ''),
	'multipleactivity'     => array('mcp\dataset', 'multipleactivity', ''),
	'reward'               => array('mcp\dataset', 'reward', ''),
    'gameserver'           => array('mcp\gameserver', 'index', ''),
    'sbs'                  => array('mcp\gameserver', 'showBattleServer', ''),
    'sls'                  => array('mcp\gameserver', 'showLogin', ''),
    'sds'                  => array('mcp\gameserver', 'showServer', ''),
    'bserver'              => array('mcp\gameserver', 'getBattleServer', ''),
    'lserver'              => array('mcp\gameserver', 'getLogin', ''),
    'dserver'              => array('mcp\gameserver', 'getServer', ''),
    'emailserver'          => array('mcp\emailserver', 'index', ''),
    'getemailserver'       => array('mcp\emailserver', 'getEmailServer', ''),
    'getall'               => array('mcp\gameserver', 'getall', ''),
    'actser'               => array('mcp\gameserver', 'activeServer', ''),
    'reactser'             => array('mcp\gameserver', 'reActiveServer', ''),
    'log'                  => array('mcp\log', 'index', ''),
    'logact'               => array('mcp\log', '', ''),
    'logout'               => array('mcp\login','logout',''),
    'getkv'                => array('mcp\login','get_kv',''),//测试权限对应关系列表
    'version'              => array('mcp\version','index',''),
    'savever'              => array('mcp\version','save',''), 
    'launchserver'         => array('mcp\gameserver','launchServer',''), 
    'getcharts'            => array('mcp\charts','getcharts',''), //测试图标数据
    'analytics'            => array('mcp\analytics','',''), //测试图标数据
);
