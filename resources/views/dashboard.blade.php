<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BartaJog Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/dashboard.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg header-nav">
    <div class="container-fluid">
      <a class="navbar-brand mx-auto header-name" href="#"></a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success header-search" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Username</a></h1>
        <p class="text-light text-center"><a href="index.html"></a></p>
        <p><span class="typed text-light" data-typed-items="Full Stack Web Developer || B.Sc in Computer Science and Engineering"></span></p>
        <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{ url('/dashboard') }}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{ url('/profile') }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profile</span></a></li>
          <li><a href="{{ url('/friends') }}" class="nav-link scrollto"><i class="bx bx-group"></i> <span>Friends</span></a></li>
          <li><a href="" class="nav-link scrollto"><i class="bx bx-notification"></i> <span>Notification</span></a></li>
          <li><a href="" class="nav-link scrollto"><i class="bx bx-message"></i> <span>Message</span></a></li>
          <li><a href="{{ url('/online') }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Online</span></a></li>
          <li><a href="{{ route('logout') }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Logout</span></a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-9 mx-4">
        <div class="mt-3">
            <div class="form-floating">
                <textarea class="form-control"  id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Create a New Post...</label>
                </div>
            <br>
            <div class="d-grid gap-2 mt-3">
                <input class="btn btn-primary btn-sm" name="Image" type="file"></input>
                <button class="btn btn-success btn-sm" type="submit">Post</button>
            </div>
            <br>
            <div class="card bg-dark mt-3 mx-2">
                <div class="card-body">
                  <h5 class="card-title text-white">Sarker Majid</h5>
                  <h6 class="card-subtitle mb-2 text-muted">28 june 2022</h6>
                  <hr class="bg-info mb-2">
                  <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <hr class="bg-info">
                  <a href="#" class="card-link">Like</a>
                  <a href="#" class="card-link">Comment</a>
                  <a href="#" class="card-link">Share</a>
                </div>
            </div>
            <div class="card bg-dark mt-3 mx-2">
                <div class="card-body">
                  <h5 class="card-title text-white">Sarker Majid</h5>
                  <h6 class="card-subtitle mb-2 text-muted">28 june 2022</h6>
                  <hr class="bg-info mb-2">
                  <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <hr class="bg-info">
                  <a href="#" class="card-link">Like</a>
                  <a href="#" class="card-link">Comment</a>
                  <a href="#" class="card-link">Share</a>
                </div>
            </div>
            <div class="card bg-dark mt-3 mx-2">
                <div class="card-body">
                  <h5 class="card-title text-white">Sarker Majid</h5>
                  <h6 class="card-subtitle mb-2 text-muted">28 june 2022</h6>
                  <hr class="bg-info mb-2">
                  <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <hr class="bg-info">
                  <a href="#" class="card-link">Like</a>
                  <a href="#" class="card-link">Comment</a>
                  <a href="#" class="card-link">Share</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>