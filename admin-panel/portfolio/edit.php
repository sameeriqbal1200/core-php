<?php
include ('../slider/header.php');
include ('../db_connection/connection.php');

$id = $_GET['id'];
$recordedit = mysqli_query($database, "SELECT * FROM portfolio WHERE id=$id");
while ($editrecordres = mysqli_fetch_array($recordedit)) {
    $category_namee = $editrecordres['category_name'];
    $statuss = $editrecordres['status'];
}


if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $status = $_POST['status'];

    if (empty($category_name) || empty($status)) {
        if (empty($category_name)) {
            echo "<p style='padding-left:25px;'>"."<font color='red'>Category Name field is empty.</font><br/>";
        }
        if (empty($status)) {
            echo "<p style='padding-left:25px;'>"."<font color='red'>Status field is empty.</font><br/>";
        }
    }   else {
        $result = mysqli_query($database, "UPDATE portfolio SET category_name = '$category_name', status = '$status' WHERE id=$id ");
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
                        Edit Portfolio
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form enctype="multipart/form-data" class="kt-form" method="POST" action="">

                <div class="kt-portlet__body">
                    <div class="form-group">
                        <label for="category_namee">Category Name</label>
                        <div></div>
                        <input class="form-control" type="text" value="<?php echo $category_namee; ?>" name="category_name" id="category_name">
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