<?php
/* Check if have post */
$result=mysqli_query($con, "SELECT * FROM db_blog_post WHERE post_stat<>'3' AND post_display='1'");
if($gotPost==""){ $gotPost="no"; }
if(mysqli_num_rows($result)>0){$gotPost="yes";}

/* Check if url is Tiny or Category URL */
$checkCateURL=mysqli_query($con, "SELECT * FROM db_blog_post_category WHERE cate_stat<>'3' AND cate_slug_url='$page'");
$countCateURL=mysqli_num_rows($checkCateURL);
$checkTinyURL=mysqli_query($con, "SELECT * FROM db_tinyURL WHERE url_stat<>'3' AND url_token='$page'");
$countTinyURL=mysqli_num_rows($checkTinyURL);
$isShortURL="no";
if($countTinyURL>0||$countCateURL>0){
	$isShortURL="yes";
	if($isShortURL=="yes"){
		if($countTinyURL>0){
			while($row=mysqli_fetch_array($checkTinyURL)){
				$page=$row["url_page"];
				$cate=$row["url_cate"];
				$action=$row["url_action"];
				$id=$row["url_id"];
				$canonicalURL=$row["url_canonical"];
				$actualURL=$row["url_actual"];
			}
		}
		if($countCateURL>0){
			while($row=mysqli_fetch_array($checkCateURL)){
				$page="category";
				$cate=$row["cate_slug_url"];
			}
		}
	}
}
?>
<?php if($canonicalURL<>""&&$actualURL<>""){?>
<?php
header('HTTP/1.1 301 Moved Permanently');
header('Location: '.$actualURL);
?>
<?php } ?>