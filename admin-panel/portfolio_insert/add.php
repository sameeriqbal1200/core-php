<?php 
include '../slider/header.php'; 
include('../db_connection/connection.php');

if (isset($_POST['submit'])) {
	$heading = $_POST['heading'];
	$quality = $_POST['quality'];
	$status = $_POST['status'];


	$target_dir = "C:/xampp/htdocs/core-php/admin-panel/portfolio_images/";
	$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageUpload"]["name"],".jpg");

    if (empty($heading) || empty($quality) || empty($status)){

    	if(empty($file_browser)){
            echo "<font color='red'>Image field is empty.</font><br/>";
        }
        if(empty($heading)){
            echo "<font color='red'>Heading field is empty.</font><br/>";
        }
        if(empty($quality)){
            echo "<font color='red'>Quality Heading field is empty.</font><br/>";
        }
        if(empty($status)){
            echo "<font color='red'>Status field is empty.</font><br/>";
        }
    }
    else{
    	$result = mysqli_query($database, "INSERT INTO portfolio_insert(image,heading,quality,status) VALUES ('$image','$heading','$quality','$status')");
        if($result){
            echo "<font color='green'>Data added successfully.";
        }else{
            echo "Try Again.";
            // print_r(mysqli_error($database));
        }       
    }
 
}

?>
<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="row">
	<div class="col-md-12">

		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Add Client Details
					</h3>
				</div>
			</div>
			<!--begin::Form-->
			<form enctype="multipart/form-data" class="kt-form" method="POST" action="">
				<div class="kt-portlet__body">
                    <div class="form-group">
						<label>File Browser</label>
						<div></div>
						<div class="custom-file">
						  	<input type="file" class="custom-file-input" name="imageUpload" id="imageUpload">
						  	<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <div></div>
                        <input class="form-control" type="text" value="" name="heading" id="heading">
                    </div>
                    <div class="form-group">
                        <label for="quality">Quality</label>
                        <div></div>
                        <input class="form-control" type="text" value="" name="quality" id="quality">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div></div>
                        <select class="custom-select form-control" name="status">
                            <option value="" selected>Select</option>
                            <option value="1">Enable</option>
                            <option value="2">Disable</option>
                        </select>
                    </div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<input class="btn btn-primary" type="submit" name="submit" value="Submit">
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</form>
			<!--end::Form-->			
		</div>
		<!--end::Portlet-->
	</div>
</div></div>
<!-- end:: Content -->				</div>				
				
				<?php include '../slider/footer.php'; ?>