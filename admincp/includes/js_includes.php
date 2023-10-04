<!-- build:js ../assets/js/core.min.js -->
<script src="../assets/js/webbycms.js"></script>
<script src="../libs/bower/jquery/dist/jquery.js"></script>
<script src="../libs/bower/jquery-ui/jquery-ui.min.js"></script>
<script src="../libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="../libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="../libs/bower/superfish/dist/js/hoverIntent.js"></script>
<script src="../libs/bower/superfish/dist/js/superfish.js"></script>
<script src="../libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="../libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="../libs/bower/PACE/pace.min.js"></script>
<!-- endbuild -->

<!-- build:js ../assets/js/app.min.js -->
<script src="../assets/js/library.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/app.js"></script>
<!-- endbuild -->
<script src="../libs/bower/moment/moment.js"></script>
<script src="../libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="../assets/js/fullcalendar.js"></script>
<script type="text/javascript" src="../assets/js/touchspin.js"></script>
<script type="text/javascript" src="../assets/js/select2.js"></script>
<script type="text/javascript" src="../assets/js/timepicker.js"></script>
<script type="text/javascript" src="../assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="../assets/js/elements.js"></script>
<script type="text/javascript" src="../assets/js/parsel.js"></script>
<script type="text/javascript" src="../assets/js/form.validate.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" / rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" / rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#summernote').summernote({
		height: "400px"
	});
});
var postForm = function() {
	var content = $('textarea[name="content"]').html($('#summernote').code());
}
</script>