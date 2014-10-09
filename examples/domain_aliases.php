<?php

require_once("SplClassLoader.php");
$classLoader = new SplClassLoader('pmill\Plesk', '../src');
$classLoader->register();

$config = array(
	'host'=>'example.com',
	'username'=>'',
	'password'=>'',
);

$params = array(
	'domain'=>'example.com',
);

$request = new \pmill\Plesk\ListDomainAliases($config, $params);
$info = $request->process();

var_dump($info);