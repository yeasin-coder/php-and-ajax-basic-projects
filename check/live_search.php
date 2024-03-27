<?php

    $filepath = realpath(dirname(__FILE__));
    
    include_once ($filepath.'/../classes/Project.php');
    

    $pro = new Project();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $key = $_POST["key"];
        $search = $pro->live_search($key);

        $show = "";
        $show .= "<table class='tblone'><tr>";
        if($search){
            $show .= "<tr> <th>Username</th> <th>Name</th> <th>Email</th> </tr>";
            while($data = $search->fetch_assoc()){
                $show .= "<tr>";
                $show .= "<td>" .$data['username']. "</td>";
                $show .= "<td>" .$data['name']. "</td>";
                $show .= "<td>" .$data['email']. "</td>";
                $show .= "</tr>";
            }
        }else{
            $show .= "<tr><th>No data found</th></tr>";
        }

        $show .= "</table>";
        echo $show;
    }