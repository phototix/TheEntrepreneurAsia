<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
		<div class="row">

			<?php
		    if($_SESSION["systemSucces"]<>""){
		    ?>
				<div class="alert alert-success" role="alert">
					<strong><i class="fa fa-check"></i></strong>
					<span><?=$_SESSION["systemSucces"]?></span>
				</div>
				<?php $_SESSION["systemSucces"]=""; ?>
			<?php } ?>

			<?php
		    if($_SESSION["systemError"]<>""){
		    ?>
				<div class="alert alert-danger" role="alert">
					<strong><i class="fa fa-check"></i></strong>
					<span><?=$_SESSION["systemError"]?></span>
				</div>
				<?php $_SESSION["systemError"]=""; ?>
			<?php } ?>

			<header class="widget-header">
				<a href="?page=<?=$page?>&cate=<?=$cate?>">
					<button type="button" class="close">&times;</button>
				</a>
				<h4 class="widget-title">Addon Header for Analytics or Javascripts</h4>
			</header><!-- .widget-header -->
			<hr class="widget-separator">
			<div class="widget-body">

				<form action="#" class="form-horizontal" method="post">
				
					<input type="hidden" name="form" value="setting-addon">

					<div class="form-group">
						<div class="col-sm-12">
							<textarea name="txtContent" id="txtContent" class="form-control" cols="30" rows="5"><?=getSystem("header_body_addon")?></textarea>
						</div>
					</div><!-- .form-group -->

					<div class="form-group">
						<label for="control-demo-1" class="col-sm-3"><button type="submit" class="btn mw-md btn-primary">Save</button></label>
						<div class="col-sm-4">
							
						</div>
					</div><!-- .form-group -->
				
				</form>

			</div><!-- .widget-body -->
			</form>

		</div><!-- .row -->

	</section><!-- #dash-content -->
</div><!-- .wrap -->
	
<!-- APP FOOTER -->
<div class="wrap p-t-0">
	<footer class="app-footer">
		<div class="clearfix">
			<div class="copyright pull-left">Copyright <?=$Year?> &copy;</div>
		</div>
	</footer>
</div>
<!-- /#app-footer -->

</main>
<!--========== END app main -->