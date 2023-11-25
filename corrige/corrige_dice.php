<?php
    // Faire attention tout ce qui est après le var_dump est ignoré par l'ajax
    // var_dump($_POST);
    if(isset($_POST)){
        if ($_POST["number"] > 0) {

            $number = $_POST["number"];
            $dice = [];
    
            for ($i = 0; $i < $number; $i++) {
                $dice[] = rand(1, 6);
            }
    
            $sum = array_sum($dice);
            $images = "";
    
            foreach ($dice as $d) {
                $images .= "<img class='rounded m-1 dice' src='img/$d.svg' width='50px'> ";
            }
    
            $response = [
                "sum" => $sum,
                "images" => $images
            ];
            echo json_encode($response);
    
        } else {
            $response = ["message" => "Aucun dé lancé"];
            echo json_encode($response);
        }
    }

?>