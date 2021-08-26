<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$edition = $_POST['edition'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
        $price = $_POST['price'];
        $yr_pub=$_POST['year_of_publication'];
        $category=$_POST['category'];
        $branch=$_POST['branch'];
        $a=$set->query("SELECT * FROM AUTHORS WHERE AUTHOR_NAME='$author'");
        $b = $a->fetch_assoc();
        $a=$set->query("SELECT * FROM PUBLISHER WHERE PUBLISHER_NAME='$publisher'");
        $c = $a->fetch_assoc();
		$sql = "INSERT INTO books (ISBN, TITLE,EDITION,AUTHOR_ID,PUBLISHER_ID,PRICE,YEAR_OF_PUBLICATION,SECTION_NO,BRANCH_ID) VALUES ('$isbn', '$title','edition', '$b[AUTHOR_ID]', '$c[PUBLISHER_ID]','$price','$yr_pub','$category','$branch')";
		if($set->query($sql)){
			$_SESSION['success'] = 'Book added successfully';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: book.php');

?>