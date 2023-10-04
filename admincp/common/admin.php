<?php
$adminlogin="";
if(isset($_SESSION["webby_login"])&&!empty($_SESSION["webby_login"]&&$_SESSION["webby_login"]<>"")){
	$adminlogin=$_SESSION["webby_login"];

}

if(!empty($_COOKIE["webby_login"])&&$_COOKIE["webby_login"]<>""){
	$result=mysqli_query($con, "SELECT * FROM db_admin WHERE admin_unique='".$_COOKIE["webby_login"]."'");
	while($row=mysqli_fetch_array($result)){ 
		$adminlogin=$row["admin_id"]; 
	}
}

if($adminlogin<>""){
	$result=mysqli_query($con, "SELECT * FROM db_admin WHERE admin_id='".$adminlogin."'");
	while($row=mysqli_fetch_array($result)){ 
		$adminlogin=$row["admin_id"]; 
		$admin_post=$row["admin_post"];
	}
}
?>