<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <h1 class="mt-5 text-center ">Casino of legend</h1>

    <?php
// Pseudo-code :
// je dois recuperér la valeur de mon imput pour savoir quelle nombre de dés et lancer
// si imput et remplie alors retré dans if si non else du coup apparaitre message "aucun dés lancé"
// dans le if il faudra une boucle

$arrayDes = ["un","deux","trois","quatre","cinq","six"];

if (!empty($_POST['nbrDe'])){
    $total = 0;
    $nbrDes = $_POST['nbrDe'];
    if ($nbrDes > 0) {
        echo "<div class='text-center'>";
        for ($i=0; $i < $nbrDes ; $i++) { 
            $ramdomDes = rand(1, 6);
            $des = $arrayDes[$ramdomDes - 1];
            echo'<img class="rounded m-1" src="img/dé_' . $des . '.svg" width="50px" height="50px">';
            $total += $ramdomDes;
        }
        echo "<h2 class='text-center'>le total est de : " . $total . "</h2>";
        echo "</div>";
    }
}
else {
    echo "<h2 class='text-center'>Aucun dés lancé</h2>";
}

?>

    <form action="" class="mt-5 mx-auto col-6" method="POST">
        <label for="nbrDe">Nombre de dé(s)</label>
        <input class="form-control my-2" type="number" value="0" name="nbrDe">

        <input class="form-control mt-3 orange bs-light-text" type="submit" value="Lancé dés">
        <img src="" alt="" >
    </form>
