<?php
    include_once 'model/ConDB.php';
    include_once 'model/Course.php';
    $obj_name = new Course();
    $rs2 = $obj_name->getCourse();

    // Read JSON Decode From encode to decode
    $jsonCode = $rs2;
    $jsonDecode = json_decode($jsonCode, true);
    foreach ($jsonDecode as $result2){
        include "view/viewteam.php";
    }
?>