
<?php
include ('../slider/header.php');
include ('../db_connection/connection.php');


if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$category_name = $_POST['category_name'];
$status = $_POST['status'];
if($category_name !=''&& $status !='')
{
//  To redirect form on a particular page
header("location: index.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}

include ('../slider/footer.php');
?>

