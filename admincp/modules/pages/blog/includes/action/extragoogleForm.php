<a href="?page=<?=$page?>&cate=<?=$cate?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-arrow-left"></i> Back to Blog Post</button>
</a>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=manageBlogGallery&id=<?=$id?>">
	<button type="button" class="btn btn-warning" ><i class="fa fa-pencil"></i> Manage Gallery Images</button>
</a>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=manageBlogExtra&id=<?=$id?>">
	<button type="button" class="btn btn-warning" ><i class="fa fa-pencil"></i> Manage Extra Options</button>
</a>
<br><br>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=extrafloorPlan&id=<?=$id?>">
	<button type="button" class="btn btn-success" ><i class="fa fa-pencil"></i> Floor Plan</button>
</a>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=extrasitePlan&id=<?=$id?>">
	<button type="button" class="btn btn-success" ><i class="fa fa-pencil"></i> Site Plan</button>
</a>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=extralocation&id=<?=$id?>">
	<button type="button" class="btn btn-success" ><i class="fa fa-pencil"></i> Location</button>
</a>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=extraprojectInfo&id=<?=$id?>">
	<button type="button" class="btn btn-success" ><i class="fa fa-pencil"></i> Project Info</button>
</a>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=extragoogleForm&id=<?=$id?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-pencil"></i> Google Form</button>
</a>
<br><br>

<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Edit Blog Post <?=getDataTable("db_blog_post", "post_id", $id, "post_title")?></h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post" data-parsley-validate>
	
		<input type="hidden" name="form" value="pages-blog-<?=$action?>">

		<textarea class="input-block-level" id="FCKeditor1" name="txtContent" rows="18"><?=getDataTable("db_blog_post", "post_id", $id, "extragoogleForm")?></textarea>
		<script type="text/javascript">
            CKEDITOR.replace( 'FCKeditor1',
            {
                toolbar : 'Full', 
				height : '500px'
            });
        </script>
        
		<div class="form-group">
			<label for="control-demo-1" class="col-sm-3"><button type="submit" class="btn mw-md btn-primary">Update</button></label>
			<div class="col-sm-4">
				
			</div>
		</div><!-- .form-group -->
	
	</form>

</div><!-- .widget-body -->
</form>