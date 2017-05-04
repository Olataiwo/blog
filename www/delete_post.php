<?php

session_start();
	
	# import functions lib..
	include 'includes/functions.php';

	# determine if user is logged in.
	Utils::checkLogin();

	# title
	$title = "Store: View Category";

	# include dashboard header
	include 'includes/dashboard_header.php';

	# include db connection
	include 'includes/db.php';


	if(isset($_GET['id'])) {

		$id = $_GET['id'];
	}

	Utils::	deletePost($conn,$id);

	header("Location:view_post.php");


?>


