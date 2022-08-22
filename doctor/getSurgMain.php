<?php
    include_once ('../config/functions.php');
    $amka = $_GET['p_value'];
  
    $testlab = getSurgeryMainDoctor($amka);
    
    echo json_encode($testlab);
?>