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
?>

<div class="wrapper">
	<div id="stream">
		<table id="tab">
				<thead>
					<tr>
						<th>Post ID</th>
						<th>Post Title</th>
						<th>Content</th>
						<th>Added By</th>
						<th>Date</th>
						<th>Archive</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>

				<?php 

					$chk = Utils::viewPost($conn);

					echo $chk;


				 ?>
					
							

						
          		</tbody>
			</table>
	</div>
</div>


<?php
	
	include 'includes/footer.php';

?>