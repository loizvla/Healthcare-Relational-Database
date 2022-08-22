<?php
include_once ('../config/functions.php');

$description = $_POST['description'];
$date_and_time = $_POST['date_and_time'];
$report_practical = $_POST['report_practical'];

registerSurgery($description, $date_and_time, $report_practical);
header("Location: /surgery/index.php");
exit;
?>