<?php

    $filepath = realpath(dirname(__FILE__));
    
    include_once ($filepath.'/../classes/Project.php');
    

    $pro = new Project();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];

        if(!$username == ""){
            $user = $pro->check_user(strtolower($username));

            if($user == false){
                echo "<span class='error'><b>" . $username . "</b> Username Not available!</span>";
                exit();
            }else{
                echo "<span class='success'><b>" . $username . "</b> Username available!</span>";
                exit();
            }

        }
    }

?>