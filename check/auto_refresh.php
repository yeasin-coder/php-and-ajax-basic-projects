<?php

    $filepath = realpath(dirname(__FILE__));
    
    include_once ($filepath.'/../classes/Project.php');
    

    $pro = new Project();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $message = $_POST["message"];
        $insert = $pro->insert_message($message);
    }