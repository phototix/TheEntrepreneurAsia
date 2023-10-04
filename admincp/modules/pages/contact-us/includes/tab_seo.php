<div class="row">

	<div class="col-md-10 col-md-offset-1">
		<div class="m-b-xl">
			All settings will change to effects the outcome of search engine and crawler. <br>
			<code>og:title</code>, <code>og:description</code>, <code>og:image</code>, <code>name="title"</code>, <code>name="description"</code>, <code>name="keywords"</code>
		</div>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<form action="#" class="form-horizontal" method="post">
		<input type="hidden" name="form" value="pages-seo-contact-us">
			<div class="form-group">
				<label for="control-demo-1" class="col-sm-3">Title</label>
				<div class="col-sm-9">
					<input type="text" name="txtTitle" id="control-demo-1" class="form-control" value="<?=getPageWithSlug($cate, "page_title")?>">
				</div>
			</div><!-- .form-group -->

			<div class="form-group">
				<label for="control-demo-1" class="col-sm-3">Description</label>
				<div class="col-sm-9">
					<textarea name="txtDesc" id="control-demo-5" class="form-control" cols="30" rows="10"><?=getPageWithSlug($cate, "page_desc")?></textarea>
				</div>
			</div><!-- .form-group -->

			<div class="form-group">
				<label for="control-demo-1" class="col-sm-3">Short Description</label>
				<div class="col-sm-9">
					<textarea name="txtShortDesc" id="control-demo-5" class="form-control" cols="30" rows="5"><?=getPageWithSlug($cate, "page_short_desc")?></textarea>
				</div>
			</div><!-- .form-group -->

			<div class="form-group">
				<label for="control-demo-1" class="col-sm-3">Image Link</label>
				<div class="col-sm-9">
					<input type="text" name="txtImage" id="control-demo-1" class="form-control" placeholder="URL of the image file" value="<?=getPageWithSlug($cate, "page_cover")?>">
				</div>
			</div><!-- .form-group -->

			<div class="form-group">
				<label for="control-demo-1" class="col-sm-3">Keywords</label>
				<div class="col-sm-9">
					<textarea name="txtKeywords" id="control-demo-5" class="form-control" cols="30" rows="5"><?=getPageWithSlug($cate, "page_keywords")?></textarea>
				</div>
			</div><!-- .form-group -->

			<div class="form-group">
				<label for="control-demo-1" class="col-sm-3"></label>
				<div class="col-sm-4">
					<button type="submit" class="btn mw-md btn-primary">Save</button>
				</div>
			</div><!-- .form-group -->

		</form>
	</div>
</div>