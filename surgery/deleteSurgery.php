<?php
include_once ('../config/functions.php');
if (isset($_POST["id"])) {
	$id = $_POST["id"];

	if (isset($id)) {
		deleteSurgery($id);
		header("Location: /surgery/index.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a Surgery to delete'; ?>