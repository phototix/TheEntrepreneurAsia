<? session_start();?>
<?php include("controller/conn.php"); ?>
<?php include("controller/functions.php"); ?>
<?php include("controller/common.php"); ?>
<?
$result = mysqli_query($con, "SELECT * FROM db_advert WHERE advert_stat<>'3' AND advert_display=1 AND advert_id=".$_GET["ad"]);
if (mysqli_num_rows($result)==0) { ?><center>No ads records.<br><a href="/">Back to homepage</a></center><? }
while($row = mysqli_fetch_array($result)){ 
$redirect_url=$row["advert_url"];$redirect_clicked=$row["advert_clicked"]; $redirect_id=$row["advert_id"]; 
	if($_SESSION["advert_".$redirect_id]==""){
		$_SESSION["advert_".$redirect_id]="clicked";
		$redirect_clicked++;
		$result = mysqli_query($con, "UPDATE db_advert SET advert_clicked=$redirect_clicked WHERE advert_id=".$_GET["ad"]);
	}
	?><script type="text/javascript">window.location = "<?=$redirect_url?>"</script><?
}
?>