<?php
$txtID=$_POST["txtID"];$txtID = str_replace("'", '&#39;', $txtID);
if (isset($_POST['txtID'])&&!empty($_POST["txtID"])) {
	$txtID=$_POST["txtID"];$txtID = str_replace("'", '&#39;', $txtID);
}

$txtStatus=$_POST["txtStatus"];$txtStatus = str_replace("'", '&#39;', $txtStatus);
if (isset($_POST['txtStatus'])&&!empty($_POST["txtStatus"])) {
	$txtStatus=$_POST["txtStatus"];$txtStatus = str_replace("'", '&#39;', $txtStatus);
}

$resultUpdateData=updateTable("db_events_log", "log_status", $txtStatus, "log_id", $txtID, true);

$systemSucces="Data updated.";
?>