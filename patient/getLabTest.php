<?php
    include_once ('../config/functions.php');
    $amka = $_GET['p_value'];
  
    $testlab = getLaboratoryTestPatient($amka);
    
    echo json_encode($testlab);
?>