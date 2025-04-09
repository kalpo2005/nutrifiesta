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
<body  class="w-100" style="background:url('images/bg-img/11111-2.jpg') " >
    
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
                           
                      </div>
            </div>
            </nav>



           


           
      
            
         

        <!-- Main Feedback -->

        <div class="container">
          <div class="row bg-light shadow my-5 px-2" style="background:url('images/bg-img/11111.jpg') ">
           
          <form class="row g-3 needs-validation" novalidate>
          <div>
              <h2 class="fw-bold h-font text-center">
              <label for="validationCustom01" class="form-label">Feedback</label>
            </h2>
              <div class="h-line bg-dark"></div>
              
        </div>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label"><h5>Name</h5></label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
 
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label"><h5>Email</h5></label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please enter your email id.
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustom01" class="form-label"><h5>Product Quality<h5></label>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    <h6> Good</h6>
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
  <h6>Not Good</h6>
  </label>
</div>


   
  </div>
  
  
  
  <div class="col-12">
  <button type="submit" name="Add_To_Cart" class="btn btn-info">Submit</button>
  </div>
  <br>
</form>
            
          </div>
        </div>

      

   

     
     

    

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