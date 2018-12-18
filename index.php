<?php
session_start();

if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

if(isset($_SESSION['lang'])){
 include "lang/lang_".$_SESSION['lang'].".php";
}else{
 include "lang/lang_th.php";
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= _TITLE ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- flags icons in select -->
    <link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css" />
    <link rel="stylesheet" type="text/css" href="css/msdropdown/flags.css" />

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?= _DASHTITLE ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about"><?= _ABOUT ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects"><?= _PROJECT ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#pictures"><?= _PICTURES ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><?= _CONTACT ?></a>
            </li>
             <!-- Language -->
            <li class="langBtnPosition">
              <form method='get' action='' id='form_lang' >
                <select name='lang' id="countries" class="nav-link " onchange='changeLang();' >
                <option value='th' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'th'){ echo "selected"; } ?> data-image="img/msdropdown/icons/blank.gif" data-imagecss="flag th" data-title="Thailand">ไทย</option> 
                <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> data-image="img/msdropdown/icons/blank.gif" data-imagecss="flag gb" data-title="Great Britan">English</option>
                <option value='pl' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'pl'){ echo "selected"; } ?> data-image="img/msdropdown/icons/blank.gif" data-imagecss="flag pl" data-title="Poland">Polski</option>
                </select>
              </form>
          </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead greycol">
      <div class="container mainHeader align-items-center">
        <div class="mx-auto text-center">
          <div class="backgroundHeader">
            <h1 class="mx-auto my-0 text-uppercase"><?= _MAINSECTIONTITLE ?></h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5"><?= _MAINSECTIONSMALL ?></h2>
          </div>
          <a onclick="makeGreen()" id="makeGreenBtn" class="btn btn-primary"><?= _MAINSECTIONSBTN ?></a>
         
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4"><?= _SECTIONABOUTTITLE ?></h2>
            <p class="text-white-50"><?= _SECTIONABOUTMORE ?></p>
          </div>
        </div>
        <img src="img/plastics.png" class="img-fluid" alt="">
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light greycol">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="img/001.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4><?= _SECTIONPROJECTTITLE ?></h4>
              <p class="text-black-50 mb-0"><?= _SECTIONPROJECTMORE ?></p>
            </div>
          </div>
        </div>

          <!-- Featured Project Row -->
          <div class="row align-items-center no-gutters mb-4 mb-lg-5">
              <div class="col-xl-12 col-lg-12">
                 <h4><?= _WHATISBANGKRACHAO ?></h4>
                  <iframe width="100%" height="515" src="https://www.youtube.com/embed/yJdN57FoSF4" frameborder="0"
                          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen></iframe>
              </div>
          </div>


        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-12">
                <h4><?= _HOWTOHELP ?></h4>
            </div>
          <div class="col-lg-6">
            <img class="img-fluid" src="img/about01.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white"><?= _PROJECTTITLE1 ?></h4>
                  <p class="mb-0 text-white-50"><?= _PROJECTMORE1 ?></p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/about02.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white"><?= _PROJECTTITLE2 ?></h4>
                  <p class="mb-0 text-white-50"><?= _PROJECTMORE2 ?></p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- Project three Row -->
          <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
              <div class="col-lg-6">
                  <img class="img-fluid" src="img/about03.jpg" alt="">
              </div>
              <div class="col-lg-6">
                  <div class="bg-black text-center h-100 project">
                      <div class="d-flex h-100">
                          <div class="project-text w-100 my-auto text-center text-lg-left">
                              <h4 class="text-white"><?= _PROJECTTITLE3 ?></h4>
                              <p class="mb-0 text-white-50"><?= _PROJECTMORE3 ?></p>
                              <hr class="d-none d-lg-block mb-0 ml-0">
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Project four Row -->
          <div class="row justify-content-center no-gutters">
              <div class="col-lg-6">
                  <img class="img-fluid" src="img/about04.jpg" alt="">
              </div>
              <div class="col-lg-6 order-lg-first">
                  <div class="bg-black text-center h-100 project">
                      <div class="d-flex h-100">
                          <div class="project-text w-100 my-auto text-center text-lg-right">
                              <h4 class="text-white"><?= _PROJECTTITLE4 ?></h4>
                              <p class="mb-0 text-white-50"><?= _PROJECTMORE4 ?></p>
                              <hr class="d-none d-lg-block mb-0 mr-0">
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
    </section>

    <!-- Signup Section -->
    <section id="pictures" class="signup-section greycol">
      <div class="container  gal-container">
        <div id="masonry">
          <div class="item">
            <img src="img/bkch02.jpg" alt="" />
          </div>
          <div class="item">
            <img src="img/bkch04.jpg" alt="" />
          </div>
          <div class="item">
            <img src="img/bkch01.jpg" alt="" />
          </div>
          <div class="item">
            <img src="img/bkch05.jpg" alt="" />
          </div>
          <div class="item">
            <img src="img/bkch06.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0"><?= _CONTACTWHERE ?></h4>
                <hr class="my-4">
                <div class="small text-black-50"><?= _CONTACTWHEREDISCRPTION ?></div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0"><?= _CONTACTEMAIL ?></h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">michal.zielinski@mail.kmutt.ac.th</a>
                </div>
                <div class="small text-black-50">
                  <a href="#">vorapol.cha@mail.kmutt.ac.th</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-user-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0"><?= _CONTACTWHO ?></h4>
                <hr class="my-4">
                <div class="small text-black-50"><?= _CONTACTWHODISCRIPTION ?></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; Project Bang Krachao 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/msdropdown/jquery.dd.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

    <script>
     function changeLang(){
        document.getElementById('form_lang').submit();
      }

      $(document).ready(function() {
        $("#countries").msDropdown();
      });

      function makeGreen() {
        $('.greycol').css("filter", "grayscale(0%)");
        $('#makeGreenBtn').html('<?= _MAINSECTIONSBTNAFTER ?>');
      }
      $('img')
      .mouseenter(function() { 
          $(this).css("filter", "grayscale(100%)");
      })
      .mouseleave(function() {
        $(this).css("filter", "grayscale(0%)");
      });

    </script>


  </body>

</html>
