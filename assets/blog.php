<?php require_once('connect.php') ;?>
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
        <!-- la barre de recherche -->
        <div class="container">
            <div class="row">
            <div class="col-12 col-md-6 ">
                <p>Nos articles</p>
            </div>
            <div class="col-12 col-md-6">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search"  name="search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="searchBtn">Search</button>
                   
                </form>
            </div>
            </div>
        </div>
         <!-- Code pour Effectuer les recherches -->
         <?php
           

           if (isset($_POST['searchBt'])){
               $search= $_POST['search'];
               $reqSelect= "select * from articles where titre like '%$search%' ";
           } else {
               $reqSelect= "select * from articles";
           }
           $resultat= mysqli_query($conn, $reqSelect);
           $nbr= mysqli_num_rows($resultat);
           echo "<p><b>".$nbr."</b> Resultats de votre recherche...</p>";
           while( $ligne= mysqli_fetch_assoc($resultat)){
        ?>
        <!-- Partie dynamique pour afficher les articles -->
        <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6"><img class="w-100 " src="<?= $ligne['photo']; ?>" alt="Image du post"></div>
                        <div class="col-12 col-md-6">
                            <div class="Posthead">
                                <div id="profil" class="profil mx-3">
                                    <img src="<?= $ligne['photoAd']; ?> " alt="Photo de l'admin">
                                </div>
                                <div class="info">
                                    <b><?= $ligne['admin']; ?> </b>
                                    <p><?= $ligne['date']; ?> </p>
                                </div>
                            </div>
                            <div class="post my-md-4">
                                <h2><a href="article.php?id=<?= $ligne['id']; ?>"><?= $ligne['titre']; ?></a></h2>
                                <div class="likebar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            <?php } ?>
                    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>