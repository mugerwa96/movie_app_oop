<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- links -->
        
        <link rel="stylesheet" href="./css/mdb.min.css">
        <link rel="stylesheet" href="./webfonts/all.css">
        <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <!-- Navigation bar starts -->
    <nav class="navbar navbar-expand-lg navbar-dark site-bg-color shadow fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><i class="fa fa-play-circle mx-2"></i>MOVIE APP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars  text-light"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
   
                <a class="nav-link <?php if($currentpage=="index")echo "active";?>" href="../movie_app_oop/index"> <i class="fa fa-home mx-2"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($currentpage=="add")echo "active";?>" href="../movie_app_oop/add"><i class="fa fa-plus-circle mx-2"></i>Add Movie</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link <?php if($currentpage=="view")echo "active";?> " href="../movie_app_oop/view"><i class="fa fa-eye mx-2"></i>View All</a>
              </li>
            </ul>
        
          </div>
        </div>
      </nav>
    <!-- Navigation bar ends -->

