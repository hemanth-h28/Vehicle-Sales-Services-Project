<?php include("header.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>cart</title>
    <style>
             body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Cart header */
        .cart-header {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Cart table */
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .cart-table th,
        .cart-table td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            text-align: justify;
        }

        .cart-table th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        /* Cart items */
        .cart-item-row {
            background-color: #fff;
            transition: background-color 0.3s;
        }

        .cart-item-row:hover {
            background-color: #f2f2f2;
        }

        /* Grand Total */
        .grand-total {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: right;
            border-radius: 5px;
        }

        /* Payment form */
        .payment-form {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .payment-form label {
            font-weight: bold;
        }

        .payment-form input[type="text"],
        .payment-form input[type="tel"],
        .payment-form input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .payment-form .form-check {
            margin-top: 10px;
        }

        .payment-form .btn-primary {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .payment-form .btn-primary:hover {
            background-color: #258cd1;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container"><h1 >MY CART</h2>
        <div class="row">
        <div class="col.lg-12 text-center  my-5">
            
</div>
 <div class="col-lg-7">
      <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Sl.No</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th> 
      <th scope="col"></th>
      <th><a href='http://localhost/myproject/viewproduct.php' class='btn btn-info'>Add More</button></a></th>
   </tr>
  </thead>
  <tbody class="text-center">
    <?php 
    $total=0;
    if(isset($_SESSION['cart']))
    {
     foreach($_SESSION['cart'] as $key => $value)
     { $key=$key+1;
       
   echo"
         <tr>
           <td>$key</td>
            <td>$value[Item_name]</td>
             <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
      
                  <td>
                  <form action='manage.php' method='POST'>
                  <input class='text-center iquantity' name='mod_quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' >
                  <input type='hidden' name='Item_name' value='$value[Item_name]'>
                  </form>
                  </td>
                  <td class='itotal'></td>
                  <td>
                  <form action='manage.php' method='POST'>
                   <button name='remove_item' class='btn btn-sm btn-outline-danger'>Remove</button>
                   
                   <input type='hidden' name='Item_name' value='$value[Item_name]'>
            </form>
                   </td>
                   <td></td>
         <tr>
                  ";
     }  
    }
    ?>
   </tbody>
    </table>
    <div class="col-lg-10"  >
    <div class="border bg-light rounded p-5" backgroundcolor="blue">
    <h2>GRAND TOTAL: <span  id="gtotal"></span></h2>
    <h2></h2>
    <?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
    {
      ?>
<form action="purchase.php" method="POST">
     <table>
        <tr>
    <td><label  class="form-label">Full Name :</label></td>
    <td><input type="text" name="fullname" class="form-control" required ></td>
    <tr>
    <td><label  class="form-label">Phone Number :</label></td>
    <td><input type="tel" name="phonenumber"  maxlength="10" class="form-control" required ></td>
    </tr>
   <tr>
   <td><label  class="form-label">EMail Id :</label></td>
   <td><input type="email" name="mail" placeholder="example@gmail.com" class="form-control" required ></td>
   </tr>
   <tr>
   <td><label  class="form-label">Address :</label></td>
   <td><input type="text" name="address" class="form-control" required ></td>
   </tr>
   <tr>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexCheckDefault">cash on Delivary</td>
   <td><label class="form-check-label" for="flexCheckDefault">
    
    </label></td></tr>
    <tr>
    <td><input type="submit" class="btn btn-primary" name="purchase" value="Make Payment"></table></td></tr>
</form>
 <?php
 }
 ?>
 </div>
</div>
          </div>
   </div>
</tr>
<script>
     var gt=0;
     var iprice=document.getElementsByClassName('iprice');
     var iquantity=document.getElementsByClassName('iquantity');
     var itotal=document.getElementsByClassName('itotal');
     var gtotal=document.getElementById('gtotal');
     function sumTotal()
     {
       gt=0;
       
      for(i=0;i<iprice.length;i++)
      {
         itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
         gt=gt+(iprice[i].value)*(iquantity[i].value);
      }
      gtotal.innerText=gt;
    
     }

     sumTotal();
     </script>

 </body>
</html>