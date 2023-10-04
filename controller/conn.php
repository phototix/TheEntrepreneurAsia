<?php
/*
TItle: Database & Global Connection Handler
Authoer: Brandon Chong
Version: 3.0
Description: This conn.php file contains not just mysql database connections, 
also you can configure all your views or pages connections.
General Configurations of your web applications
*/
/* AWS Credential Setup */
/* Make sure AWS PHP SDK is installed to root */
$awsKey="AKIAIJGMYAYMVH6MD7FQ";
$awsSecret="QKOBdGsMp/nN0ze6t/LKvR4SQvEbgTTszWtZI/xW";
$awsRegion="ap-southeast-1";
$awsS3ImageBucket="bcrasia.org";
// AWS
$config = [
	's3' => [  
		'key' => $awsKey,
    'region'  => $awsRegion,
    'version' => 'latest',
		'secret' => $awsSecret,
		'bucket' => $awsS3ImageBucket
	]
];

/* Live Database Connection */
$conn_mysql_host="localhost";
$conn_mysql_username="hoho6com_webbycms";
$conn_mysql_password="gAV4R22sx5pqAMpW";
$conn_mysql_database="hoho6com_tea";

/* Development Database Connection */
$conn_mysql_host_dev="localhost";
$conn_mysql_username_dev="root";
$conn_mysql_password_dev="1234";
$conn_mysql_database_dev="hoho6com_tea";

/* Here you can put your Localhost/Development Enviroment endpoint, so can be isolated from live database. */
$localhost_dev="www.theentrepreneurasia";

/* Include PHP Variables and defines. */
require("define.php");

/* 
Define to use localhost development database and is the web application use any database 
Put 'yes' to enable, 'no' to disable.
*/
$useLocalMySql="yes";$useDataTable="yes";

if($useDataTable=="yes"){
	if($useLocalMySql=="yes"){
		if($_SERVER["HTTP_HOST"]==$localhost_dev){
			$conn_mysql_host=$conn_mysql_host_dev;
			$conn_mysql_username=$conn_mysql_username_dev;
			$conn_mysql_password=$conn_mysql_password_dev;
			$conn_mysql_database=$conn_mysql_database_dev;
		}
	}
	if($conn_mysql_username==""||$conn_mysql_password==""||$conn_mysql_database==""){
		die('Database Config Error!');
	}else{
		$con = mysqli_connect($conn_mysql_host, $conn_mysql_username , $conn_mysql_password, $conn_mysql_database);
		if (!$con){
			die('Could not connect: ' . mysql_error());
		}
	}
}

/* Set your application timezone. */
date_default_timezone_set('Asia/Singapore');
?>
