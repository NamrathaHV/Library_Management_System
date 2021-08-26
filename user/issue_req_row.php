<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *,BOOKS.TITLE AS title FROM ISSUE_REQ LEFT JOIN BOOKS ON BOOKS.ISBN=ISSUE_REQ.ISBN LEFT JOIN BRANCH ON BRANCH.BRANCH_ID=BOOKS.BRANCH_ID WHERE ISSUE_REQ.ISBN='$id' AND ISSUE_REQ.USER_ID='$user[USER_ID]'";
		$query = $set->query($sql);
		$row = $query->fetch_assoc();
		echo json_encode($row);
	}
?>
