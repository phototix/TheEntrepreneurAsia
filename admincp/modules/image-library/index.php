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

      <div role="tabpanel" class="tab-pane in active fade" id="contents">
      <h3 class="m-b-lg">Image Library</h3>
      <div class="row">
        
        <div class="col-md-12">
          <div class="widget">

            <div class="widget-body">
              <?php include("includes/tab_gallery.php") ?>
            </div><!-- .widget-body -->

          </div><!-- .widget -->
        </div><!-- END column -->

      </div><!-- .row -->
    </div><!-- .tab-pane -->

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