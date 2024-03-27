<?php

    $filepath = realpath(dirname(__FILE__));
    
    include_once ($filepath.'/../classes/Project.php');
    

    $pro = new Project();

        $messages = $pro->get_all_messages();

        $show = "";
        $show .= "<div class='message'></ul>";
        if($messages){
            

            while($msg = $messages->fetch_assoc()){
                $show .= "<li>" . $msg['message'] . "</li>";
            }
        }else{
            $show .= "<li>No message available</li>";
        }

        $show .= "</ul></div>";

        echo $show;
    