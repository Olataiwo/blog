<!DOCTYPE html>

<html>
<head>
	<title><?php echo $title ; ?></title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>

<body>
	<section>
		<div class="mast">
			<h1>T<span>SSB</span></h1>
			<nav>
				<ul class="clearfix">
					<li><a href="add_post.php" <?php Utils::curNav("add_post.php"); ?>>add post</a></li>
					<li><a href="view_post.php" <?php Utils::curNav("view_post.php"); ?>>view post</a></li>
					<li><a href="view_archive_post.php" <?php Utils::curNav("view_archive_post.php"); ?>>View archive</a></li>
					<li><a href="logout.php" <?php Utils::curNav("logout.php"); ?>>Log out</a></li>
				</ul>
			</nav>
		</div>
	</section>