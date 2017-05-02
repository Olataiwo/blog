<?php 


define('DBNAME','Blog');
define('DBUSER','root');
define('DBPASS','riddle1');



try {

	# prepare a pdo instance
	$conn = new PDO("mysql:host=localhost;dbname=".DBNAME,DBUSER,DBPASS);

	#set Verbose error modes

	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);


} catch (PDOException $e){

	echo $e->getMessage();

} 

?>