<a href="?page=<?=$page?>&cate=<?=$cate?>&id=<?=$id?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-arrow-left"></i> Back to Blog Post</button>
</a>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=editBlogPost&id=<?=$id?>">
  <button type="button" class="btn btn-warning" ><i class="fa fa-pencil"></i> Edit Blog Post</button>
</a>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=manageBlogGallery&id=<?=$id?>">
  <button type="button" class="btn btn-warning" ><i class="fa fa-pencil"></i> Manage Gallery Images</button>
</a>
<br><br>

<h3 class="m-b-lg">Manage Extra Option: #<?=$id?> - <?=getPost($id, "post_title")?></h3>

<br><br>

<hr class="widget-separator">
<div class="widget-body">

  <form action="#" class="form-horizontal" method="post" data-parsley-validate>
  
    <input type="hidden" name="form" value="pages-blog-updateBlogExtra">
    <input type="hidden" name="token" value="<?=$Token?>">

    <div class="form-group">
      <label for="control-demo-1" class="col-sm-2">Extra Option Title</label>
      <div class="col-sm-10">
        <input type="text" name="txtTitle" id="txtTitle" class="form-control" value="<?=getDataTable("db_blog_post", "post_id", $id, "extra_title")?>">
      </div>
    </div><!-- .form-group -->

    <div class="form-group">
      <label for="control-demo-1" class="col-sm-2">Extra Link URL</label>
      <div class="col-sm-10">
        <input type="text" name="txtURL" id="control-demo-1" placeholder="Extra option link to eg: URL" class="form-control" value="<?=getDataTable("db_blog_post", "post_id", $id, "extra_link")?>">
      </div>
    </div><!-- .form-group -->


    <div class="form-group">
      <label for="control-demo-1" class="col-sm-2">Short Description</label>
      <div class="col-sm-10">
      </div>
    </div><!-- .form-group -->

    <textarea class="input-block-level" id="FCKeditor1" name="txtContent" rows="18"><?=getDataTable("db_blog_post", "post_id", $id, "extra_desc")?></textarea>
    <script type="text/javascript">
      CKEDITOR.replace( 'FCKeditor1',
      {
        toolbar : 'Basic', 
        height : '200px'
      });
    </script>

    <div class="form-group">
      <label for="control-demo-1" class="col-sm-3"><button type="submit" class="btn mw-md btn-primary">Save Extra Details</button></label>
      <div class="col-sm-4">
        
      </div>
    </div><!-- .form-group -->
  
  </form>

</div><!-- .widget-body -->
</form>