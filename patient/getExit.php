<?php
    include_once ('../config/functions.php');
    $amka = $_GET['p_value'];
  
    $exits = getDischarge($amka);
    
    echo json_encode($exits);
?>