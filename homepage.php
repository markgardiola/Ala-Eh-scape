<?php
session_start();
include 'connectDB.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>

  <!-- bootstrap css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />

  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- custom css link -->
  <link rel="stylesheet" href="css/home-style.css">



</head>

<body>

  <!-- header section starts -->
  <section class="header">

    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="30" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z" />
        </svg>
        <a class="navbar-brand" href="homepage.php">destinations</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="package.php">Package</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="booking.php">Book</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="border-bottom: none; display: flex; justify-content:end" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Our Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Staycation</a></li>
                <li><a class="dropdown-item" href="#">Adventure</a></li>
                <li><a class="dropdown-item" href="#">Camping</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <!-- header section ends -->

  <!-- slide carousel section starts -->
  <section class="slide">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active c-item" data-bs-interval="5000">
          <img src="images/solid_image_f3dfc9.png" class="d-block w-100 c-img" style="filter: brightness(0.8);" alt="...">
          <div class="carousel-caption c-caption">
            <h1 class="display-1 text-capitalize" style="padding-bottom: 190px;">Ala-Eh-scape</h1>
          </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="5000">
          <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/606754890.jpg?k=52c10bb4264369337db7f0cb805d571ecdf099f4eee1419116d9fe5a5e52915d&o=&s=1024x"
            class="d-block w-100 c-img" alt="...">
          <div class="carousel-caption c-caption">
            <h1 class="display-1 text-capitalize">staycation</h1>
            <p class="fs-3">Escape to the beach—your perfect staycation awaits!</p>
          </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="5000">
          <img src="https://www.thepoortraveler.net/wp-content/uploads/2018/04/Fortune-Island.jpg"
            class="d-block w-100 c-img" alt="...">
          <div class="carousel-caption c-caption">
            <h1 class="display-1 text-capitalize">adventure</h1>
            <p class="fs-3">Discover paradise—explore hidden islands on an unforgettable adventure!</p>
          </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="5000">
          <img src="https://campsites.ph/uploads/images/campsite-162-el-paye-beach-0781e2bb62513e0d7ac49ec8b107a753.jpg"
            class="d-block w-100 c-img" alt="...">
          <div class="carousel-caption c-caption">
            <h1 class="display-1 text-capitalize">camping</h1>
            <p class="fs-3">Leep under the stars, wake up to the ocean breeze—your seaside camp adventure starts here!</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- slide carousel section ends -->

  </section>
  <!-- body section starts -->
  <section class="main-body">
    <div class="container py-5">
      <div class="row">
        <div class="col my-3" style="display: flex; justify-content:center">
          <div class="card" style="width: 25rem;">
            <img src="images/bg4.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col my-3" style="display: flex; justify-content:center">
          <div class="card" style="width: 25rem;">
            <img src="images/bg4.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col my-3" style="display: flex; justify-content:center">
          <div class="card" style="width: 25rem;">
            <img src="images/bg4.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- body section ends -->


  <!-- footer section starts -->
  <footer class="bg-dark py-5 sticky">
    <div class="container text-light text-center">
      <p class="display-5 mb-3" style="font-family: 'Rubik Vinyl', sans-serif;">
        Ala-Eh-scape
      </p>
      <small class="text-white-50">&copy; Copyright by Team Ala-Eh. All rights reserved.</small>
    </div>
  </footer>
  <!-- footer section ends -->

  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>