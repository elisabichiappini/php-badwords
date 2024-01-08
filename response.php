<?php 
    $censura = $_GET['censura'];
    $paragrafo = $_GET['paragrafo'];
    $new_paragrafo = str_replace('Elisa', '...', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--file css-->
    <link style="stylesheet" href="style.css">
    <!--/file css-->
    <!--cdn css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--cdn css bootstrap-->
</head>
<body>
    <!--parola scelta per la censura-->
    <h2 class="text-center">
        <?php 
            echo $censura;
        ?>
    </h2>
    <!--/parola scelta per la censura-->
    <!--restituzione risultato-->
    <main>
        <div class="container d-flex justify-content-center gap-4 py-4">
            <!--originale testo submitato-->
            <div class="card" style="width: 30%">
                <div class="card-body">
                    <p class="card-text">
                        <?php 
                        echo $paragrafo;
                        ?>
                    </p>
                </div>
            </div>
            <!--/originale testo submitato-->
            <!--testo censurato-->
            <div class="card" style="width: 30%;">
                <div class="card-body">
                    <p class="card-text">
                        <?php 
                        echo $new_paragrafo;
                        ?>
                    </p>
                </div>
            </div>
            <!--/testo censurato-->
        </div>
    </main>
    <!--restituzione risultato-->
<!--cdn js bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--cdn js bootstrap-->
</body>
</html>