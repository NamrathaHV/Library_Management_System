<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *,BOOKS.TITLE AS title,BOOKS.ISBN AS bookid FROM BOOKS LEFT JOIN SECTION ON SECTION.SECTION_NO=BOOKS.SECTION_NO LEFT JOIN AUTHORS ON AUTHORS.AUTHOR_ID=BOOKS.AUTHOR_ID LEFT JOIN PUBLISHER ON PUBLISHER.PUBLISHER_ID=BOOKS.PUBLISHER_ID LEFT JOIN BRANCH ON BRANCH.BRANCH_ID=BOOKS.BRANCH_ID WHERE BOOKS.ISBN='$id'";
		$query = $set->query($sql);
		$row = $query->fetch_assoc();
		echo json_encode($row);
	}
?>
