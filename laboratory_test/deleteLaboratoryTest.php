<?php
include_once ('../config/functions.php');
if (isset($_POST["id"])) {
	$id = $_POST["id"];

	if (isset($id)) {
		deleteLaboratoryTest($id);
		header("Location: /laboratory_test/index.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a Laboratory Test to delete'; ?>