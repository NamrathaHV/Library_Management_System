<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT * FROM AUTHORS WHERE AUTHOR_ID = '$id'";
		$query = $set->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>