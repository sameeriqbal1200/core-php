<?php
include ('../slider/header.php');
include ('../db_connection/connection.php');

$id = $_GET['id'];
$precord = mysqli_query($database, "SELECT * FROM portfolio_insert WHERE id=$id");
while ($editrecordres = mysqli_fetch_array($precord)) {
    $headingg = $editrecordres['heading'];
    $qualityy = $editrecordres['quality'];
    $statuss = $editrecordres['status'];

}
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

    if (empty($heading) || empty($quality) || empty($status)) {
        if (empty($file_browser)) {
            echo "<p style='padding-left:25px;'>"."<font color='red'>Image field is empty.</font><br/>";
        }
        if (empty($heading)) {
            echo "<p style='padding-left:25px;'>"."<font color='red'>Heading field is empty.</font><br/>";
        }
        if (empty($quality)) {
            echo "<p style='padding-left:25px;'>"."<font color='red'>Quality field is empty.</font><br/>";
        }
        if (empty($status)) {
            echo "<p style='padding-left:25px;'>"."<font color='red'>Status field is empty.</font><br/>";
        }
    }   else {
            $result = mysqli_query($database, "UPDATE portfolio_insert SET heading = '$heading', quality = '$quality', status = 
            '$status', image = '$image' WHERE id=$id");
            if ($result) {
        echo "<p style='padding-left:25px;'>"."<font color='green'>Data Edit Sucessfully";
        }   else {
            echo "<p style='padding-left:25px;'>"."Try Again";
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
                        Edit Portfolio Insert
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
                        <label for="headingg">Heading</label>
                        <div></div>
                        <input class="form-control" type="text" value="<?php echo $headingg; ?>" name="heading" id="heading">
                    </div>
                    <div>
                        <label for="qualityy">Quality</label>
                        <div></div>
                        <input class="form-control" type="text" value="<?php echo $qualityy; ?>" name="quality" id="quality">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div></div>
                        <select class="custom-select form-control" name="status">
                            <option <?php if ($statuss == 1 ) echo 'selected'; ?> value="1">Enable</option>
                            <option <?php if ($statuss == 2 ) echo 'selected'; ?> value="2">Disable</option>
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
<!-- end:: Content -->              </div>              
                

<?php include('../slider/footer.php') ?>