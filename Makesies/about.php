<!DOCTYPE html>
<html lang="id">
<?php
session_start();
 ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="MAKESIES" Description="Makesies is a website made to gather folks who appreciate handmade stuff!, Come join us in sharing and discussing all things about handmade stuff!.">
    <title>MAKESIES</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus+Slab">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo-1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <section>
      <header>
          <div id="navbar">
              <nav class="navbar navbar-light navbar-expand-md" id="nav-style" style="box-shadow: 0px 0.1px;">
                  <div class="container-fluid">
                      <a class="navbar-brand" href="index.php" style="font-size: 20px;">
                          <picture><img src="assets/img/popop.jpeg" height="30px"></picture>Makesies</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                      <div
                          class="collapse navbar-collapse" id="navcol-1">
                          <ul class="nav navbar-nav mx-auto">
                              <li class="nav-item"><input class="border rounded shadow-sm" type="search" placeholder=" Search..." style="height: 33px;" id="search"><a href="#Search" onclick="this.href='search.php?posttitle='+document.getElementById('search').value" class="fa fa-search id="></a></li>
                          </ul>
                          <ul class="nav navbar-nav">
                              <li class="nav-item" style="margin-right: 5px;"><a class="nav-link active" href="index.php">Home</a></li>
                              <li class="nav-item" style="margin-right: 5px;"><a class="nav-link active" href="about.php">About</a></li>
                              <li class="nav-item" style="margin-right: 5px;"><a class="nav-link active" href="contact.php">Contact</a></li>
                              <?php
                              if (isset($_SESSION["username"])){
                                    echo  '<li class="nav-item" style="margin-right: 5px;"><a class="nav-link active" href="addpost.php">Post</a></li>';
                                    echo  '<li class="nav-item" style="margin-left: 5px;"><a class="btn btn-primary" role="button" href="assets/php/logout.php">Logout</a></li>';
                              } else echo '<li class="nav-item" style="margin-left: 5px;"><a class="btn btn-primary" role="button" href="login.php">Login</a></li>';
                               ?>

                          </ul>
                  </div>
          </div>
          </nav>
          </div>
      </header>
<body>
  <div>
      <div class="container">
          <div class="row">
              <div class="col-auto col-sm-8 col-md-auto  ">
                  <h1 style="margin-top: 30px;margin-bottom: 20px;font-weight: bold;">Profile Perusahaan</h1>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-8 col-md-8 col-lg-4">
                <img class="img-thumbnail" src="assets/img/aaaaa.jpg" alt="assets/img/popop.jpeg">
                <p style="font-size: 35px;text-align: center;font-style: normal;font-weight: bold;line-height: 45px;">Makesies Company</p>
              </div>
              <div class="col-sm-8" id="column-teks">
                  <div class="row">
                      <div class="col">
                          <h1 style="text-align: center;">About Us</h1>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col" style="margin-bottom: 12px;margin-top: 8px;">
                          <h1 style="text-align: center;font-size: 22px;">Oleh : CEO Sugiyono K.</h1>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Makesies didirikan pada tahun 2020 dengan 1 tujuan. Yaitu menjadi tempat dimana para penggemar kerajinan tangan dapat berkumpul dan bersatu untuk membentuk sebuah komunitas
                              dimana kita semua dapat berdiskusi dan berbagi mengenai kerajinan tangan</p>
                          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Seiring berlangsungnya pandemi COVID-19, banyak diantara kita yang beralih kepada kerajinan tangan sebagai salah satu cara untuk melewatkan waktu,melatih skill,dan bahkan
                              beberapa mulai membuat bisnis dari hasil kerajinan tangan yang dibuatnya.</p>
                          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Maka tentunya dengan berkembangnya komunitas penggemar dan pengrajin kerajinan tangan maka kami dengan bangga meluncurkan website Makesies sebagai platform dimana kita semua dapat
                              berinteraksi satu sama yang lain untuk berdiskusi dan berbagi segala sesuatu mengenai kerajinan tangan.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

</body>


<div class="footer-basic margin-top:100px">
  <footer >
      <ul class="list-inline">
          <li class="list-inline-item"><a href="index.php">Home</a></li>
          <li class="list-inline-item"><a href="addpost.php">Post</a></li>
          <li class="list-inline-item"><a href="about.php">About</a></li>
          <li class="list-inline-item"><a href="contact.php">Contact</a></li>
          <?php
          if (isset($_SESSION["username"])){
                echo  '          <li class="list-inline-item"><a href="assets/php/logout.php?suksesLogout">Logout</a></li>';
          } else echo '          <li class="list-inline-item"><a href="login.php">Login</a></li></li>';
           ?>
      </ul>
      <p class="copyright">Henry Lianto © 2021</p>
  </footer>
</div>


        <script src="assets/js/jquery.min.js"></script>
        <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>

</html>
