<?php

session_start();

$title = "Store:Admin add post";

include 'includes/functions.php';

include 'includes/dashboard_header.php';



include 'includes/db.php';


$adminID = $_SESSION['admin_id'];

$clct =  Utils::getAdminByID($conn,$adminID);





$errors = [];

if(array_key_exists('add', $_POST)) {

	if(empty($_POST['title'])) {

		$errors['title'] = "please add a post title";

	}

	if(empty($_POST['id'])) {

		$errors['id'] = "Admin Id cannot be empty";
	}

	if(empty($_POST['cnt'])) {

		$errors['cnt'] = "Please enter content";
	}

	if (empty($_POST['date'])) {

		$errors['date'] = "Please enter todays date";
	}

	if(empty($errors)) {

		$clean = array_map('trim',$_POST);

		$clean['cnt'] = htmlspecialchars($clean['cnt']);

		Utils::addPost($conn,$clean);


	}


}
?>



<div class="wrapper">
		<h1 id="register-label">Add Post by <?php echo $clct['firstname'] ?></h1>
		<hr>
		<form id="register"  action ="add_post.php" method ="POST">


			<div>
				<?php Utils::displayError("id", $errors); ?>
				<label>Admin ID:</label>
				<input type="text" name="id" placeholder="post title" Value = "<?php echo $clct['admin_id'] ?>">
			</div>
		
			<div>
				<?php Utils::displayError("title", $errors); ?>
				<label>Post Title:</label>
				<input type="text" name="title" placeholder="post title">
			</div>
			<div>

				<?php Utils::displayError("cnt", $errors); ?>
				<label>Post Content:</label>
				<textarea name = "cnt" row="10" cols="20"></textarea>
			</div>

			<div>
				<?php Utils::displayError("cnt", $errors); ?>
				<label>Date</label>
				<input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" />
			</div>

				<div>
					<input type="submit" name="add" value="add post">
				</div>
		</form>
