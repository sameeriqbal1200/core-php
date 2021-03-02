<?php
include ('../db_connection/connection.php');

$deleteresult = mysqli_query($database, "SELECT * FROM portfolio_insert");

if (isset($_GET['id'])) {
	
	$id = (int)$_GET['id'];

	$query = "DELETE FROM portfolio_insert WHERE id= ". $id;
}	else {
	echo "No ID Set";
}
 $result = mysqli_query($database,$query);

if ($result) {
	$_SESSION['sucess_message'] = 'User Data Deleted Sucessfully';
	header('location: index.php');
}	else {
	$_SESSION['error_message'] = 'User Data Couldnot Deleted Sucessfully';
	header('location: index.php');
}

if (isset($_POST['delete'])) {
	$heading = $_POST['heading'];
	$quality = $_POST['quality'];
	$status = $_POST['status'];

}

?>