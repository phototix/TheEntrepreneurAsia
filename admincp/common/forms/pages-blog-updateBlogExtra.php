<?php
if (isset($_POST['event_agenda'])&&!empty($_POST["event_agenda"])) {
	$event_agenda=$_POST["event_agenda"];$event_agenda = str_replace("'", '&#39;', $event_agenda);
}
if (isset($_POST['event_date'])&&!empty($_POST["event_date"])) {
	$event_date=$_POST["event_date"];$event_date = str_replace("'", '&#39;', $event_date);
}
if (isset($_POST['event_time'])&&!empty($_POST["event_time"])) {
	$event_time=$_POST["event_time"];$event_time = str_replace("'", '&#39;', $event_time);
}
if (isset($_POST['event_venue'])&&!empty($_POST["event_venue"])) {
	$event_venue=$_POST["event_venue"];$event_venue = str_replace("'", '&#39;', $event_venue);
}
if (isset($_POST['event_address'])&&!empty($_POST["event_address"])) {
	$event_address=$_POST["event_address"];$event_address = str_replace("'", '&#39;', $event_address);
}
if (isset($_POST['event_fees_early'])&&!empty($_POST["event_fees_early"])) {
	$event_fees_early=$_POST["event_fees_early"];$event_fees_early = str_replace("'", '&#39;', $event_fees_early);
}
if (isset($_POST['event_fees'])&&!empty($_POST["event_fees"])) {
	$event_fees=$_POST["event_fees"];$event_fees = str_replace("'", '&#39;', $event_fees);
}

$resultUpdateData=updateTable("db_blog_post", "event_agenda", $event_agenda, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "event_date", $event_date, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "event_time", $event_time, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "event_venue", $event_venue, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "event_address", $event_address, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "event_fees_early", $event_fees_early, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "event_fees", $event_fees, "post_id", $id, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
?>