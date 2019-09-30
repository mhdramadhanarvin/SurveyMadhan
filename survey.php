<?php  
  include 'config.php';
  if (isset($_SESSION['survey'])) { 
    if (isset($_POST['submit'])) {
      $nama = $_SESSION['survey']['nama'];
      $umur = $_SESSION['survey']['umur'];
      $jenis_kelamin = $_SESSION['survey']['jenis_kelamin'];
      $post_masalah = $_POST['masalah'];
      $post_area = $_POST['area'];
      $post_kemungkinan = $_POST['kemungkinan'];
      $post_solusi = $_POST['solusi'];
      $waktu = date('d F Y H:i:s');
      
      $querySurvey = mysqli_query($conn, "UPDATE survey SET masalah = '$post_masalah', area = '$post_area', kemungkinan = '$post_kemungkinan', solusi = '$post_solusi' , waktu = '$waktu' WHERE nama = '$nama' AND umur = '$umur' AND jenis_kelamin = '$jenis_kelamin' ORDER BY id DESC LIMIT 1");

      if ($querySurvey == true) {
        header("Location: done.php");
      }  
    }
  } else {
    header("Location: index.php");
  }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form &mdash; Survey</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html">Form Survey</a></div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
              <div class="row align-items-center">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="500">
                  <form action="" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Masalah</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" name="masalah" placeholder="Masalah yang ada di kota medan" required>
                    </div>
                    <h3 class="h4 text-black mb-4">Area Terkait</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" name="area" placeholder="Area terkait" required>
                    </div>
                    <h3 class="h4 text-black mb-4">Kemungkinan</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" name="kemungkinan" placeholder="Kemungkinan yang terjadi" required>
                    </div>
                    <h3 class="h4 text-black mb-4">Rekomendasi/Solusi</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" name="solusi" placeholder="Rekomendasi atau solusi dari anda" required>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Kirim" name="submit">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

     
    <footer class="footer-section bg-white">
      <div class="container">

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Stream Comunity
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>