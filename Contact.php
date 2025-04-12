<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriFiesta-Contact</title>
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
<body  class="w-100" style="background:url(images/bg-img/11111.jpg)" >
    
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
             <div class="container-fluid">
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
              <h2 class="fw-bold h-font text-center">Contact Us</h2>
              <div class="h-line bg-dark"></div>
              <p class="text-center mt-3">
              "Welcome to NutriFiesta Contact page."We are company dedicated to providing the fresh and tasties fruit's and vegetable to our customers.
              Our team consists of experienced and enthusiastic individuals who are committed to providing the best possible experience for our customers.
              </p>
        </div>

        <!-- Maint Contact -->

        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
              <div class="bg-white rounded shadow p-4">
              <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31047.69556995658!2d72.11686662361357!3d21.75534370046627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a7323e981b5%3A0xa5182291c8c086b3!2sSardar%20Nagar%2C%20Bhavnagar%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1741516825914!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5>Address</h5>
                <a href="https://maps.app.goo.gl/HS1tKAkbmdDc7H7f8" target="_blank" class="d-inline-block text-decoration-none text-dark mb-4">
                   <i class="bi bi-geo-alt-fill"></i> NutriFiesta,Sardarnagar,Bhavnagar
                </a>
                <h5 class="mt-3">Call Us</h5>
                  <a href="tel: +919016835668 " class="d-inline-block mb-3 text-decoration-none text-dark">
                       <i class="bi bi-telephone-fill"></i> +919016835668
                  </a>
                  <br>
                  <a href="tel: +919016835668 " class="d-inline-block text-decoration-none text-dark">
                       <i class="bi bi-telephone-fill"></i> +919016835668
                  </a>
                  <h5 class="mt-4">Email</h5>
                  <a href="mailto :nutrionline@gmail.com" class="d-inline-block text-decoration-none text-dark">
                  <i class="bi bi-envelope-fill"></i> NutriFiesta1010@gmail.com
                  </a>
                  <h5 class="mt-3">Follow Us</h5>
                  <a href="#" class="d-inline-block text-dark fs-5 me-2">
                       <i class="bi bi-twitter me-1"></i>
                  </a>
                  <a href="#" class="d-inline-block text-dark fs-5 me-2">
                     <i class="bi bi-facebook me-1"></i>
                   </a>
                  <a href="#" class="d-inline-block text-dark fs-5 ">
                    <i class="bi bi-instagram me-1"></i>
                  </a>
                  <br>
                  <a href="tel: +919016835668 " class="d-inline-block text-decoration-none text-dark">
                  </a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
              <div class="bg-white rounded shadow p-4">
                <form>
                  <h5>Send a Message</h5>
                  <div class="mt-3">
                          <label class="form-label" style="font: weight 500px;">Name</label>
                           <input type="text" class="form-control shadow-none" >
                    </div>
                    <div class="mt-3">
                          <label class="form-label" style="font: weight 500px;">Email</label>
                           <input type="email" class="form-control shadow-none" >
                    </div>
                    <div class="mt-3">
                          <label class="form-label" style="font: weight 500px;">Subject</label>
                           <input type="text" class="form-control shadow-none" >
                    </div>
                    <div class="mt-3">
                          <label class="form-label" style="font: weight 500px;">Message</label>
                          <textarea class="form-control shadow-none" rows="5" style="resize: none"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark  mt-3">Send</button>
                </form>
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

    
</body>
</html>