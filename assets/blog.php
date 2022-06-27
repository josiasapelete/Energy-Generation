<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <?php
    include("menu.php");
    ?>

    <div class="container">
        <div class="container">
            <div class="row">
            <div class="col-12 col-md-6 ">
                <p>Nos articles</p>
            </div>
            <div class="col-12 col-md-6">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6"><img src="" alt="Image du post"></div>
            <div class="col-12 col-md-6">
                <div class="Posthead">
                    <div class="profil">

                    </div>
                    <div class="info">
                        <b></b>
                        <p></p>
                    </div>
                </div>
                <div class="post">
                    <h2></h2>
                    <h3></h3>
                    <div class="likebar">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>