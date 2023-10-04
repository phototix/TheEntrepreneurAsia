<?php require_once("../../../controller/conn.php"); ?>
<?php require_once("../../../controller/functions.php"); ?>
<?php require_once("../../../controller/common.php"); ?>
<?php
$updateOption=getSystem("nav_options");
if($updateOption==0){
	$updateOption=1;
}else{
	$updateOption=0;
}
$result=mysqli_query($con, "UPDATE db_admin SET nav_options='$updateOption' WHERE admin_id='1'");
?>