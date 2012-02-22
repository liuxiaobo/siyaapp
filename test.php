<?php
    //mysql 测试是否链接成功
     if(mysql_connect('127.0.0.1','root','root'))
     {
	   echo 'succcess'; 
	 }

	 else{
	   echo 'fail';
	 }
	 
	// phpinfo();
	echo "这是一份测试文件";
	//test php 闭包的的使用
	echo '<br/>';
	$greet = function($name)
	{
		printf("Hello %s\r\n", $name);
	};
	$greet('World');
	$greet('PHP');


?>