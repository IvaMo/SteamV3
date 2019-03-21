<!DOCTYPE html>



<?php 
session_start();
$id = $_GET['id'];
define('__ROOT__', dirname(dirname(__FILE__))); 

require_once(__ROOT__."/bend/db.php");
include_once(__ROOT__."/bend/Product.php");


$prod = new Product();


?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Video-Parallax-Background.css">
</head>

<body style="background-color:#21394b;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgba(255,255,255,0.02);background-image:url(&quot;linear-gradient(to bottom, rgb(30,29,29) , #21394b&quot;);">
        <div class="container"><a class="navbar-brand" href="#" style="/*text-shadow:1px 1px #000000;*/color:rgba(204,202,202,0.9);">Uun Logo</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="/*text-shadow:1px 1px #000000;*/color:rgba(204,202,202,0.9);">Tienda</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="/*text-shadow:1px 1px #000000;*/color:rgba(204,202,202,0.9);">Biblioteca</a></li>
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
  <?php $prod->getProductFromId($id); ?>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center align-content-center video-parallax-container" style="color:rgb(255,255,255);">
    <video autoplay muted loop id="video">
  <?php echo '<source src="http://localhost/SteamV2/vid/'.$id.'.mp4" type="video/mp4">'; ?>
</video>
    </div>
    <script
        src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
        <script src="assets/js/Simple-Slider.js"></script>
        <script src="assets/js/Video-Parallax-Background.js"></script>
</body>

</html>