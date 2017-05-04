<?php

session_start();
	
	# import functions lib..
	include 'includes/functions.php';

	# determine if user is logged in.
	Utils::checkLogin();

	# title
	$title = "Store: archive Post";

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
						<th>Archive ID</th>
						<th>Post Id</th>
						<th>Date</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>

				<?php

					$chk = Utils::showArchive($conn);

					echo $chk;

				?>

							

						
          		</tbody>
			</table>
	</div>
</div>


<?php
	
	include 'includes/footer.php';

?>