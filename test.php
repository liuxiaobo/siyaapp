<?php
    //mysql �����Ƿ����ӳɹ�
     if(mysql_connect('127.0.0.1','root','root'))
     {
	   echo 'succcess'; 
	 }

	 else{
	   echo 'fail';
	 }
	 
	// phpinfo();
	echo "����һ�ݲ����ļ�";
	//test php �հ��ĵ�ʹ��
	echo '<br/>';
	$greet = function($name)
	{
		printf("Hello %s\r\n", $name);
	};
	$greet('World');
	$greet('PHP');


?>