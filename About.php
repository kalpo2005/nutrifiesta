<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriFiesta-About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<style>
  .box{
    border-top-color: var(--teal)!important;
  }
</style>
<style>
   .h-line{
      width: 150px;
      margin:0 auto;
      height:1.7px;
    }

  </style>
    
</head>
<body class="bg-light" style="background:url('images/bg-img/11111.jpg') ">
    
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
             <div class="container-fluid" >
                 <a class="navbar-brand me-5 fw-bold fs-3 " href="index.php">NutriFiesta</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active me-2" aria-current="page" href="Cart.php">cart</a>
                            </li>
                            
                             
                             <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             Product
                                     </a>
                                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><hr class="dropdown-divider"></li>
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
                                 
                                 <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                                                Login
                                </button>
                                <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
                                                Register
                                </button>
                             </form>
                      </div>
            </div>
            </nav>



            <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <form >
                        <div class="modal-header" >
                                <h5 class="modal-title d-flex align-item-center" >
                                    <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                                </h5>
                                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background:url('images/bg-img/111.jpg')">
                                <div class="mb-3">
                                        <label class="form-label">User Id</label>
                                        <input type="number" class="form-control shadow-none" >
                                </div>
                                <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control shadow-none" >
                                </div>
                                <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control shadow-none" >
                                </div>
                                <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="Password" class="form-control shadow-none" >
                                </div>
                                <div class="d-flex align-item-center justify-content-between">
                                    <button type="submit" class="btn btn-dark shadow-none">
                                        Login
                                    </button>
                                    <a href="javascript: void(0)" class="text-secondary text-decoration-none"> Forget Password?</a>
                                </div>

                        </div>
                        
                        </form>
                        </div>
                     </div>
            </div>


            <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <form >
                        <div class="modal-header">
                                <h5 class="modal-title d-flex align-item-center" >
                                <i class="bi bi-person-lines-fill"></i>User Registration
                                </h5>
                                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body shadow" style="background:url('images/bg-img/111.jpg')">
                        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your details must match with your Id(Adhar card,passport,etc)
                            that will be required  during check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">User Id</label>
                                    <input type="number" class="form-control shadow-none" >
                                </div>
                                <div class="col-md-6  ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none" >
                                </div>
                                <div class="col-md-13 ps-0 mb-3">
                                    <label class="form-label">Address</label>
                                     <textarea class="form-control shadow-none" rows="1"></textarea>
                                </div>
                                <div class="col-md-6  ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control shadow-none" >
                                </div><div class="col-md-6  ps-0 mb-3">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" class="form-control shadow-none" >
                                </div><div class="col-md-6  ps-0 mb-3">
                                    <label class="form-label">contact</label>
                                    <input type="number" class="form-control shadow-none" >
                                </div><div class="col-md-6  ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none" >
                                </div>
                            </div>
                        </div>

                       <!--         <div class="mb-3">
                                        <label class="form-label">User Id</label>
                                        <input type="userid" class="form-control shadow-none" >
                                </div>
                                <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="name" class="form-control shadow-none" >
                                </div>
                                <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control shadow-none" >
                                </div>
                                <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="Password" class="form-control shadow-none" >
                                </div>
                                <div class="d-flex align-item-center justify-content-between">
                                    <button type="submit" class="btn btn-dark shadow-none">
                                        Login
                                    </button>
                                    <a href="javascript: void(0)" class="text-secondary text-decoration-none"> Forget Password?</a>
                                </div> -->
                            <div class="text-center my-l">
                            <button type="submit" class="btn btn-dark shadow-none">
                                        Register
                                    </button>
                            </div>

                        </div>
                        
                        </form>
                        </div>
                     </div>
            </div>
        <!--- New---->
        
        <div class="my-5 px-4">
              <h2 class="fw-bold h-font text-center">About Us</h2>
              <div class="h-line bg-dark"></div>
              <p class="text-center mt-3">
              "Welcome to NutriFiesta About page."We are company dedicated to providing the fresh and tasties fruit's and vegetable to our customers.
              Our team consists of experienced and enthusiastic individuals who are committed to providing the best possible experience for our customers.
              </p>
        </div>

        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
              <h3 class="mb-3">Our Mission</h3>
              <p>
              We are a platform that prioritizes freshness and quality. Our goal is to provide you with the best fruits and vegetables, essential for your health and well-being.
              </p>
              <p>
              Our mission is to provide you with:

            - Fresh and high-quality fruits and vegetables
            - Fair prices for excellent 
            </p>
            <p>
            Our Vision
            Our vision is to create a future where people can easily access fresh and high-quality fruits and vegetables. We want to work with you to create a healthy and happy life.
             </p>
             <p>Our Team:
