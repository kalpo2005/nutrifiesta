<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriFiesta-Cart</title>
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
<body  class="w-100"  >
    
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

                            <div>
                              <?php
                                  $count=0;
                                  if(isset($_SESSION['cart']))
                                  {
                                    $count=count($_SESSION['cart']);
                                  }
                              ?>
                                  <a href="mycart.php" class="btn btn-outline-success">My Cart(<?php echo $count; ?>)</a>
                            </div>


                           
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
        
        <div class="my-2 px-4" >
              <h2 class="fw-bold h-font text-center">Our Cart</h2>
              <div class="h-line bg-dark"></div>
              
        </div>

        
        <!-- Main cart -->
        
          <div class="container">
            <div class="row">
              <div class="col-lg-3">

                 <form action="managecart.php" method="post">
                  <div class="card">
                    <img src="images/fruit's/banana.jpg" class="card-img-top">
                           <div class="card-body text-center">
                          <h5 class="card-title">Fresh Banana</h5>
                           <p class="card-text">Price: ₹60 (12 Pcs)</p>
                          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Fresh Banana"> 
                            <input type="hidden" name="Price" value="60"> 
                          </div>
                   </div>
                 </form>

              </div>

              <div class="col-lg-3">

                      <form action="managecart.php"  method="post">
                          <div class="card">
                                <img src="images/fruit's/apple.jpg" class="card-img-top">
                                <div class="card-body text-center">
                                      <h5 class="card-title">Fresh Apple</h5>
                                      <p class="card-text">Price: ₹150 per kg</p>
                                      <button type="submit"  name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                                       <input type="hidden" name="Item_Name" value="Fresh apple"> 
                                       <input type="hidden" name="Price" value="150"> 
                                  </div>
                           </div>
                      </form>

              </div>


              <div class="col-lg-3">

                    <form action="managecart.php" method="post">
                      <div class="card">
                          <img src="images/fruit's/black grapes.jpg" class="card-img-top">
                          <div class="card-body text-center">
                            <h5 class="card-title">Fresh Black Grapes</h5>
                            <p class="card-text">Price: ₹140 per kg</p>
                            <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Fresh black grapes"> 
                            <input type="hidden" name="Price" value="140"> 
                          </div>
                      </div>
                    </form>

              </div>

             

              <div class="col-lg-3">

                        <form action="managecart.php"  method="post">
                            <div class="card">
                                    <img src="images/fruit's/strawberry.jpg" class="card-img-top">
                                     <div class="card-body text-center">
                                            <h5 class="card-title">Fresh strawberry</h5>
                                            <p class="card-text">Price: ₹100 per Kg</p>
                                            <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                                             <input type="hidden" name="Item_Name" value="Fresh strawberry"> 
                                             <input type="hidden" name="Price" value="100"> 
                                        </div>
                             </div>
                        </form>

              </div>

           
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-3">

                 <form action="managecart.php" method="post">
                  <div class="card">
                    <img src="images/vegetable/peas.jpg" class="card-img-top">
                           <div class="card-body text-center">
                          <h5 class="card-title">Fresh Peas</h5>
                           <p class="card-text">Price: ₹80 Per Kg</p>
                          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Fresh peas"> 
                            <input type="hidden" name="Price" value="80"> 
                          </div>
                   </div>
                 </form>

              </div>
              <div class="col-lg-3">

                 <form action="managecart.php" method="post">
                  <div class="card">
                    <img src="images/vegetable/carrot.jpg" class="card-img-top">
                           <div class="card-body text-center">
                          <h5 class="card-title">Fresh Carrot</h5>
                           <p class="card-text">Price: ₹60 Per Kg</p>
                          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Fresh carrot"> 
                            <input type="hidden" name="Price" value="60"> 
                          </div>
                   </div>
                 </form>

              </div>
              <div class="col-lg-3">

                 <form action="managecart.php" method="post">
                  <div class="card">
                    <img src="images/vegetable/ginger root.jpg" class="card-img-top">
                           <div class="card-body text-center">
                          <h5 class="card-title">Fresh Ginger Root</h5>
                           <p class="card-text">Price: ₹59 Per Kg</p>
                          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Fresh ginger root"> 
                            <input type="hidden" name="Price" value="59"> 
                          </div>
                   </div>
                 </form>

              </div>
              <div class="col-lg-3">

                 <form action="managecart.php" method="post">
                  <div class="card">
                    <img src="images/vegetable/bitter gourd.jpg" class="card-img-top">
                           <div class="card-body text-center">
                          <h5 class="card-title">Fresh bitter gourd</h5>
                           <p class="card-text">Price: ₹75 Per Kg</p>
                          <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Fresh bitter gourd"> 
                            <input type="hidden" name="Price" value="75"> 
                          </div>
                   </div>
                 </form>

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