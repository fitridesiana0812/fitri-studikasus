<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Domini Restaurant-Studi Kasus</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main2.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Domini<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php#hero">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#menu">Menu</a></li>
          <li><a href="index.php#chefs">Chefs</a></li>
          <li><a href="index.php#gallery">Gallery</a></li>
          <li><a href="index.php#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>CRUD</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="menu.php">Data Menu</a></li>
              <li><a href="customer.php">Data Customer</a></li>
              <li><a href="transaksi.php">Data Transaksi</a></li>
            </ul>
          </li>
          
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="order.php">Order Menu</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <section id="crud" class="dropdown">
    <div class="container">       
        <table class="display" id ="Table" >
        <a href="create_customer.php" class="btn btn-primary mt-5">Tambah data</a>
        <h3 class="fw-bold text-center mt-3 mb-4">Data Customer</h3>
                <thead>
                    <tr>
                    <th widht="50px" class="text-center">ID</th>
                    <th widht="200px" class="text-center">Nama</th>
                    <th widht="300px" class="text-center">Jenis Kelamin</th>
                    <th widht="300px" class="text-center">Telepon</th>
                    <th widht="200px" class="text-center">Email</th>
                    <th widht="200px" class="text-center">Alamat</th>
                    <th widht="200px" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php
                    include ('connect.php');
                    $data_customer = mysqli_query($conn, "SELECT * FROM customer");
                    while($customer = mysqli_fetch_array($data_customer)){
                ?>
                <tr>
                    <td class="text-center"><?php echo $customer['id_customer'] ?></td>
                    <td class="text-center"><?php echo $customer['nama'] ?></td>
                    <td class="text-center"><?php echo $customer['jenis_kelamin'] ?></td>
                    <td class="text-center"><?php echo $customer['telepon'] ?></td>
                    <td class="text-center"><?php echo $customer['email'] ?></td>
                    <td class="text-center"><?php echo $customer['alamat'] ?></td>
                    <td class="text-center">
                    <a class="btn btn-warning" href="edit_customer.php?id_customer=<?= $customer['id_customer']; ?>">Edit</a>
                    <a class="btn btn-danger" href="delete_customer.php?id_customer=<?= $customer['id_customer']; ?>">Delete</a>
                </tr>
                <?php 
                    } 
                ?>
            </table>
        </div>
  </section >
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Jl. KHI No. 234, Surabaya <br>
              Jawa Timur - Indonesia<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone :</strong> +1 5589 55488 55<br>
              <strong>Email :</strong> info@domini.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
            <strong>Mon-Sat :</strong> 11 AM - 23 PM<br>
            <strong>Sunday :</strong> Closed<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Domini</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Fitri Desiana Afani</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script type="text/javascript">
    $(document).ready(function () {
        $('#Table').DataTable();
    } );
</script>