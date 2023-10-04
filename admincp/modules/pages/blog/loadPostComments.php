<?php
include("../../../../controller/conn.php");
include("../../../../controller/functions.php");
include("../../../../controller/common.php");
include("../../../common/admin.php");
?>
<table id="loadPostComments-table" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th></th>
			<th></th>
			<th>Date</th>
			<th>Name</th>
			<th>Comment</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$strNumber="";$comment_count=0;
		$result=getTable("db_blog_post_comments", "WHERE comment_stat<>'3' AND reply_id=0 AND blog_id='".$id."'");
		foreach ($result as $row) {
			$strNumber++;
		?>
		<tr>
			<td><?=$strNumber?></td>
			<td></td>
			<td><?=$row["comment_date"]?> <?=$row["comment_time"]?></td>
			<td><?=$row["comment_name"]?><br><?=$row["comment_email"]?></td>
			<td><?=$row["comment_contents"]?></td>
			<td>
			<?php if($row["reply_id"]==0){ ?>
			<button type="button" class="btn btn-default btn-xs" onclick="replyComment('<?=$id?>', '<?=$row["comment_id"]?>', document.getElementById('post-<?=$id?>').value)">Reply</button>
			<?php } ?>
			<button type="button" class="btn btn-default btn-xs" onclick="deleteComment('<?=$id?>', '<?=$row["comment_id"]?>', document.getElementById('post-<?=$id?>').value)">Delete</button>
			</td>
		</tr>
			<?php
			$result2=getTable("db_blog_post_comments", "WHERE comment_stat<>'3' AND reply_id='".$row["comment_id"]."'");
			foreach ($result2 as $row2) {
			?>
			<tr>
				<td><?=$strNumber?></td>
				<th><i class="fa fa-arrow-right"></i></th>
				<td><?=$row2["comment_date"]?> <?=$row2["comment_time"]?></td>
				<td><?=$row2["comment_name"]?><br><?=$row["comment_email"]?></td>
				<td><?=$row2["comment_contents"]?></td>
				<td>
				<button type="button" class="btn btn-default btn-xs" onclick="deleteComment('<?=$id?>', '<?=$row2["comment_id"]?>', document.getElementById('post-<?=$id?>').value)">Delete</button>
				</td>
			</tr>
			<?php } ?>
		<?php } ?>
	</tbody>
</table>