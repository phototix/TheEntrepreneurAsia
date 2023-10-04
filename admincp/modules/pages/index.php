<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
		
		<div class="m-b-xl">
			<h1 style="font-size: 20px;"><?=ucfirst($cate)?> <?=ucfirst($page)?> Management</h1>
		</div>

		<div class="m-b-lg nav-tabs-horizontal">

			<?php
			$systemCate="../modules/".$page."/".$cate."/index.php";
			if(file_exists($systemCate)){
				include($systemCate);
			}else{
				echo "System Include File Error. Please check your ?cate= pointer is correct and same as your folder name.";
			}
			?>

		</div><!-- .row -->

	</section><!-- #dash-content -->
</div><!-- .wrap -->
	
<!-- APP FOOTER -->
<div class="wrap p-t-0">
	<footer class="app-footer">
		<div class="clearfix">
			<div class="copyright pull-left"><a href="http://www.webbypage.com/" target="_blank">WebbyCMS</a> Copyright 2012 - <?=$Year?> &copy;</div>
		</div>
	</footer>
</div>
<!-- /#app-footer -->

</main>
<!--========== END app main -->