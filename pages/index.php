<?php include_once("layouts/loader.php") ?>

<div class="main-wrapper">
    
	<?php include("layouts/header.php") ?>
    
	<?php
	/*
	Title: Pages Index
	Author: Brandon Chong
	Version: 2.1
	*/

	// Template Default set include
	if($gotPost=="yes"){
		if($page<>""&&$page<>'index'){
			$pageFileSystem="pages/".$page.'/index.php';
			if(file_exists($pageFileSystem)){
				include($pageFileSystem);
			}else{
				include('pages/error/404.php');
			}
		}else{
			$pageFileSystem='pages/home/index.php';
			if(file_exists($pageFileSystem)){
				include($pageFileSystem);
			}else{
				include('pages/error/404.php');
			}
		}
	}else{
		include('pages/error/development.php');
	}
	?>    

</div>

<?php include("layouts/footer.php") ?>

<a href="" class="go-top animated js-go-top"><i class="fa fa-angle-up"></i></a>