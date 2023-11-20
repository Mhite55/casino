<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Dice</title>
</head>
<body>

    <h1 class="text-center my-4">Super dice legend of the king of souls of universe</h1>

    <?php 
    
        if (!empty($_POST["number"])) {

            $number = $_POST["number"];
            $dice = [];

            for( $i = 0; $i < $number; $i++ ){
                $dice[] = rand(1, 6);
            }

            $sum = array_sum($dice);

            echo "<h3 class='text-center'>Somme des dés : $sum </h3>";
            echo "<div class='d-flex justify-content-center flex-wrap'>";
            foreach($dice as $d) {
                echo "<img class='rounded m-1 animation1' src='img/$d.svg' width='50px'> ";
            }
            echo "</div>";

        } else {
            echo "<h3 class='text-center'>Aucun dé lancé.</h3>";
        }
    
    
    ?>
    

    <div class="d-flex justify-content-center">
        <form action="" method="post" class="w-50" >

            <label for="number_dice" class="my-3 form-label" value="1">Nombres de dé</label>
            <input class="form-control" type="number" name="number">
            <div class="text-center my-3">
                <input class="btn btn-warning" type="submit" value="Lancé dés">
            </div>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

