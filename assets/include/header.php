<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--hompage css-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
 
    <title>Document</title>
</head>
<body>
<div class="nav-padding">
    <div class="row">
     <div class="col-12">
      <nav class="navbar  navbar-expand-lg navbar-light p-0 align-items-baseline " id="mainNavbar">
       <a class="navbar-brand" href="#"><img src="assets/img/global.JPG" width="60" alt=""></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
       <div class="collapse navbar-collapse justify-content-end align-items-baseline" id="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php"> <span class="menu">Home</span> </a>
            </li>
            <!--MegaMenu-->
            <li class="nav-item dropdown megamenu-li">
            <a class="nav-link dropdown-toggle" href="exped.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="menu">Expedition</span></a>
            <div class="dropdown-menu megamenu" id="megamenu" aria-labelledby="dropdown01">
            <div id="dropitem">
                <div class="row">
                <div class="col-md-6 col-lg-3 p-3">
                    <h5 class="nav-heading">Fast Tracks</h5>
                    <a class="dropdown-item" href="detail.php">Everest</a>
                    <a class="dropdown-item" href="detail.php">Lhotse</a>
                    <a class="dropdown-item" href="detail.php">K2</a>
                    <a class="dropdown-item" href="detail.php">Kanchanjungha</a>
                    <a class="dropdown-item nav-more"  href="exped.php" > More <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg> </a>
                </div>
                <div class="col-md-6 col-lg-3 p-3">
                    <h5>8000ers</h5>
                    <a class="dropdown-item" href="detail.php">Everest</a>
                    <a class="dropdown-item" href="detail.php">Kanchanjungha</a>
                    <a class="dropdown-item" href="detail.php">Lhotse</a>
                    <a class="dropdown-item" href="detail.php">K2</a>
                    <a class="dropdown-item nav-more"  href="exped.php" > More <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg> </a>
                </div>
                <div class="col-md-6 col-lg-3 p-3">
                    <h5>7000ers</h5>
                    <a class="dropdown-item" href="detail.php">Annapurna</a>
                    <a class="dropdown-item" href="detail.php">Mardi Himal</a>
                    <a class="dropdown-item" href="detail.php">Dhaulagiri</a>
                    <a class="dropdown-item" href="detail.php">K2</a>
                    <a class="dropdown-item nav-more"  href="exped.php" > More <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg> </a>
                </div>
                <div class="col-md-6 col-lg-3 p-3">
                    <h5>6000ers</h5>
                    <a class="dropdown-item" href="detail.php">Annapurna</a>
                    <a class="dropdown-item" href="detail.php">K2</a>
                    <a class="dropdown-item" href="detail.php">Mardi Himal</a>
                    <a class="dropdown-item" href="detail.php">Dhaulagiri</a>
                    <a class="dropdown-item nav-more"  href="exped.php" > More <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg> </a>
                </div>
            </div>
            </div>
            
            </div>
            </li>
            <!--MegaMenu End-->
            <li class="nav-item">
                    <a href="exped.php" class="nav-link"><span class="menu">Discover</span></a>
            </li>
            <li class="nav-item">
                    <a href="about.php" class="nav-link"><span class="menu">About Us</span></a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link"><span class="menu">Contact Us</span></a>
            </li>
        </ul>
       </div>
      </nav>
     </div>
    </div>
   </div>