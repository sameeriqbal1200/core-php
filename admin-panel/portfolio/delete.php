<?php
include ('../db_connection/connection.php');

$resultedit = mysqli_query($database, "SELECT * FROM portfolio");

if (isset($_GET['id'])) {

	$id = (int)$_GET['id'];

$query = "DELETE FROM portfolio WHERE id= ". $id;
}	else {
	echo "<p style='padding-left:25px;'>"."NO Id Set";
}

$result = mysqli_query($database,$query);

if ($result) {
	$_SESSION['message'] = 'Data Deleted Succesfully.';
	header('location: index.php');
}	else {
	$_SESSION['message'] = 'Data Couldnot Deleted.';
	header('location: index.php');
}

if (isset($_POST['delete'])) {
	$category_name = $_POST['category_name'];
	$status = $_POST['status'];
}
?>