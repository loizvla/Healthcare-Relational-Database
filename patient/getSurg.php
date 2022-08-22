<?php
    include_once ('../config/functions.php');
    $amka = $_GET['p_value'];
  
    $surge = getSurgeryPatient($amka);
    
    echo json_encode($surge);
?>