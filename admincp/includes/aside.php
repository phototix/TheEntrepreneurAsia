<!-- APP ASIDE ==========-->
<aside id="app-aside" class="app-aside left light">
	<header class="aside-header">
		<div class="animated">
			<a href="" id="app-brand" class="app-brand">
				<span id="brand-name" class="brand-icon foldable">WebbyCMS</span>
			</a>
		</div>
	</header><!-- #sidebar-header -->
	
	<div class="aside-user">
		<!-- aside-user -->
		<div class="media">
			<div class="media-left">
				<div class="avatar avatar-md avatar-circle">
					<a href="javascript:void(0)"><img class="img-responsive" src="../assets/images/webbyLogo.jpg" alt="avatar"/></a>
				</div><!-- .avatar -->
			</div>
			<div class="media-body">
				<div class="foldable">
					<h5><a href="javascript:void(0)" class="username"><?=getSystem("admin_name", $adminlogin)?></a></h5>
					<ul>
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<small>System</small>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu animated flipInY">
								<li>
									<a class="text-color" href="/" target="_blank">
										<span class="m-r-xs"><i class="fa fa-eye"></i></span>
										<span>Visit Website</span>
									</a>
								</li>
								<li>
									<a class="text-color" href="?page=logout">
										<span class="m-r-xs"><i class="fa fa-power-off"></i></span>
										<span>Logout</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /aside-user -->
	</div><!-- #aside-user -->

	<div class="aside-scroll">
		<div id="aside-scroll-inner" class="aside-scroll-inner">
			<ul class="aside-menu aside-left-menu">

				<li class="menu-item <?php if($page=="dashboard"){ ?>highlight<?php } ?>">
					<a href="?page=dashboard" class="menu-link">
						<span class="menu-icon"><i class="zmdi zmdi-view-dashboard zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Dashboard</span>
					</a>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu <?php if($page=="pages"){ ?>highlight<?php } ?>">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-pages zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Pages</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<?php
						$dir = "../modules/pages";
						// Open a directory, and read its contents
						if (is_dir($dir)){
						  if ($dh = opendir($dir)){
						    while (($file = readdir($dh)) !== false){
						    	if($file=="."||$file==".."||$file=="index.php"||$file==".DS_Store"){}else{
						  		?>
							  		<li<?php if($cate==$file){ ?> class="highlight"<?php } ?>>
							  		<a href="?page=pages&cate=<?=$file?>"><?=getPageWithSlug($file, "backend_menu_name")?></a>
							  		</li>
						  		<?    
						  		}
						    }
						    closedir($dh);
						  }
						}
						?>
					</ul>
				</li><!-- .menu-item -->

				<?php
				$useSlider="";
				$sliderModuleDir="../../admincp/modules/sliders/index.php";
				if(file_exists($sliderModuleDir)&&$useSlider=="yes"){
				?>
				<li class="menu-item <?php if($page=="sliders"){ ?>highlight<?php } ?>">
					<a href="?page=sliders" class="menu-link">
						<span class="menu-icon"><i class="zmdi zmdi-book-image zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Sliders</span>
					</a>
				</li><!-- .menu-item -->
				<?php } ?>

				<li class="menu-item <?php if($page=="image-library"){ ?>highlight<?php } ?>">
					<a href="https://brandhex.signin.aws.amazon.com/console" target="_blank" class="menu-link">
						<span class="menu-icon"><i class="zmdi zmdi-image zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Images Library</span>
					</a>
				</li><!-- .menu-item -->

				<li class="menu-item">
					<a href="http://www.slideshare.net" target="_blank" class="menu-link">
						<span class="menu-icon"><i class="zmdi zmdi-slideshare zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Slide Share</span>
					</a>
				</li><!-- .menu-item -->

				<li class="menu-item">
					<a href="https://www.youtube.com/channel/UCq2XSFkScSwOjYeZIr5nMxw" target="_blank" class="menu-link">
						<span class="menu-icon"><i class="zmdi zmdi-youtube-play zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Manage Youtube</span>
					</a>
				</li><!-- .menu-item -->

				<li class="menu-item <?php if($page=="setting"){ ?>highlight<?php } ?>">
					<a href="?page=setting" class="menu-link">
						<span class="menu-icon"><i class="zmdi zmdi-puzzle-piece zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Settings</span>
					</a>
				</li><!-- .menu-item -->

			</ul>
		</div><!-- .aside-scroll-inner -->
	</div><!-- #aside-scroll -->
</aside>
<!--========== END app aside -->