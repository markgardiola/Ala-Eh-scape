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
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="27" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
          <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
        </svg>
        <a class="navbar-brand" href="#destinations">destinations</a>
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
          <img src="https://scontent.fcrk3-3.fna.fbcdn.net/v/t39.30808-6/408878262_410919474804581_7627031881330078904_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_ohc=vX9pUntJ98UQ7kNvgEgQVOo&_nc_zt=23&_nc_ht=scontent.fcrk3-3.fna&_nc_gid=ABArDX7u4HY3LGCDiB-i3uh&oh=00_AYCzf-XmqX3pik9QHqHjPzBTNSreeMoeJq67V7jfBGrsKw&oe=677DA833"
            class="d-block w-100 c-img" alt="...">
          <div class="carousel-caption c-caption">
            <h1 class="display-1 text-capitalize">camping</h1>
            <p class="fs-3">Leep under the stars, wake up to the ocean breeze—your seaside camp adventure starts here!</p>
          </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="5000">
          <img src="images/solid_image_f3dfc9.png" class="d-block w-100 c-img" style="filter: brightness(0.8);" alt="...">
          <div class="carousel-caption c-caption">
            <h1 class="display-1 text-capitalize ala-eh-scape" style="padding-bottom: 190px;">Ala-Eh-scape</h1>
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
  <section class="main-body" id="destinations">
    <div class="container py-5">
      <div class="row-heading">
        <div class="col">
          <h1 class="display-5 text-uppercase text-center">destinations</h1>
          <p class="fs-4 text-capitalize text-center pt-2">we are your link to tropical perfection!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 col-xl-3 my-3" style="display: flex; justify-content:center">
          <div class="card " style="width: 100%; max-width: 25rem;">
            <img src="https://i.pinimg.com/736x/54/be/89/54be89ee30fb48c12b3bb932cb913d90.jpg" class="card-img-top">
            <div class="card-body">
              <div class="map-container" style="position: relative; overflow: hidden; padding-bottom: 60%; height: 0; max-width: 100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15506.555474421453!2d121.401802!3d13.679709749999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd25ac909123b9%3A0x16f166cca5d83975!2sLaiya%2C%20Batangas!5e0!3m2!1sen!2sph!4v1735911244641!5m2!1sen!2sph"
                  width="100%" height="100%" style="border:0; position: absolute; top: 0; left: 0;"
                  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3 my-3" style="display: flex; justify-content:center">
          <div class="card " style="width: 25rem;">
            <img src="https://i.pinimg.com/736x/63/16/f9/6316f9f87a0cbf5afa1cb6bd57693256.jpg" class="card-img-top">
            <div class="card-body">
            <div class="map-container" style="position: relative; overflow: hidden; padding-bottom: 60%; height: 0; max-width: 100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124011.15709531825!2d121.3178980231715!3d13.757835605651373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd3b0f51ae56a7%3A0x3503f98f2afe74ee!2sSan%20Juan%2C%20Batangas!5e0!3m2!1sen!2sph!4v1735912664838!5m2!1sen!2sph"
                  width="100%" height="100%" style="border:0; position: absolute; top: 0; left: 0;"
                  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3 my-3" style="display: flex; justify-content:center">
          <div class="card " style="width: 25rem;">
            <img src="https://i.pinimg.com/736x/7f/a0/aa/7fa0aa9c0c8593b5b40210e8c17688f2.jpg" class="card-img-top">
            <div class="card-body">
            <div class="map-container" style="position: relative; overflow: hidden; padding-bottom: 60%; height: 0; max-width: 100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61937.81221605971!2d120.62692650893145!3d14.010543593507764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd97985ac1054b%3A0x81504ca3b01c0605!2sEl%20Paye%20Beach!5e0!3m2!1sen!2sph!4v1735914769698!5m2!1sen!2sph"
                  width="100%" height="100%" style="border:0; position: absolute; top: 0; left: 0;"
                  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3 my-3" style="display: flex; justify-content:center">
          <div class="card " style="width: 25rem;">
            <img src="https://i.pinimg.com/736x/ee/3b/4d/ee3b4d303cfbb25a19527cff9cf7132c.jpg" class="card-img-top">
            <div class="card-body">
            <div class="map-container" style="position: relative; overflow: hidden; padding-bottom: 60%; height: 0; max-width: 100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.758310876114!2d120.60487554976467!3d14.150301851027828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd93f5b0bb73db%3A0xa6cb1b7cff058338!2sBituin%20Cove!5e0!3m2!1sen!2sph!4v1735912868989!5m2!1sen!2sph"
                  width="100%" height="100%" style="border:0; position: absolute; top: 0; left: 0;"
                  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
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