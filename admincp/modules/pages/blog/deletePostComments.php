<?php
include("../../../../controller/conn.php");
include("../../../../controller/functions.php");
include("../../../../controller/common.php");
include("../../../common/admin.php");
?>
<?php
$result=updateTable("db_blog_post_comments", "comment_stat", "3", "comment_id", $id);
?>