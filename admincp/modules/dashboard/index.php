<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
		<div class="row">
			
			<div class="col-md-12 col-sm-12">
				<div class="widget p-md clearfix">
					<div class="pull-left">
						<h3 class="widget-title">Welcome back to <?=getSystem()?>'s CMS</h3>
					</div>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp"><?=getSystem("visitor_count_today")?></span></h3>
							<small class="text-color">Today Visitors</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
					</div>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp"><?=getSystem("visitor_count_new_today")?></span></h3>
							<small class="text-color">Today New Visitors</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
					</div>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp"><?=getSystem("visitor_count_return_today")?></span></h3>
							<small class="text-color">Today Return Visitors</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
					</div>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp"><?=getSystem("visitor_count_total")?></span></h3>
							<small class="text-color">Total Visitors</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
					</div>
				</div><!-- .widget -->
			</div>

			<?php if($systemDemo=="yes"){ ?>
				<div class="col-md-12 col-sm-12">
					<div class="widget stats-widget">
						<div class="widget-body clearfix">
							<div class="pull-left">
								<h3 class="widget-title text-primary">Enable Website</h3>
								
								<div class="checkbox checkbox-danger">
									<input type="checkbox" id="web_launch"  onclick="updateSystemLaunch()" <?php if(getSystem("web_launch")==1){ ?>checked<?php } ?>/>
									<label for="web_launch">Checked to Activate Website</label>
								</div>

								<div id="showDemoLink">
								<a href="/controller/index.php?module=startdemo&data=yes" target="_blank">View Demo</a>
								</div>

							</div>
							<span class="pull-right big-icon watermark"><i class="fa fa-globe"></i></span>
						</div>
					</div><!-- .widget -->
				</div>
				<script>
				function showSystemLaunchOption(){
					if(document.getElementById('web_launch').checked==true){
						document.getElementById('showDemoLink').style.display="none";
					}else{
						document.getElementById('showDemoLink').style.display="block";
					}
				}
				function updateSystemLaunch(){
					showSystemLaunchOption();
					if(window.XMLHttpRequest){updateSystemLaunchAjax=new XMLHttpRequest();
					}else{ updateSystemLaunchAjax=new ActiveXObject("Microsoft.XMLHTTP"); }
					updateSystemLaunchAjax.updateSystemLaunchAjax=function(){
						if (updateSystemLaunchAjax.readyState==4 && updateSystemLaunchAjax.status==200){
						}
					}
					updateSystemLaunchAjax.open("GET","../assets/php/updateSystemLaunchAjax.php" ,true);
					updateSystemLaunchAjax.send();
				}
				showSystemLaunchOption();
				</script>
			<?php } ?>

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