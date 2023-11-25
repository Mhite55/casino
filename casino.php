<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="js/main.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<?php 
if (isset($_GET["id_user"])){
    $id = $_GET['id_user'];
    $pdo = new PDO("mysql:host=localhost;dbname=casino", "root", "");
    $sql = "SELECT * FROM user WHERE id_user = $id ";
    $stmt = $pdo->query($sql);
    $player = $stmt->fetch(PDO::FETCH_ASSOC);
   // header("Location:casino.php?id_user=$user[id_user]");

}
?>

    <h1 class="mt-5 text-center ">Casino of legend</h1>

    <div  class="mt-5 text-center " id="images"></div>

    <h2  class="mt-5 text-center "><span id="msg"></span></h2>
    <h2  class="mt-5 text-center "><span id="msgMise"></span></h2>
    <h2  class="mt-5 text-center "><span id="result"></span></h2>
    <h2  class="mt-5 text-center "><span id="pseudo">Bonjour <?= $player['pseudo'] ?></span></h2>
    <h2  class="mt-5 text-center "><span id="argent">Mise disponible : <?= $player['argent'] ?>€</span></h2>

    <h2  class="mt-5 text-center"><span id="truc-de-merde"></span><span id="total"></span></h2>

    <form action="" class="mt-5 mx-auto col-6"  id="submit" method="POST">
        <label for="nbrDe">Nombre de dé(s)</label>
        <input class="form-control my-2" type="number" value="0" name="nbrDe">

        <label for="mise">Mise</label>
        <input class="form-control my-2" type="number" value="0" name="mise">

        <label for="somme-win">Somme gagnante</label>
        <input class="form-control my-2" type="number" value="0" name="somme-win">

        <input class="form-control mt-3 orange bs-light-text" type="submit" value="Lancé dés">
        
    </form>

</body>
</html>
