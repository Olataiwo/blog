<?php

include 'includes/db.php';

include 'includes/functions.php';

include 'includes/front_header.php';


if(isset($_GET['id'])){

	$dte = $_GET['id'];
}


$show = Utils::revealArchive ($conn,$dte);

echo $show;

?>