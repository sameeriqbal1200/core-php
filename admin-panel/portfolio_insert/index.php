<?php 
include ('../slider/header.php');
include ('../db_connection/connection.php');

$result = mysqli_query($database, "SELECT * FROM portfolio_insert")

?>


<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="alert alert-light alert-elevate" role="alert">
    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
    <div class="alert-text">
        Saved!
    </div>
</div>

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Portfolio Insert
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
    <div class="kt-portlet__head-actions">
        &nbsp;
        <a href="<?php echo "$baseurl" ?>/portfolio_insert/add.php" class="btn btn-brand btn-elevate btn-icon-sm">
            <i class="la la-plus"></i>
            New Record
        </a>
    </div>  
</div>      </div>
    </div>

    <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>Quality</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Edit</th>                    
                    <th>Delete</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) != 0) {
                while($res = mysqli_fetch_array($result)){
                ?> 
                <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td><img src="<?php echo $baseurl; ?>/portfolio_images/<?php echo $res['image'],".jpg"; ?>" style="margin:0 auto;width: 30px;display: block;height: 20px;"></td>
                    <td><?php echo $res['heading']; ?></td>
                    <td><?php echo $res['quality']; ?></td>
                    <td><?php echo $res['created_at']; ?></td>
                    <td><?php echo $res['updated_at']; ?></td>                            
                    <td nowrap>
                        <a href="<?php echo $baseurl.'/portfolio_insert/edit.php?id='.$res['id']; ?>" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                          <i class="la la-edit"></i>
                        </a>
                    </td>
                    <td nowrap>
                        <a href="<?php echo $baseurl.'/portfolio_insert/delete.php?id='.$res['id']; ?>" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                          <i class="la la-archive"></i>
                        </a>
                    </td>
                    <td><?php echo $res['status']; ?></td>
                    <td nowrap>
                        <a href="<?php echo $baseurl.'/portfolio_insert/delete.php?id='.$res['id']; ?>" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                          <i class="la la-archive"></i>
                        </a>
                        <a href="<?php echo $baseurl.'/portfolio_insert/edit.php?id='.$res['id']; ?>" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                          <i class="la la-edit"></i>
                        </a>
                    </td>
                </tr>  
                <?php } }?>                      
            </tbody>            
        </table>
        <!--end: Datatable -->
    </div>
</div></div>
<!-- end:: Content -->
</div> 

<?php  include('../slider/footer.php')  ?>