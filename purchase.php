<?php
session_start();

$con=mysqli_connect("localhost","root","","testing");

if(mysqli_connect_error())
{
    echo"<script>
    alert('cannot connect to database');
    window.location.href='mycart.php';
      </script>";
    exit();
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
        if(isset($_POST['purchase']))
        {
            $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_Number`, `Address`, `Pay_Mode`, `Pay_Mode1`) VALUES ('$_POST[Full_Name]','$_POST[Phone_Number]','$_POST[Address]','$_POST[Pay_Mode]','$_POST[Pay_Mode]')";
            if(mysqli_query($con,$query1))
            {

                 $Order_Id=mysqli_insert_id($con);
                 $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
                 $stmt=mysqli_prepare($con,$query2);
                 if($stmt)
                 {
                      mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                      foreach($_SESSION['cart'] as $key => $values)
                      {
                        $Item_Name=$values['Item_Name'];
                        $Price=$values['Price'];
                        $Quantity=$values['Quantity'];
                        mysqli_stmt_execute($stmt);
                      }
                      unset($_SESSION['cart']);
                      echo"<script>
                      alert('Order Placed');
                      window.location.href='Cart.php';
                      </script>";

                 }
                 else
                 {
                      
                       echo"<script>
                      alert('SQL Query prepare error');
                      window.location.href='mycart.php';
                      </script>";  
                 }
            }
            else
            {
                echo"<script>
                alert('SQL Error');
                window.location.href='mycart.php';
                  </script>";  
            }
        }
}

?>