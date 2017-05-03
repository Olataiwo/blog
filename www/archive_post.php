<?php

session_start();
	
	# import functions lib..
	include 'includes/functions.php';

	# determine if user is logged in.
	Utils::checkLogin();

	# title
	$title = "Store: archive";

	# include dashboard header
	include 'includes/dashboard_header.php';

	# include db connection
	include 'includes/db.php';


	if(isset($_GET['id']))  {

		$postID = $_GET['id'];

	}


	Utils::addToArchive($conn,$postID);

	Utils::deletePost($conn,$postID);

	header("Location:view_archive_post.php");

?>





