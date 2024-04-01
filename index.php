<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online submission</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/about.jpg" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.php">PHINMA UI</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#register">Sign Up</a></li>

          <li class="dropdown"><a href="#"><span>Account </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#usermodal">Login User </a></li>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#adminmodal">Login Admin</a></li>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </li>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="height:90vh">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1 class="font-monospace" style="font-size: 4rem;"><strong>1stYearBite</strong></h1>
      <h1 class="small">ONLINE APPLICATION SUBMISSION APP</h1>
      <a href="#" data-bs-toggle="modal" data-bs-target="#register" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Modal USER-->
  <div class="modal fade" id="usermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login User<i class="fa fa-user" aria-hidden="true"></i></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="process.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter email">
              <br>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" name="login_student" value="Login">
        </div>
      </div>
    </div>
  </div>
  </form>

  <!-- Modal Admin-->
  <div class="modal fade" id="adminmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login Admin </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="process.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter email">
              <br>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" name="admin_log" value="Login">
        </div>
      </div>
    </div>
  </div>
  </form>

  <!-- Modal Register-->
  <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Register Now</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="process.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Name </label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter Name">
              <br>
            </div>
            <div class="form-group">
              <label for="exampleInputSection1">Section </label>
              <input type="text" name="section" class="form-control" id="exampleInputSection1" aria-describedby="emailHelp" required placeholder="Enter Section">
              <br>
            </div>
            <div class="form-group">
              <label for="semester">Select Semester:</label><br>
              <input type="radio" id="semester1" name="semester" value="semester1">
              <label for="semester1">1 Semester </label><br>
              <input type="radio" id="semester2" name="semester" value="semester2">
              <label for="semester2">2 Semester </label><br>
            </div><br>

            <div class="form-group">
              <label for="exampleInputSchoolyr1">School Year </label>
              <input type="text" name="school_yr" class="form-control" id="exampleInputSchoolyr1" aria-describedby="emailHelp" required placeholder="Enter School Year">
              <br>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter email">
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">Contact</label>
                <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter Contact">
                <br>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="clear" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="reg_btn" value="Register">
              </div>
            </div>
        </div>
      </div>
      </form>


      <!-- Vendor JS Files -->
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>

</body>

</html>