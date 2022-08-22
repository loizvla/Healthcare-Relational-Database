<?php
    include_once ('../config/functions.php');
    $value = $_GET['p_value'];
  
    $products = getByNameProducts($value);
    
    echo json_encode($products);
?>