<?php


// Pseudo-code :
// je dois recuperér la valeur de mon imput pour savoir quelle nombre de dés et lancer
// si imput et remplie alors retré dans if si non else du coup apparaitre message "aucun dés lancé"
// dans le if il faudra une boucle
// le but du jeu c'est de parier sur une somme
// si vous decider que la somme sera de 16 et que vous parié sur 16 vous gagnez sinon vous perdez
// votre pari sera multiplié par le nombre de dé lancé
// c'est à dire
// si vous parié 4€, et que vous avez décider de lancer 7 dé, le pot sera de 4 * 7


$images = "";
$arrayDes = ["un","deux","trois","quatre","cinq","six"];

if (isset($_POST['nbrDe']) && isset($_POST['mise']) && isset($_POST['somme-win'])){

    $total = 0;
    $nbrDes = $_POST['nbrDe'];
    $mise = $_POST['mise'];
    $sumChoose = $_POST['somme-win'];

    if ($nbrDes > 0) {
        for ($i=0; $i < $nbrDes ; $i++) { 
            $ramdomDes = rand(1, 6);
            $des = $arrayDes[$ramdomDes - 1];
            $images .= '<img class="rounded m-1" src="img/dé_' . $des . '.svg" width="50px" height="50px">';
            $total += $ramdomDes;
            }if ($total == $sumChoose) {
                $result = $nbrDes * $mise;
                $msgWin = "Bravo vous avez gagnée";
                $response = [
                    "result" => $result , 
                    "msgMise" => $msgWin , 
                    "total" => $total ,
                    "images" =>  $images ,
                ];
                echo json_encode($response);
            }else {
                $result = $nbrDes * $mise;

                $msgLose = "Bravo vous avez Perdu vous ètes nul !!!";
                $response = [
                    "result" => $result ,
                    "msgMise" => $msgLose , 
                    "total" => $total ,
                    "images" =>  $images ,
                ];
                echo json_encode($response);
            }
        }elseif ($_POST['nbrDe'] == 0) {
            $msg = "Aucun dés lancé";
            $response = [
                "msg" => $msg
            ];
            echo json_encode($response);
    }
}

?>