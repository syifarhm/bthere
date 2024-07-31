<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BeThere:)</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">

  <!-- Icon-->
  <link rel="icon" type="image/x-icon" href="img/b.ico" />
  <link rel="stylesheet" href="css/style.css " />

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">BeThere</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Benefit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login_admin.php">Set</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Daftar Relawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Lets Be Together with </div>
        <div class="intro-heading text-uppercase">BE THERE!</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
      </div>
    </div>
  </header>

  <!-- Services / benefit-->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Apa yang bisa Kamu dapatkan?</h2>
          <h3 class="section-subheading text-muted">Lebih dari sekadar membantu orang lain, BeThere menawarkan sebuah pengalaman yang memperkaya, memberdayakan, dan membuka cakrawala baru dalam kehidupan.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <img class="rounded-circle img-fluid" src="img/benefit/benefit1.jpg" alt="">
            <!--<i class="fas fa-circle fa-stack-2x text-primary"></i>-->
          </span><br><br>
          <h4 class="service-heading">Perluas Jaringan</h4>
          <p class="text-muted">Dapat membangun pertemanan dan memperluas jaringan koneksi dengan bertemu orang baru dari berbagai latar belakang, serta mengasah kemampuan interpersonal melalui kerja sama tim.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <img class="rounded-circle img-fluid" src="img/benefit/benefit2.jpg" alt="">
             <!--<i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>-->
          </span><br><br>
          <h4 class="service-heading">Skill & Pengetahuan</h4>
          <p class="text-muted">Belajar tentang berbagai isu sosial dan cara mengatasinya, serta mengembangkan keterampilan baru seperti salah satu contohnya adalah pertolongan pertama.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <img class="rounded-circle img-fluid" src="img/benefit/benefit3.jpg" alt="">
            <!--<i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>-->
          </span><br><br>
          <h4 class="service-heading">Leadership</h4>
          <p class="text-muted">Dengan bergabung dengan Kami merupakan sebuah cara untuk melatih dan mengembangkan kemampuan Leadership. Dengan berani mengambil peran, belajar dari pengalaman, dan menunjukkan dedikasi.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Portfolio</h2>
          <h3 class="section-subheading text-muted">Beberapa Project yang Sudah Kami Laksanakan</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/bantuan_logistik.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Bantuan Logistik Gempa Bumi</h4>
            <p class="text-muted">Aceh</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/porto2.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Bakti Sosial</h4>
            <p class="text-muted">Maluku</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/pantai.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Bersih - bersih Pantai</h4>
            <p class="text-muted">Banten</p>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Get To Know Us!</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/about1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2015</h4>
                  <h4 class="subheading">Our Humble Beginnings</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lahir dari keresahan hati melihat kesenjangan sosial dan penderitaan di sekitar, komunitas Be There didirikan oleh beberapa orang muda yang ingin mengambil langkah nyata. Dengan modal semangat dan tekad yang kuat, mereka mulai melakukan kegiatan sosial kecil-kecilan seperti membantu korban bencana alam, membagikan makanan kepada kaum dhuafa, dan mengadakan kegiatan edukasi untuk anak-anak kurang mampu.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/about2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2015 - Now</h4>
                  <h4 class="subheading">Perjalanan Menuju Kemajuan</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Seiring berjalannya waktu, komunitas Be There terus berkembang dan menarik perhatian masyarakat luas. Semakin banyak orang yang terinspirasi oleh semangat mereka dan bergabung untuk memberikan kontribusi. Jaringan Be There pun meluas ke berbagai daerah di Indonesia, memungkinkan mereka untuk menjangkau lebih banyak orang yang membutuhkan bantuan.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/about3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2015 - Now</h4>
                  <h4 class="subheading">Prestasi dan Pengakuan</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Komunitas Be There telah menorehkan berbagai prestasi gemilang dalam aksi-aksi kemanusiaan. Mereka telah membantu korban bencana alam di berbagai wilayah Indonesia, menyediakan bantuan logistik dan kebutuhan pokok, serta memberikan dukungan psikososial bagi para korban. Be There juga aktif dalam kegiatan sosial lainnya seperti edukasi, advokasi, dan pemberdayaan masyarakat.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Lets Join &
                  <br>Be Part of
                  <br>Our Story!
                </h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/team1.jpg" alt="">
            <h4>Samia</h4>
            <p class="text-muted">Volunteer Coordinator</p>
            <p class="text-muted">"Saya bersemangat untuk membantu sukarelawan menemukan cara yang tepat untuk menggunakan bakat dan minat mereka untuk membuat perbedaan di komunitas kami"</p>
            <!--<ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>-->
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/team2.jpg" alt="">
            <h4>David Christopher</h4>
            <p class="text-muted">Program Director</p>
            <p class="text-muted">"Bekerja sama dengan volunteer yang terdapat dalam berbagai divisi untuk menjalankan program yang bermakna dan selaras dengan misi dan nilai-nilai yang ada "</p>
            <!--<ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>-->
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/team3.jpg" alt="">
            <h4>Pheobe Dyvenor</h4>
            <p class="text-muted">Division Coordinator</p>
            <p class="text-muted">"Sebagai seorang Division Coordinator, saya bertanggung jawab untuk mengatur para volunteer bergabung dengan divisi yang sesuai mereka, agar dapat mengembangkan strategi dan program untuk mencapai misi dari program"</p>
            
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <!--<p class="large ">Jadilah bagian dari perubahan, karena setiap aksi kecil sangat berharga.<br> With BeThere, Together We Make a Change. </p>-->
          <h5 class="large ">Jadilah bagian dari perubahan, karena setiap aksi kecil sangat berharga.<br> With BeThere, Together We Make a Change. </h5>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Daftar Relawan</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form  action="proses_daftar.php" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" name="username" id="username" type="text" placeholder="Masukkan Username Anda*" required="required" data-validation-required-message="Masukkan Username Anda">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Masukkan Email Anda*" required="required" data-validation-required-message="Masukkan Email Anda">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" name="password" id="password" type="password" placeholder="Password" required="required" data-validation-required-message="Password">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <input class="btn btn-primary btn-xl text-uppercase" type="submit" value="Daftar">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Bantuan Logistik Gempa Bumi </h2>
                <p class="item-intro text-muted">7 Desember 2016 - Kab. Pidie Jaya, Aceh </p>
                <p class="text-muted">Pelaksana : <br> Relawan BeThere, Badan Nasional Pennaggulan Bencana (BNPB), Palang Merah Indonesia (PMI)</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/bantuan_logistik.jpg" alt="">
                <p>Gempa bumi dahsyat yang melanda Aceh pada tahun 2016 membawa duka mendalam bagi masyarakat di sana.Projek ini menjadi bukti nyata kepedulian dan semangat gotong royong komunitas relawan Be There dalam membantu sesama.Bantuan logistik didistribusikan melalui posko-posko pengungsian yang didirikan di berbagai lokasi. Adapun bentuk bantuan logistik yang diberikan adalah selimut, obat-obatan, makanan dan minuman serta peralatan mandi.Salah satu tantangan dalam pendistribusian bantuan adalah kondisi infrastruktur yang rusak akibat gempa. </p>
                <ul class="list-inline">
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Bakti Sosial</h2>
                <p class="item-intro text-muted">Juli 2018 - Kab.Halmahera Tengah, Maluku Utara</p>
                <p class="text-muted">Pelaksana : <br> Relawan BeThere, Pem Prov Maluku dan Masyarakat Setempat</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/porto2.jpg" alt="">
                <p>Tergerak oleh rasa kepedulian dan semangat ingin membantu, komunitas relawan BeThere hadir  untuk meringankan beban masyarakat Maluku melalui projek bakti sosial. Bentuk bakti sosial yang dilakukan oleh komunitas Kami beragam seperti membangun rumah, meningkatkan akses pendidikan, menyelenggarakan kegiatan pengobatan gratis, penyuluhan kesehatan, memperbaiki infrastruktur, memberdayakan masyarakat dengan memberikan pelatihan keterampilan.</p>
                <ul class="list-inline">
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Bersih - Bersih Pantai</h2>
                <p class="item-intro text-muted">6 - 7 April 2017 - Kab. Pandeglang, Banten</p>
                <p class="text-muted">Pelaksana : <br>Relawan BeThere, Pem Kabupaten Pandeglang, dan Pem Prov Banten</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/pantai1.jpg" alt="">
                <p>Projek ini juga menjadi pembelajaran berharga tentang pentingnya menjaga kebersihan pantai dan laut. Sampah yang dibuang sembarangan di pantai dapat mencemari laut dan membahayakan biota laut. Tergerak oleh rasa peduli terhadap lingkungan, komunitas relawan Anda hadir untuk menjaga kebersihan pantai. Adapun bentuk kegiatan yang dilakukan seperti, pengumpulan sampah di sepanjang pantai, pemisahan sampah berdasarkan jenisnya, dan pengangkutan sampah ke tempat pembuangan akhir. dampak positif dari projek bersih-bersih pantai, seperti pantai yang lebih bersih dan indah, peningkatan kesadaran masyarakat tentang kebersihan lingkungan, dll.</p>
                <ul class="list-inline">
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>