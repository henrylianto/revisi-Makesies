<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <?php
    SESSION_START();
    ?>
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
                                    <li class="nav-item"><input class="border rounded shadow-sm" type="search" placeholder=" Search..." style="height: 33px;" id="search"><a href="#Search" onclick="this.href='?posttitle='+document.getElementById('search').value" class="fa fa-search id="></a></li>
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
         </section>





      <main>
        <div>
            <div class="container" style="margin-top: 20px;">
                <div class="row">
                    <div class="col">
                        <h4 id="section_title">Hot Posts</h4>
                    </div>
                    <div class="col flex-row align-self-start">
                        <div class="dropdown d-lg-flex justify-content-lg-end"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true" id="button-css" type="button" style="margin-bottom: 15px;">Sort By</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#Newest">New</a><a class="dropdown-item" href="#Oldest">Old</a><a class="dropdown-item" href="#MostLiked">Most Liked</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



          <div class="row"class="flex-column">
            <div id="index" class="row">

                  </div>
              </div>




            </div>
        </div>


       </main>





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
          <script src="assets/bootstrap/js/bootstrap.min.js"></script>
          <script src="assets/js/api.js"></script>
          <script type="text/javascript" src="assets/js/database.js"> </script>
          <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>

          <script type="text/javascript">
          document.addEventListener("DOMContentLoaded",function(){
          var urlParams = new URLSearchParams(window.location.search);
          var title = urlParams.get('posttitle');
          getSearch(title);
          });
          </script>

          <script type="text/javascript">
              document.addEventListener("DOMContentLoaded", function() {
              var page = window.location.hash.substr(1);

              document.querySelectorAll(".dropdown a")
              .forEach(function(element) {
                element.addEventListener("click", function(event) {
                  page = event.target.getAttribute("href").substr(1);
                  switch (page) {
                    case "Newest":
                            getPosts("/posts/postsdetailnew?sortby=DESC", "Newest");
                            break;
                    case "Oldest":
                            getPosts("/posts/postsdetailnew?sortby=ASC", "Oldest");
                            break;
                    case "MostLiked":
                            getPosts("/posts/postsDetailLike", "Most Liked");
                            break;
              }
              });
              });

              getPosts("/posts/postsdetailnew","Hot Posts");

            });
          </script>







  </body>
</html>
