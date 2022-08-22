<?php
    include_once ('../config/functions.php');
    $amka = $_GET['p_value'];
  
    $testlab = getSurgeryPartDoctor($amka);
    
    echo json_encode($testlab);
?>