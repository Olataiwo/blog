<?php
$page_title = "Store:Admin register";

include 'includes/header.php';

include 'includes/functions.php';

include 'includes/db.php';



$errors = [];

if (array_key_exists('register', $_POST)){

		if(empty($_POST['fname'])){

			$errors['fname'] = "please enter your first name";
		}

		if(empty($_POST['lname'])){

			$errors['lname'] = "please enter your last name";
		}

		if(empty($_POST['email'])){

			$errors['email'] = "please enter your email";
		}

		if(empty($_POST['password'])){

			$errors['password'] = "please enter your password";
		}

		if(empty($_POST['pword'])){

			$errors['pword'] = "please confirm your password";

			
		}

		if ($_POST['pword'] != $_POST['password']){

				$errors['pword'] = "your password do not match";
			}


		$chk = Utils::doesEmailExist($conn,$_POST['email']) ;

		if($chk){

			$errors['email'] = "Email has already been used";
		}






		if(empty($errors)){

				$clean = array_map('trim',$_POST);

				$hash = password_hash($clean['password'], PASSWORD_BCRYPT);

				$clean['password'] = $hash;

				Utils::doRegistration($conn,$clean);
			
		} 

		

}

?>




<div class="wrapper">
		<h1 id="register-label">Admin Register</h1>
		<hr>
		<form id="register"  action ="register.php" method ="POST">
			<div>
					<?php  

					echo Utils::displayError('fname',$errors) ; 


					?>
				<label>first name:</label>
				<input type="text" name="fname" placeholder="first name">
			</div>
			<div>

					<?php  

					echo Utils::displayError('lname',$errors) ; 


					?>
				<label>last name:</label>	
				<input type="text" name="lname" placeholder="last name">
			</div>

			<div>

					<?php  

					echo Utils::displayError('email',$errors) ; 


					?>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
					<?php  

					echo Utils::displayError('password', $errors) ; 


					?>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
 
			<div>

					<?php  

					echo Utils::displayError('pword', $errors) ; 


					?>
				<label>confirm password:</label>	
				<input type="password" name="pword" placeholder="password">
			</div>

			<input type="submit" name="register" value="register">
		</form>

		<h4 class="jumpto">Have an account? <a href="admin_login.php">login</a></h4>
	</div>















<?php

include "includes/footer.php";

?>


