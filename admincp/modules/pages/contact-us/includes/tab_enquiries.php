<div class="table-responsive">
	<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>No.</th>
				<th>Enquiry ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Message</th>
				<th>Enquiry date</th>
				<th><i class="fa fa-eye"></i></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$strNumber="";
			$result=mysqli_query($con, "SELECT * FROM db_enquiry WHERE enquiry_stat<>'3' ORDER BY enquiry_date DESC, enquiry_read ASC");
			while($row=mysqli_fetch_array($result)){
				$strNumber++;
			?>
			<tr>
				<td><?=$strNumber?></td>
				<td>EN-<?=str_pad($row["enquiry_id"], 5, "0", STR_PAD_LEFT)?></td>
				<td><?=$row["enquiry_name"]?></td>
				<td><?=$row["enquiry_email"]?></td>
				<td><?=$row["enquiry_title"]?></td>
				<td><?=$row["enquiry_contents"]?></td>
				<td><?=$row["enquiry_date"]?> (<?=$row["enquiry_time"]?>)</td>
				<td>
					<?php if($row["enquiry_read"]==0){ ?>
						<button type="button" class="btn btn-success btn-xs">Un-Read</button>
					<?php }else{ ?>
						<button type="button" class="btn btn-default btn-xs">Read</button>
					<?php } ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php
	if($admin_post=="superadmin"){}else{
		$result=mysqli_query($con, "UPDATE db_enquiry SET enquiry_read='1' WHERE enquiry_stat<>'3'");
	}
	?>
</div>