Our team consists of experienced and professional individuals who work tirelessly to provide you with the best products. We want to work with you to improve your health and well-being.
</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
              <img src="images/bg-img/c1.jpg" class="w-70">
            </div>
          </div>
        </div>

        <div class="contener mt-5">
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4 mt-3">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                  <img src="images/bg-img/t1.png" class="w-75">
                  <h4 class="mt-3">100+PRODUCT</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4 mt-3">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                  <img src="images/bg-img/cust.png" class="w-50">
                  <h4 class="mt-3">115+CUSTOMER</h4>
                </div>
            </div><div class="col-lg-3 col-md-6 mb-4 px-4 mt-3">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                  <img src="images/bg-img/review1.jpg" class="w-75">
                  <h4 class="mt-3">120+REVIEWS</h4>
                </div>
            </div><div class="col-lg-3 col-md-6 mb-4 px-4 mt-3">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                  <img src="images/bg-img/staff.jpg" class="w-50">
                  <h4 class="mt-3">100+STAFFS</h4>
                </div>
            </div>
          </div>
        </div>

        <h3 class="my-5 fw-bold h-font text-center">Management Team</h3>
        <div class="container px-4">
            <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
             <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/bg-img/c2.jpg" class="w-100">
                  <h5 class="mt-2">Mrs. Monali Sharma</h5>
             </div>
             <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/bg-img/c005.jpg" class="w-100">
                  <h5 class="mt-2">Mrs. Jiya Soni </h5>
             </div>
             <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/bg-img/c4.jpg" class="w-100">
                  <h5 class="mt-2">Mrs. Falguni </h5>
             </div>
             <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/bg-img/c50.jpg" class="w-100">
                  <h5 class="mt-2">Mrs. Hina Gohil</h5>
             </div>
             <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/bg-img/c2.jpg" class="w-100">
                  <h5 class="mt-2">Mrs. Monali Sharma</h5>
             </div>
             <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/bg-img/c005.jpg" class="w-100">
                  <h5 class="mt-2">Mrs. Jiya Soni </h5>
             </div>
             <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/bg-img/c4.jpg" class="w-100">
                  <h5 class="mt-2">Mrs. Falguni </h5>
             </div>
             <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="images/bg-img/c50.jpg" class="w-100">
                  <h5 class="mt-2">Mrs. Hina Gohil</h5>
             </div>
            
             
        </div>
         <div class="swiper-pagination"></div>
        </div>
        </div>

     <!--- Testimonials -->

     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
     <div class="container">
     <div class="swiper Swiper-testimonials">
    <div class="swiper-wrapper">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-item-center mb-1">
            <img src="images/bg-img/rating.png" width="35px">
            <h6 class="m-0 ms-2">Rashmika Sharma</h6>
        </div>
        <p>
        "I'm always on the lookout for fresh and high-quality fruits and vegetables. 
        This website has provided me with everything I need." 

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
            <h6 class="m-0 ms-2">Monalisa Dave</h6>
        </div>
        <p>
        "I'm very happy with this website.
         They have a wide variety of fruits and vegetables, and their prices are very reasonable."
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
            <h6 class="m-0 ms-2">Priya Singh</h6>
        </div>
        <p>
         "I've never seen such high-quality fruits and vegetables before. 
         This website's quality is exceptional."
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
            <h6 class="m-0 ms-2">Bharti Sing</h6>
        </div>
        <p>
        "Good experience with this website.
         The fruits and vegetables are fresh, but sometimes there are issues with packaging. Overall,
         I'm satisfied with the service."
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
                            <a href="Contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
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

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breackpoints:{
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

    <script>
    
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
      breackpoints:{
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
</body>
</html>