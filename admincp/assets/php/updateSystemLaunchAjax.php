<?php require_once("../../../controller/conn.php"); ?>
<?php require_once("../../../controller/functions.php"); ?>
<?php require_once("../../../controller/common.php"); ?>
<?php
$updateOption=getSystem("web_launch");
if($updateOption==0){
	$updateOption=1;
}else{
	$updateOption=0;
}
$result=mysqli_query($con, "UPDATE db_admin SET web_launch='$updateOption' WHERE admin_id='1'");
?>