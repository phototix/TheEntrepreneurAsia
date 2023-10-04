<a href="?page=<?=$page?>&cate=<?=$cate?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-arrow-left"></i> Back to Blog Post</button>
</a>
<br><br>

<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Create New Blog Post</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post" data-parsley-validate>
	
		<input type="hidden" name="form" value="pages-blog-addPost">
		<input type="hidden" name="token" value="<?=$Token?>">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Title</label>
			<div class="col-sm-10">
				<input type="text" name="txtTitle" id="txtTitle" class="form-control" value="" required="required" onkeyup="convertToSlug(this.value)" onchange="convertToSlug(this.value)">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Cover URL</label>
			<div class="col-sm-10">
				<input type="text" name="txtImage" id="control-demo-1" placeholder="Image URL here..." class="form-control">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">URL Slug</label>
			<div class="col-sm-10">
				<input type="text" name="txtURLSlug" id="txtURLSlug" class="form-control" value="" required="required" readonly="readonly">
			</div>
		</div><!-- .form-group -->

		<?php
		$result=getTable("db_blog_post_category", "WHERE cate_stat<>'3'");
		if(count($result)>0){
		?>
		<div class="form-group">
			<label for="control-demo-6" class="col-sm-2">Post Category</label>
			<div id="control-demo-6" class="col-sm-10">
				<select class="form-control" name="txtPostType">
					<option value="0"<?php if($txtPostType==0){ ?> selected="selected"<?php } ?>>No Cateogry</option>
					<?php foreach ($result as $row) { ?>
					<option value="<?=$row["cate_id"]?>"<?php if($txtPostType==$row["cate_id"]){ ?> selected="selected"<?php } ?>><?=$row["cate_name"]?></option>
					<?php }?>
				</select>
			</div>
		</div><!-- .form-group -->
		<?php } ?>

		<textarea class="input-block-level" id="FCKeditor1" name="txtContent" rows="18"></textarea>
		<script type="text/javascript">
            CKEDITOR.replace( 'FCKeditor1',
            {
                toolbar : 'Full', 
				height : '500px'
            });
        </script>

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-3"><button type="submit" class="btn mw-md btn-primary">Create</button></label>
			<div class="col-sm-4">
				
			</div>
		</div><!-- .form-group -->
	
	</form>

</div><!-- .widget-body -->
</form>

<script>
function convertToSlug(strValue){
	var visitorName = "-";
	var myOldString = strValue;
	var myNewString = myOldString.replace(/ /g, visitorName);
	var myNewString = myNewString.replace(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/g, visitorName);
	document.getElementById("txtURLSlug").value=myNewString.toLowerCase();
}
convertToSlug(document.getElementById("txtTitle").value);
</script>