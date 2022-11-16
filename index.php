<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Početna</title>
</head>

<body>

    <div class="container">

        <h1>Dobrodošli!<br>Autobuska stanica Beograd</h1>

        <div class="putnicidiv">
            <a href="putnik/index.php"><button class="btn btn-primary" id="crudputnici">Putnici</button></a>
            <a href="putnik/pretraga/pretraga.php"><button class="btn btn-success" id="pretragaputnici">Pretraga putnika</button></a>
            <a href="putnik/sortiranje/sortiranje.php"><button class="btn btn-info" id="sortiranjeputnici">Sortiranje putnika</button></a>
            <a href="voznja/index.php"><button class="btn btn-danger" id="crudvoznja">Voznje</button></a>
        </div>

    </div>

</body>

</html>