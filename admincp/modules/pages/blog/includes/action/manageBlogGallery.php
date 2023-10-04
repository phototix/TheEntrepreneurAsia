<a href="?page=<?=$page?>&cate=<?=$cate?>&id=<?=$id?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-arrow-left"></i> Back to Blog Post</button>
</a>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=editBlogPost&id=<?=$id?>">
	<button type="button" class="btn btn-warning" ><i class="fa fa-pencil"></i> Edit Blog Post</button>
</a>
<a href="?page=<?=$page?>&cate=<?=$cate?>&action=manageBlogExtra&id=<?=$id?>">
  <button type="button" class="btn btn-warning" ><i class="fa fa-pencil"></i> Manage Extra Options</button>
</a>
<br><br>

<h3 class="m-b-lg">Manage Gallery for Blog: #<?=$id?> - <?=getPost($id, "post_title")?></h3>

<button type="button" class="btn btn-success" onclick="uploadImage()"><i class="fa fa-pencil"></i> Upload</button>

<br><br>

<div class="table-responsive">

	<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th></th>
        <th>Thumbnail</th>
        <th width="70%">Image</th>
        <th>Sort</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$strNumber="";
			$result=getTable("db_gallery", "WHERE image_stat<>'3' AND page_slug='$cate' AND blog_id='$id' ORDER BY image_sort ASC");
			foreach ($result as $row) {
				$strNumber++;
  			?>
  			<tr>
  				<td><?=$strNumber?></td>
          		<td><div style="width:40px;height:40px;"><img src="<?=$row["image_url"]?>" style="object-fit: cover;width:100%;height:100%" onclick="viewImage('<?=$row["image_url"]?>')"></div></td>
  				<td><?=$row["image_url"]?></td>
          <td>
            <form method="post">
            <input type="hidden" name="form" value="pages-blog-sortImage">
            <input type="hidden" name="image_id" value="<?=$row["image_id"]?>">
            <input type="text" name="image_sort" value="<?=$row["image_sort"]?>" onblur="form.submit()" style="width:30px;">
            </form>
          </td>
  				<td>
            <button type="button" class="btn btn-info btn-xs" onclick="viewImage('<?=$row["image_url"]?>')"><i class="fa fa-eye"></i></button>
  					<button type="button" class="btn btn-danger btn-xs" onclick="deleteGalleryItem('<?=$row["image_id"]?>')"><i class="fa fa-trash"></i></button>
  				</td>
  			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>

<form method="post" action="" id="deleteGalleryItem">
<input type="hidden" name="form" value="pages-blog-deleteImage">
<input type="hidden" name="itemId" id="itemImageId" value="">
</form>

<script>
function deleteGalleryItem(itemID){
	document.getElementById('itemImageId').value=itemID;
	swal({
		title: "Warning",   
		type: 'warning',
		text: "Are you sure to delete this item?",
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Yes", 
		closeOnConfirm: true,
		html: true
	}, function(){
		document.getElementById('deleteGalleryItem').submit();
	});
}
</script>

<!-- imageViewer -->
<div class="modal fade" id="viewImage" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Preview Image</h4>
      </div>
      <div class="modal-body" id="post_status">
        <img src="" id="imagePlaceHolder" width="60%">
      </div>
    </div>
    
  </div>
</div>
<script src="../libs/bower/jquery/dist/jquery.js"></script>
<script>
function viewImage(inputSrc){
  if(inputSrc==""){}else{
    document.getElementById('imagePlaceHolder').src=inputSrc;
    $("#viewImage").modal();
  }
}
$('#viewImage').on('hidden.bs.modal', function () {
  document.getElementById("imagePlaceHolder").innerHTML="";
})
</script>

<!-- postPreview -->
<div class="modal fade" id="uploadImage" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Image to Gallery</h4>
      </div>
      <div class="modal-body" id="post_status">
        <div class="widget-body">
          <div class="row">
            <form action="" id="uploadImageGallery" class="form-horizontal" method="post" enctype="multipart/form-data">

              <input type="hidden" name="form" value="pages-blog-uploadImageGallery">
              <input type="hidden" name="token" value="<?=$Token?>">

              <div class="form-group">
                <label for="control-demo-5" class="col-sm-3">Select Image</label>
                <div class="col-sm-9">
                  <input type="file" name="txtFile" id="txtFile" required="required">
                </div>
              </div><!-- .form-group -->

              <center>
              <br><br>
              <button type="submit" class="btn btn-success" onclick="uploading()">Upload</button>
              </center>

            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
<script>
function uploading(){
  if(document.getElementById('txtFile').value==""){}else{
    $("#uploadImage").modal("toggle");
    $("#loadingProcessing").modal({backdrop: 'static',keyboard: false});
  }
}
function uploadImage(){
	$("#uploadImage").modal();
}
</script>

<!-- Update Session Customer Details for Billing - Basic -->
<div class="modal fade" id="loadingProcessing" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
      </div>

      <div  id="loadingProcessing">
        <div class="modal-body">

          <style>
          #fountainG{
            position:relative;
            width:234px;
            height:28px;
            margin:auto;
          }

          .fountainG{
            position:absolute;
            top:0;
            background-color:rgb(0,0,0);
            width:28px;
            height:28px;
            animation-name:bounce_fountainG;
              -o-animation-name:bounce_fountainG;
              -ms-animation-name:bounce_fountainG;
              -webkit-animation-name:bounce_fountainG;
              -moz-animation-name:bounce_fountainG;
            animation-duration:1.5s;
              -o-animation-duration:1.5s;
              -ms-animation-duration:1.5s;
              -webkit-animation-duration:1.5s;
              -moz-animation-duration:1.5s;
            animation-iteration-count:infinite;
              -o-animation-iteration-count:infinite;
              -ms-animation-iteration-count:infinite;
              -webkit-animation-iteration-count:infinite;
              -moz-animation-iteration-count:infinite;
            animation-direction:normal;
              -o-animation-direction:normal;
              -ms-animation-direction:normal;
              -webkit-animation-direction:normal;
              -moz-animation-direction:normal;
            transform:scale(.3);
              -o-transform:scale(.3);
              -ms-transform:scale(.3);
              -webkit-transform:scale(.3);
              -moz-transform:scale(.3);
            border-radius:19px;
              -o-border-radius:19px;
              -ms-border-radius:19px;
              -webkit-border-radius:19px;
              -moz-border-radius:19px;
          }

          #fountainG_1{
            left:0;
            animation-delay:0.6s;
              -o-animation-delay:0.6s;
              -ms-animation-delay:0.6s;
              -webkit-animation-delay:0.6s;
              -moz-animation-delay:0.6s;
          }

          #fountainG_2{
            left:29px;
            animation-delay:0.75s;
              -o-animation-delay:0.75s;
              -ms-animation-delay:0.75s;
              -webkit-animation-delay:0.75s;
              -moz-animation-delay:0.75s;
          }

          #fountainG_3{
            left:58px;
            animation-delay:0.9s;
              -o-animation-delay:0.9s;
              -ms-animation-delay:0.9s;
              -webkit-animation-delay:0.9s;
              -moz-animation-delay:0.9s;
          }

          #fountainG_4{
            left:88px;
            animation-delay:1.05s;
              -o-animation-delay:1.05s;
              -ms-animation-delay:1.05s;
              -webkit-animation-delay:1.05s;
              -moz-animation-delay:1.05s;
          }

          #fountainG_5{
            left:117px;
            animation-delay:1.2s;
              -o-animation-delay:1.2s;
              -ms-animation-delay:1.2s;
              -webkit-animation-delay:1.2s;
              -moz-animation-delay:1.2s;
          }

          #fountainG_6{
            left:146px;
            animation-delay:1.35s;
              -o-animation-delay:1.35s;
              -ms-animation-delay:1.35s;
              -webkit-animation-delay:1.35s;
              -moz-animation-delay:1.35s;
          }

          #fountainG_7{
            left:175px;
            animation-delay:1.5s;
              -o-animation-delay:1.5s;
              -ms-animation-delay:1.5s;
              -webkit-animation-delay:1.5s;
              -moz-animation-delay:1.5s;
          }

          #fountainG_8{
            left:205px;
            animation-delay:1.64s;
              -o-animation-delay:1.64s;
              -ms-animation-delay:1.64s;
              -webkit-animation-delay:1.64s;
              -moz-animation-delay:1.64s;
          }



          @keyframes bounce_fountainG{
            0%{
            transform:scale(1);
              background-color:rgb(0,0,0);
            }

            100%{
            transform:scale(.3);
              background-color:rgb(255,255,255);
            }
          }

          @-o-keyframes bounce_fountainG{
            0%{
            -o-transform:scale(1);
              background-color:rgb(0,0,0);
            }

            100%{
            -o-transform:scale(.3);
              background-color:rgb(255,255,255);
            }
          }

          @-ms-keyframes bounce_fountainG{
            0%{
            -ms-transform:scale(1);
              background-color:rgb(0,0,0);
            }

            100%{
            -ms-transform:scale(.3);
              background-color:rgb(255,255,255);
            }
          }

          @-webkit-keyframes bounce_fountainG{
            0%{
            -webkit-transform:scale(1);
              background-color:rgb(0,0,0);
            }

            100%{
            -webkit-transform:scale(.3);
              background-color:rgb(255,255,255);
            }
          }

          @-moz-keyframes bounce_fountainG{
            0%{
            -moz-transform:scale(1);
              background-color:rgb(0,0,0);
            }

            100%{
            -moz-transform:scale(.3);
              background-color:rgb(255,255,255);
            }
          }
          </style>
          <div id="fountainG">
            <div id="fountainG_1" class="fountainG"></div>
            <div id="fountainG_2" class="fountainG"></div>
            <div id="fountainG_3" class="fountainG"></div>
            <div id="fountainG_4" class="fountainG"></div>
            <div id="fountainG_5" class="fountainG"></div>
            <div id="fountainG_6" class="fountainG"></div>
            <div id="fountainG_7" class="fountainG"></div>
            <div id="fountainG_8" class="fountainG"></div>
          </div>
          <center>
          Please wait while loading...
          </center>
        </div>
      </div>

    </div>
  </div>
  <!-- Basic Single Date Picker -->
  <script type="text/javascript">

  </script>
</div>