<form action="" id="uploadImageGallery" class="form-horizontal" method="post" enctype="multipart/form-data">

  <input type="hidden" name="form" value="slider-imageUpdate">
  <input type="hidden" name="token" value="<?=$Token?>">

  <div class="form-group">
    <label for="control-demo-2" class="col-sm-2">Link URL</label>
    <div class="col-sm-8">
      <input type="text" name="txtURL" id="control-demo-1" value="<?=getImage($id, "image_link")?>" placeholder="Link URL here..." class="form-control">
    </div>
  </div><!-- .form-group -->

  <div class="form-group">
    <label for="control-demo-6" class="col-sm-2">Link Target</label>
    <div id="control-demo-6" class="col-sm-8">
      <select class="form-control" name="txtTarget">
        <option value="_parent"<?php if(getImage($id, "image_target")=="_parent"){ ?> selected="selected"<?php } ?>>Current Page</option>
        <option value="_blank"<?php if(getImage($id, "image_target")=="_blank"){ ?> selected="selected"<?php } ?>>New Windows</option>
      </select>
    </div>
  </div><!-- .form-group -->

  <center>
  <br><br>

  <a href="?page=<?=$page?>">
  <button type="button" class="btn btn-info">Back to Slider List</button>
  </a>

  <button type="submit" class="btn btn-success">Save</button>
  </center>

</form>