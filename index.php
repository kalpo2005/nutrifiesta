<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NutriFiesta-home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 " href="index.php">NutriFiesta</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="Cart.php">cart</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link About Us me-2" href="About.php" tabindex="-1" aria-disabled="true">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="Contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link About Us me-2" href="Feedback.php" tabindex="-1" aria-disabled="true">Feedback</a>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success me-lg-2 me-3" type="submit">Search</button>

          <div class="d-flex align-items-center">
            <?php if (isset($_SESSION['name'])): ?>
              <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome, <strong><?php echo htmlspecialchars($_SESSION['name']); ?></strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                  <li><a href="php/logout_user.php" class="dropdown-item">Logout</a></li>
                </ul>
              </div>
            <?php else: ?>
              <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3"
                data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
              </button>
              <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal"
                data-bs-target="#registerModal">
                Register
              </button>
            <?php endif; ?>
          </div>


        </form>
      </div>
    </div>
  </nav>



  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="php/login.php">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">
              <i class="bi bi-person-fill me-2"></i> User Login
            </h5>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control shadow-none" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control shadow-none" required>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <button type="submit" class="btn btn-dark shadow-none">Login</button>
              <a href="#" class="text-decoration-none text-secondary">Forgot Password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form id="registerForm">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill me-2"></i> User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>

          <div class="modal-body shadow" style="background:url('images/bg-img/111.jpg'); background-size: cover;">
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
              Note: Your details must match with your ID (Aadhar card, passport, etc) that will be
              required during check-in.
            </span>

            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">User ID</label>
                  <input type="number" name="user_id" class="form-control shadow-none" required>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" name="name" class="form-control shadow-none" required>
                </div>

                <div class="col-12 mb-3">
                  <label class="form-label">Address</label>
                  <textarea name="address" class="form-control shadow-none" rows="2" required></textarea>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" name="pincode" class="form-control shadow-none" required>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control shadow-none" required>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Contact</label>
                  <input type="tel" name="contact" class="form-control shadow-none" required>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" class="form-control shadow-none" required>
                </div>
              </div>

              <div class="text-center mt-3">
                <button type="submit" class="btn btn-dark shadow-none">Register</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



  <div class="containerfluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/bg-img/p2.jpg" class="w-100 b-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/bg-img/5.jpg" class="w-100 h-90 b-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/bg-img/p2.jpg" class="w-100 b-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/bg-img/5.jpg" class="w-100 b-block" />
        </div>
      </div>

    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-3 rounded">
        <h5>Order Fresh Fruit's and Vagetable</h5>
      </div>
    </div>
  </div>
  <h2 class="mt-2 pt-4 mb-4  fw-bold text-center fm-bold h-font">Our Grocery Product</h2>
  <div class="container">
    <div class="row">
      <div class="col lg-4 col-md-4 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/fruit's/strawberry.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Straw Berry</h5>
            <h6 class="mb-4">₹100.00 per kg</h6>
            <div class="feature mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark  text-wrap lh-base">
                Fresh Straw Berry
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                stock Available
              </span>
              <span class="badge bg-light text-dark  text-wrap lh-base">
                Your Favourite
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="bage rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-primary shadow-none">Order Now</a>
              <a href="#" class="btn btn-primary btn-outline-bark shadow-none">More Details</a>
            </div>


          </div>
        </div>
      </div>
      <div class="col lg-4 col-md-4 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/fruit's/black grapes.jpg" class="card-img-top">
          <div class="card-body mb-4">
            <h5>Dark Grapes</h5>
            <h6 class="mb-3">₹115.00 per kg</h6>
            <div class="feature mb-3">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark  text-wrap lh-base mb-2">
                Fresh Grapes
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base mb-2">
                stock Available
              </span>
              <span class="badge bg-light text-dark  text-wrap lh-base mb-2">
                Healthy for Health
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="bage rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-primary shadow-none">Order Now</a>
              <a href="#" class="btn btn-primary btn-outline-bark shadow-none">More Details</a>
            </div>


          </div>
        </div>
      </div>
      <div class="col lg-4 col-md-4 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/fruit's/apple.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Apple</h5>
            <h6 class="mb-4">₹150.00 per kg</h6>
            <div class="feature mb-4">
              <h6 class="mb-2">Features</h6>
              <span class="badge bg-light text-dark  text-wrap lh-base mb-4">
                Fresh Apple
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base mb-4">
                stock Available
              </span>
              <span class="badge bg-light text-dark  text-wrap lh-base mb-4">
                Good for Health
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="bage rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-primary shadow-none">Order Now</a>
              <a href="#" class="btn btn-primary btn-outline-bark shadow-none">More Details</a>
            </div>


          </div>
        </div>
      </div>
      <div class="col lg-4 col-md-4 my-3">
        <div class="card border-0 shadow" style="max-width: 500px; margin: auto;">
          <img src="images/vegetable/Lady Finge.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Lady Finger</h5>
            <h6 class="mb-4">₹120.00 per kg</h6>
            <div class="feature mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark  text-wrap lh-base">
                Fresh Straw Berry
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                stock Available
              </span>
              <span class="badge bg-light text-dark  text-wrap lh-base">
                Grown Organically
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="bage rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-primary shadow-none">Order Now</a>
              <a href="#" class="btn btn-primary btn-outline-bark shadow-none">More Details</a>
            </div>


          </div>
        </div>
      </div>
      <div class="col lg-4 col-md-4 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/vegetable/Potato.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Potato</h5>
            <h6 class="mb-3">₹60.00 per kg</h6>
            <div class="feature mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark  text-wrap lh-base">
                Fresh Straw Berry
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                stock Available
              </span>
              <span class="badge bg-light text-dark  text-wrap lh-base">
                Grown Organically
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="bage rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-primary shadow-none">Order Now</a>
              <a href="#" class="btn btn-primary btn-outline-bark shadow-none">More Details</a>
            </div>


          </div>
        </div>
      </div>
      <div class="col lg-4 col-md-4 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/vegetable/Brinjal.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Brinjal</h5>
            <h6 class="mb-3">₹120.00 per kg</h6>
            <div class="feature mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark  text-wrap lh-base">
                Fresh Straw Berry
              </span>
              <span class="badge bg-light text-dark text-wrap lh-base">
                stock Available
              </span>
              <span class="badge bg-light text-dark  text-wrap lh-base">
                Grown Organically
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="bage rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-primary shadow-none">Order Now</a>
              <a href="#" class="btn btn-primary btn-outline-bark shadow-none">More Details</a>
            </div>


          </div>
        </div>
      </div>



      <div class="col-lg-12 text-center mt-5">
        <a href="g" class="btn btn-sm btn-outline-dark rounded-0 fm-bold shadow-none">More Grocery >>></a>
      </div>

    </div>
  </div>


  <h2 class="mt-5 pt-4  fw-bold mb-4 text-center fw-bold h-font ">Testimonials</h2>
  <div class="container">
    <div class="swiper Swiper-testimonials">
      <div class="swiper-wrapper">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-item-center mb-1">
            <img src="images/bg-img/rating.png" width="35px">
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis alias repudiandae odio reiciendis quos
            atque eius qui non sunt fuga.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-item-center mb-3">
            <img src="images/bg-img/rating.png" width="35px">
            <h6 class="m-0 ms-2">Random User4</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis alias repudiandae odio reiciendis quos
            atque eius qui non sunt fuga.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-item-center mb-3">
            <img src="images/bg-img/rating.png" width="35px">
            <h6 class="m-0 ms-2">Random User3</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis alias repudiandae odio reiciendis quos
            atque eius qui non sunt fuga.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-item-center mb-3">
            <img src="images/bg-img/rating.png" width="35px">
            <h6 class="m-0 ms-2">Random User2</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis alias repudiandae odio reiciendis quos
            atque eius qui non sunt fuga.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>



      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>


  <h2 class="mt-5 pt-4 fw-bold mb-4 text-center fm-bold h-font">Reach Us</h2>
  <div class="container">
    <div class="row">
      <div class="col lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31047.69556995658!2d72.11686662361357!3d21.75534370046627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a7323e981b5%3A0xa5182291c8c086b3!2sSardar%20Nagar%2C%20Bhavnagar%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1741516825914!5m2!1sen!2sin"
          loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel: +919016835668 "
            class="d-inline-block mb-3 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +919016835668
          </a>
          <br>
          <a href="tel: +919016835668 "
            class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +919016835668
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i>Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i>Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-1">
              <i class="bi bi-instagram me-1"></i>Instagram
            </span>
          </a>
          <br>
          <a href="tel: +919016835668 "
            class="d-inline-block text-decoration-none text-dark">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">Grocery NutriFiesta</h3>
        <p>
          "Welcome to NutriFiesta Fruit's and Vagetable! website"
          We are company dedicated to providing the fresh and tasties fruit's and vegetable to our customers.
        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
        <a href="Cart.php" class="d-inline-block mb-2 text-dark text-decoration-none">Cart</a><br>
        <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Product</a><br>
        <a href="About.php" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a><br>
        <a href="Contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a>
        <a href="Feedback.php" class="d-inline-block mb-2 text-dark text-decoration-none">Feedback</a>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow Us</h5>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-twitter me-1"></i>Twitter
        </a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook me-1"></i>Facebook
        </a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">
          <i class="bi bi-instagram me-1"></i>Instagram
        </a>
      </div>
    </div>
  </div>
  <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by NutriFiesta Grocery Web </h6>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });
    var swiper = new Swiper(".Swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "4",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breackpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
      }
    });
  </script>

  <script src="js/main.js"></script>
</body>

</html>