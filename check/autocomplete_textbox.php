<?php 

$filepath = realpath(dirname(__FILE__));
    
include_once ($filepath.'/../classes/Project.php');


$pro = new Project();


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $skill = $_POST['skill'];

    $result = $pro->autocomplete_textbox($skill);
    
    $show = '';
    $show = "<div class='skill'><ul>";
    if($result){
        
        while($data = $result->fetch_assoc()){
            $show .= "<li>". $data['skill'] ."</li>";
        }

        
    }else{
        $show .= "<li>No mathces</li>";
    }

    $show .= "</ul>";

    echo $show;
    
}

?>