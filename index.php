<?php 
  include 'config.php';
  if (isset($_SESSION['survey'])) {
    header("Location: survey.php");
  } else {
    if (isset($_POST['submit'])) {
      $post_nama = $_POST['nama'];
      $post_umur = $_POST['umur'];
      $post_jenis_kelamin = $_POST['jenis_kelamin'];
      $waktu = date('d F Y H:i:s');

      $queryInsert = mysqli_query($conn, "INSERT INTO survey (nama, umur, jenis_kelamin, waktu) VALUES ('$post_nama', '$post_umur', '$post_jenis_kelamin', '$waktu') ");

      if ($queryInsert == true) {
        $_SESSION['survey'] = [
          'nama' => $post_nama,
          'umur' => $post_umur,
          'jenis_kelamin' => $post_jenis_kelamin
        ];
        header("Location: survey.php");
      } else {
        header("Location: index.php");
      }
    }
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

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Pengenalan</a></li>
                <li><a href="#programs-section" class="nav-link">Tujuan</a></li>
                <li><a href="#teachers-section" class="nav-link">Feedback</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Pengenalan Form Survey,</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">ini adalah form untuk menampung permasalah yang ada di seluruh kota medan.</p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill">Ada Pertanyaan ?</a></p>

                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Data Diri</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <select id="inputState" class="form-control" name="umur" required>
                          <option value="">Umur Anda</option>
                          <?php for($i = 17;$i<66;$i++):?>
                          <option value="<?=$i;?>"><?=$i;?></option> 
                          <?php endfor;?>
                        </select>
                      </div>
                    <fieldset class="form-group">
                        <div class="row">
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="pria" checked required="">
                              <label class="form-check-label" for="gridRadios1">
                                Pria
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="wanita" required="">
                              <label class="form-check-label" for="gridRadios2">
                                Wanita
                              </label>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Masuk" name="submit">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Tujuan Survey</h2>
            <p>Untuk mendegarkan keluhan masyarakat seruluh kota medan</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Keluhan Masyarakat Dijalan</h2>
            <p class="mb-4">Biasanya keluhan masyarakat di jalanan yang berada dikota medan yang paling banyak itu seperti.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-check"></span></span>
              <div><h3 class="m-0">Kemacetan</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-check"></span></span>
              <div><h3 class="m-0">Lampu Jalan Mati</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-check"></span></span>
              <div><h3 class="m-0">Jalanan Berlubang</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Keluhan Masyarakat di Rumah</h2>
            <p class="mb-4">Biasanya keluhan masyarakat di rumah yang berada dikota medan yang paling banyak itu seperti.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-check"></span></span>
              <div><h3 class="m-0">Kebanjiran</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-check"></span></span>
              <div><h3 class="m-0">Kepanasan</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Keluhan Masyarakat Pada Pemimpin</h2>
            <p class="mb-4">Biasanya keluhan masyarakat kepada pemimpinnya yang berada dikota medan yang paling banyak itu seperti.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-check"></span></span>
              <div><h3 class="m-0">Kurangnya bantuan</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-check"></span></span>
              <div><h3 class="m-0">Pemimpin yang tidak jujur</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-check"></span></span>
              <div><h3 class="m-0">Tidak mengenali pemimpinnya</h3></div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images/bobby.png" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Boby Nasution</h3>
            <blockquote>
              <p>&ldquo; Saya Boby Nasution, sosok anak muda yang mampu memberi harapan baru bagi Kota Medan &rdquo;</p>
            </blockquote>
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