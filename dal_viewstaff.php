<?php 
include_once '/config/database.php';
include_once '/objects/staff.php';

		$database = new Database();
		$db = $database->getConnection();

		$staff = new Staff($db);
		$result=$staff->readAll();
 		echo json_encode($result);

	?>
	 