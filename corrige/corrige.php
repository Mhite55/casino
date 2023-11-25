<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<h1 class="text-center my-4">Super dice legend of the king of souls of universe</h1>

    <h3 class="text-center" id="total"></h3>

    <div id="images" class='d-flex justify-content-center flex-wrap'></div>

    <div class="d-flex justify-content-center">
        <form id="form" action="" class="w-50"">

            <label for=" number" class="my-3 form-label" value="1">Nombres de dé</label>
            <input class="form-control" type="number" name="number">
            <div class="text-center my-3">
                <input id="submit" class="btn btn-warning" type="submit" value="Lancer les dés">
            </div>

        </form>
    </div>

    <script>
        const form = document.getElementById("form");
        const images = document.getElementById("images");
        const total = document.getElementById("total");

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            formData = new FormData(e.target),

                fetch("dice.php", {
                    method: "POST",
                    body: formData,
                })

                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    if (typeof(data.message) == "undefined") {
                        images.innerHTML = data.images;
                        total.innerHTML = "Le total est de : " + data.sum;
                    } else {
                        total.innerHTML = data.message;
                        images.innerHTML =" ";
                    }
                })
        })
    </script>

