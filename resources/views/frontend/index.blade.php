
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to my website</title>

      <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

		    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (via CDN) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- Header Section -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Open Hours: Mon-Sun, 10 AM - 10 PM</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="logo.png" alt="Restaurant Logo" class="logo">
                </div>
                <div class="col-md-4 text-end">
                    <!-- Social Icons -->
                    <a href="#" class="social-icons"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    
    
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Ansil's Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @include('frontend.welcome')


        <!-- Services Section -->
        @include('frontend.service');




 <!-- Menu Section -->
@include('frontend.menu')

<!-- Testimonials Section -->
@include('frontend.testimonials')







<footer class="bg-dark text-white text-center py-3 w-100">
  <p>&copy; 2024 Your Company. All rights reserved.</p>
  <p>Follow us on:
    <a href="#" class="text-white">Facebook</a> |
    <a href="#" class="text-white">Twitter</a> |
    <a href="#" class="text-white">Instagram</a>
  </p>
</footer>



  <!-- Footer Section -->
    <!-- <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2024 Auth Restaurant | All Rights Reserved</p>
            <p>Designed by You</p>
        </div>
    </footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>









    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    </body>

</html>




  