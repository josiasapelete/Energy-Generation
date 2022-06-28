<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ENERGIE GENERATION</title>
</head>

<body>
    <?php include('menu.php'); ?>
    <div class="container-fluid">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="image/Cap3.webp" class="d-block w-100" alt="...">
                    <div   class="p-5 bac carousel-caption d-none d-md-block">
                        <h2>Rejoignez notre programme de mentorat</h2>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="image/Cap4.webp" class="d-block w-100" alt="...">
                    <div   class="p-5 bac carousel-caption d-none d-md-block">
                       <h2>Rejoignez notre programme de mentorat</h2> 
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/Cap5.webp" class="d-block w-100" alt="...">
                    <div   class="p-5 bac carousel-caption d-none d-md-block">
                       <h2>Rejoignez notre programme de mentorat</h2> 
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> 
    <div class="container" > 
              <div class="text-center mb-0 bac"  >
                    <h1 class="text-light" >PARTICIPEZ AU SUCCÈS DE NOS ENTREPRENEUR.E.S</h1>
              </div>
                <div>
                    <p class=" p-5 fs-5 " >Chez Energy Generation, un mentor apporte un regard critique, challenge et donne des conseils bienveillants à un.e entrepreneur.e ou une équipe d’entrepreneur.e.s sur leur projet d’entreprise. Il leur transmet de façon proactive son expérience et son savoir-être de dirigeant.e ou d’expert.e. Il peut être amené, dans la mesure du possible, à mettre en œuvre les moyens dont il dispose (contacts, réseau, ressources…) pour accompagner au mieux le développement de la start up. Le mentor n’a en aucun cas un pouvoir de décision dans la direction de la start up. L’activité de mentorat n’est pas rémunérée.
​                    </p>
                </div>
                <div class="text-center mb-0 bac">
                    <h1 class="text-light" >EN SAVOIR PLUS SUR LE ROLE DE MENTOR</h1>
                </div> <br>
                <div class="container" > 
                     <div class="text-center mb-0 bac  " >
                      <h1 class="text-light" > DEVENEZ MENTOR : 
                           transmettez votre expertise !
                      </h1>
                     </div> <br> <br>
                     <div>
                         <p class="text-center p-3 fs-5  " > Les mentors sont des personnes volontaires, enthousiastes, et dotées de capacités d’écoute, de dialogue et de créativité. Leur rôle est de bâtir une relation de confiance avec les entrepreneur.e.s.
                             Pour être mentor, vous devez :
                             Avoir au moins 5 années d’expérience professionnelle ou une expérience entrepreneuriale probante
                             Être à l'écoute, enthousiaste et avoir envie de partager vos compétences et vos expériences
                             Être disponible pour une séance de travail au moins 1 fois par mois minimum avec l’entrepreneur.e que vous mentorez et ce, pour une période de 6 mois minimum
                              NB : L’activité de mentorat n’est pas rémunérée.
                          </p>
                     </div>
                </div>
        </div>
    <div class="container-fluid">
        <h2    class="text-center bac p-5">Nos Mentors</h2>
        <div class="container">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="image/Cap1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="image/Cap2.png" class="d-block w-100" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
        <footer>
            <?php include('footer.php'); ?>
        </footer>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>