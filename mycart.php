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
                           
                      </div>
            </div>
            </nav>



 
            
         <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center border rounded bg-light my-5">
                    <h1>MY CART</h1> 
                </div>

                <div class="col-lg-9">
                            <table class="table">
                            <thead class="text-center">
                         <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                          </tr>
                            </thead>
                             <tbody class="text-center">
                                 <?php 
                                       
                                          if(isset($_SESSION['cart']))
                                         {
                                                foreach($_SESSION['cart'] as $key=> $value)
                                                {
                                                        $sr=$key+1;
                                                        echo"
                                                        <tr>
                                                        <td>$sr</td>
                                                        <td>$value[Item_Name]</td>
                                                        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                                        <td>
                                                        <form action='managecart.php' method='POST'>
                                                        <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]'min='1' max='10'>
                                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                        </form>
                                                        </td>
                                                        <td class='itotal'></td>
                                                        <td>
                                                            <form action='managecart.php' method='POST'>
                                                            <button name='Remove_Item'class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                            </form>
                                                        </td>
                                                         ";
                                               }
                                        }                                
                                  ?>
                       
                        
                        
                              </tbody>
                             </table>
                </div>

                <div class="col-lg-3">
                  <div class="border bg-light rounded p-3">
                         <h4>Grand Total:</h4>
                         <h5 class="text-center" id="gtotal"></h5>
                         <br>
                         <?php
                              if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) 
                              {
                         ?>
                       <form action="purchase.php" method="POST">
                         <div class="mb-3">
                              <label >Full Name</label>
                              <input type="text" name="Full_Name" class="form-control" required>
                          </div>
                          <div class="mb-3">
                              <label >Phone Number</label>
                              <input type="number" name="Phone_Number" class="form-control" required>
                          </div>
                          <div class="mb-3">
                              <label >Address</label>
                              <input type="text" name="Address" class="form-control" required>
                          </div>
                            <br>
                            <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Pay_Mode" value="COD"id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                                Cash On Delivery
                                        </label>
                                        
                            </div>
                            <br>
                            <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Pay_Mode" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                                Online Payment
                                        </label>
                                        
                            </div>
                            <br>
                            <button class="btn  btn-outline-success w-100 btn-block" name="purchase">Purchase</button>
                       </form>
                       <?php 
                              }
                       ?>
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
                            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Cart</a><br>
                            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Product</a><br>
                            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a><br>
                            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a>
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
  <script>

    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');


    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

            gt=gt+(iprice[i].value)*(iquantity[i].value);

            /*   price 650 quantity 1  gt=0+(650*1)
            
                price 750 quantity 2  gt=650+(750*2) === gt=2150
            
                price 850 quantity 1  gt=2150+(850*1) === gt=3000

            */
        }
        gtotal.innerText=gt;
      
    }
    subTotal();


  </script>

    
</body>
</html>