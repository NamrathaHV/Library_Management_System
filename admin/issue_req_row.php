<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$id1=str_split((string)$id,10);
		$isbn=$id1[0];
		$user_id=$id1[1];
		$sql = "SELECT *,concat(ISSUE_REQ.ISBN,ISSUE_REQ.USER_ID) AS REQ_NO,(BOOKS.TITLE) AS title FROM ISSUE_REQ LEFT JOIN BOOKS ON BOOKS.ISBN=ISSUE_REQ.ISBN LEFT JOIN BRANCH ON BRANCH.BRANCH_ID=BOOKS.BRANCH_ID WHERE ISSUE_REQ.ISBN='$isbn' AND ISSUE_REQ.USER_ID='$user_id'";
		$query = $set->query($sql);
		$row = $query->fetch_assoc();
		echo json_encode($row);
	}
?>
