<?php

unset($_SESSION['admin_id']); 

unset($_SESSION['firstname']);

header("Location:admin_login.php");


?>