<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    
    <link rel="shortcut icon" href="image/lg.jpg" type="image/x-webp">

    <!-- Link to the font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link to the file CSS -->
    <link rel="stylesheet" href="style.css">
    <title>ENERGIE GENERATION</title>
  </head>

  <body>

    <?php 
      include('menu.php');
    ?>

    <main >

      <div class="container-fluid bg-primary">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                      <img src="./image/space.jpg" class="d-block w-100" alt="...">
                      <div class="p-5 bac carousel-caption d-none d-md-block">
                        <h2 class="fs-1 fw-bolder text-light">----- Energy Space ----</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div> 

      <section class="contenaire2">
        <h2 class="fs-1 fw-bolder">Notre Startup Portfolio</h2>
        <div class="container py-5">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/space/img0.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img1.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img2.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img3.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img4.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img5.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img6.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img7.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img8.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img9.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img10.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img11.png.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/space/img13.png.webp" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        
      <section>
        
    </main>

    <?php 
      include('footer.php');
    ?>

      
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </body>
</html>