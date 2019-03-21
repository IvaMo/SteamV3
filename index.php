<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SteamV2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-color:#21394b;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-image:linear-gradient(to bottom, rgb(30,29,29) , #21394b);">
        <div class="container"><a class="navbar-brand" href="#" style="color:rgba(204,202,202,0.9);">Uun Logo</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Prod/index.php" style="color:rgba(204,202,202,0.9);">Tienda</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:rgba(204,202,202,0.9);">Biblioteca</a></li>
                    
                 <?php 
                 
                 if(isset($_SESSION['name'])){
                 echo  ' <li class="nav-item" role="presentation"><a class="nav-link" href="Account" style="color:rgba(204,202,202,0.9);">'. $_SESSION['name'] .'</a></li>'; 
                 }else{
                    echo  ' <li class="nav-item" role="presentation"><a class="nav-link" href="Account/login.php" style="color:rgba(204,202,202,0.9);">Login</a></li>';   
                 }
                 ?>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field" style="color:rgba(204,202,202,0.9);"></div>
                </form>
        </div>
        </div>
    </nav>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(&quot;https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500&quot;);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev" style="color:rgb(74,74,74);"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>