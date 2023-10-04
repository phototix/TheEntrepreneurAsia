<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Contact Details</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post">
	
		<input type="hidden" name="form" value="pages-contact-us-info">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Phone</label>
			<div class="col-sm-10">
				<input type="text" name="txtPhone" placeholder="+12 3456 7890" class="form-control" value="<?=getDataTable("db_admin", "admin_id", "1", "front_phone")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Email</label>
			<div class="col-sm-10">
				<input type="text" name="txtEmail" placeholder="admin@domain.com" class="form-control" value="<?=getDataTable("db_admin", "admin_id", "1", "front_email")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-3"><button type="submit" class="btn mw-md btn-primary">Save</button></label>
			<div class="col-sm-4">
				
			</div>
		</div><!-- .form-group -->
	
	</form>

</div><!-- .widget-body -->

<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Business Hours</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post">
	
		<input type="hidden" name="form" value="pages-contact-us-businesshours">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Monday</label>
			<div class="col-sm-10">
				<input type="text" name="txtMon" placeholder="7:30am - 8:00pm / Holiday" class="form-control" value="<?=getDataTable("db_admin", "admin_id", "1", "front_bhour_mon")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Tuesday</label>
			<div class="col-sm-10">
				<input type="text" name="txtTue" placeholder="7:30am - 8:00pm / Holiday" class="form-control" value="<?=getDataTable("db_admin", "admin_id", "1", "front_bhour_tue")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Webnesday</label>
			<div class="col-sm-10">
				<input type="text" name="txtWed" placeholder="7:30am - 8:00pm / Holiday" class="form-control" value="<?=getDataTable("db_admin", "admin_id", "1", "front_bhour_wed")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Thursday</label>
			<div class="col-sm-10">
				<input type="text" name="txtThu" placeholder="7:30am - 8:00pm / Holiday" class="form-control" value="<?=getDataTable("db_admin", "admin_id", "1", "front_bhour_thu")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Friday</label>
			<div class="col-sm-10">
				<input type="text" name="txtFri" placeholder="7:30am - 8:00pm / Holiday" class="form-control" value="<?=getDataTable("db_admin", "admin_id", "1", "front_bhour_fri")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Saturday</label>
			<div class="col-sm-10">
				<input type="text" name="txtSat" placeholder="7:30am - 8:00pm / Holiday" class="form-control" value="<?=getDataTable("db_admin", "admin_id", "1", "front_bhour_sat")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Sunday</label>
			<div class="col-sm-10">
				<input type="text" name="txtSun" placeholder="7:30am - 8:00pm / Holiday" class="form-control" value="<?=getDataTable("db_admin", "admin_id", "1", "front_bhour_sun")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-3"><button type="submit" class="btn mw-md btn-primary">Save</button></label>
			<div class="col-sm-4">
				
			</div>
		</div><!-- .form-group -->
	
	</form>
</div><!-- .widget-body -->

<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Google Map</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post">
	
		<input type="hidden" name="form" value="pages-contact-us-googlemap">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Google Embed</label>
			<div class="col-sm-10">
				<textarea name="txtContent" id="txtContent" class="form-control" cols="30" rows="5"><?=getSystem("front_google_map_embed")?></textarea>
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-3"><button type="submit" class="btn mw-md btn-primary">Save</button></label>
			<div class="col-sm-4">
				
			</div>
		</div><!-- .form-group -->
	
	</form>

</div><!-- .widget-body -->