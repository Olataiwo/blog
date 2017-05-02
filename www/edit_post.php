<?php

	session_start();

	
	
	# import functions lib..
	include 'includes/functions.php';

	# determine if user is logged in.
	Utils::checkLogin();

	# title
	$title = "Store: edit post";

	# include dashboard header
	include 'includes/dashboard_header.php';

	# include db connection
	include 'includes/db.php';

	if(isset($_GET['id'])) {

		$id = $_GET['id'];
	}

	$item = Utils::getPostByID($conn,$id);

	 $errors = [];

	if(array_key_exists('add', $_POST)) {

		if(empty($_POST['title'])) {
			$errors['title'] = "Please input title";

		}

		if(empty($_POST['cnt'])) {

			$errors['cnt'] = "Please input title";
		}

		if(empty($errors)) {

			$clean = array_map('trim',$_POST);

			$clean['pid'] = $id;

			Utils::updatePost($conn,$clean);

			Utils::redirect("view_post.php","");
		}

	}

?>



<div class="wrapper">
		<h1 id="register-label">Edit Post</h1>
		<hr>
		<form id="register"  action ="" method ="POST">


			<div>
				<?php Utils::displayError("title", $errors); ?>
				<label>Post Title:</label>
				<input type="text" name="title" placeholder="post title" value = "<?php echo $item['title'] ?>">
			</div>
	
			<div>
				<?php Utils::displayError("cnt", $errors); ?>
				<label>Post Content:</label>
				<textarea name = "cnt" row="10" cols="20"><?php echo $item['content'] ?></textarea>
			</div>

				<div>
					<input type="submit" name="add" value="update">
				</div>
		</form>