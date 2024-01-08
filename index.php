<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!--file css-->
    <link rel="stylesheet" href="./style.css">
    <!--/file css-->
    <!--cdn css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--/cdn css bootstrap-->
</head>
<body>
    <!--intestazione-->
    <header>
        <h1 class="display-1 fw-bold">Censugrafo</h1>
    </header>
    <!--/intestazione-->
    <!--spazio form-->
    <div class="container">
        <!--form-->
        <form action="response.php" methods="GET">
            <!--input inserire parola-->
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text text-white px-3" id="ec">Word</span>
                <label for="censura"></label>
                <input type="text" class="form-control p-2" id="censura" placeholder="Censurala" name="censura">
            </div>
            <!--/input inserire parola-->
            <!--input inserire paragrafo-->
            <div class="mb-3">
                <label for="paragrafo" class="form-label"></label>
                <textarea class="form-control" id="paragrafo" rows="20" placeholder="Il testo che vuoi modificare..." name="paragrafo" class="p-2"></textarea>
            </div>
            <!--/input inserire paragrafo-->
            <!--inviare il form-->
            <button type="submit" class="btn btn-outline-dark">Submit</button>
            <!--/inviare il form-->
        </form>
        <!--/form-->
    <div>
    <!--/spazio form-->
    <!--cdn js bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--cdn js bootstrap-->
</body>
</html>