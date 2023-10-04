<?php session_start(); ?>
<?php require_once("../../controller/conn.php"); ?>
<?php require_once("../../controller/functions.php"); ?>
<?php require_once("../common/admin.php"); ?>
<?php
if($page=="logout"){
	setcookie("webby_login", "" ,time()-(86400 * 30), "/");
	session_destroy();
	?><script>window.location="?page=";</script><?
}
if($adminlogin==""){
	
	if($form=="login"){
		$txtKeepLogin="";
		$txtEmail="";
		$txtPassword="";
		$txtEmail=$_POST["txtEmail"];
		$txtPassword=$_POST["txtPassword"];
		if(!empty($_POST["txtKeepLogin"])&&$_POST["txtKeepLogin"]<>""){
			$txtKeepLogin=$_POST["txtKeepLogin"];
		}
		$result=mysqli_query($con, "SELECT * FROM db_admin WHERE admin_email='$txtEmail' AND admin_password='".md5($txtPassword)."' AND admin_stat<>'3'");
		if(mysqli_num_rows($result)==0){
			$error="Invalid Login";
			$result2=mysqli_query($con, "UPDATE db_admin SET system_error='$error' WHERE admin_id='1'");
		}else{
			$result2=mysqli_query($con, "UPDATE db_admin SET system_error='' WHERE admin_id='1'");
		}
		while($row=mysqli_fetch_array($result)){
			$uniqueId=$row["admin_unique"];
			$admin_log_count=$row["admin_log_count"];
			$admin_log_count++;
			$result2=mysqli_query($con, "UPDATE db_admin SET admin_log_count='$admin_log_count', admin_log_date='$Today', admin_log_time='$Time' WHERE admin_id='".$row["admin_id"]."'");
			if($txtKeepLogin==""){
				$_SESSION["webby_login"]=$row["admin_id"];
			}else{
				setcookie("webby_login", $uniqueId ,time()+(86400 * 30) * 12, "/");
			}
			?><script>window.location="";</script><?
		}
	}

	require_once("../includes/htmlstart.php");
	include('../modules/login.html');
	require_once("../includes/htmlend.php");

}else{
?>
<?php require_once("../common/form.php"); ?>
<?php require_once("../../controller/common.php"); ?>

	<?php require_once("../includes/htmlstart.php"); ?>

	<?php require_once("../includes/aside.php"); ?>
	<?php require_once("../includes/nav.php"); ?>
	<?php require_once("../includes/main.php"); ?>
	<?php require_once("../includes/js_includes.php"); ?>

	<?php require_once("../includes/htmlend.php"); ?>

<?php } ?>