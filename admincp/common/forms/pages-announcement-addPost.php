<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
$txtKeywords=$_POST["txtKeywords"];$txtKeywords = str_replace("'", '&#39;', $txtKeywords);

if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}
if (isset($_POST['txtURLSlug'])&&!empty($_POST["txtURLSlug"])) {
	$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
}
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
}
if (isset($_POST['txtImage'])&&!empty($_POST["txtImage"])) {
	$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
}
if (isset($_POST['txtKeywords'])&&!empty($_POST["txtKeywords"])) {
	$txtKeywords=$_POST["txtKeywords"];$txtKeywords = str_replace("'", '&#39;', $txtKeywords);
}
$txtPostType=$_POST["txtPostType"];$txtPostType = str_replace("'", '&#39;', $txtPostType);
if (isset($_POST['txtPostType'])&&!empty($_POST["txtPostType"])) {
	$txtPostType=$_POST["txtPostType"];$txtPostType = str_replace("'", '&#39;', $txtPostType);
}

$result=mysqli_query($con, "SELECT * FROM db_annoucement_post WHERE post_stat<>'3' AND post_slug='$txtURLSlug'");
$slugCount=count($result);
if($slugCount==0){ $txtURLSlug=$txtURLSlug; }else{
	$txtURLSlug = $txtURLSlug . "-". $slugCount;
}

$getToken=getToken($token);
if($getToken==true){
	$inputToken=inputToken($token);
	if($inputToken==true){

		$token=strtoupper($token);
		$token = substr($token, 0, 10);
		
		$result=mysqli_query($con, "INSERT INTO db_annoucement_post 
			(post_date, post_time, post_title, post_slug, post_contents, admin_id, post_cover, post_token, cate_id) 
			VALUES 
			('$Today', '$Time', '$txtTitle', '$txtURLSlug', '$txtContent', '".$adminlogin."', '$txtImage', '$token', '$txtPostType')");
		$newInsertID=mysqli_insert_id($con);
		
		$result=mysqli_query($con, "INSERT INTO db_tiny_url (tiny_page, tiny_id, tiny_slug) VALUES ('blog', '$newInsertID', '$txtURLSlug')");

		$systemSucces="Data added.";
		$currentURl="?page=pages&cate=annoucements";
	}else{
		$systemError="Invalid Token (Insert)";
	}	
}else{
	$systemError="Invalid Token (Query)";
}
?>