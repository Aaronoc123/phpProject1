<!DOCTYPE html>
<html>
    <head>
    
 <style>
    body{
        background-image:  url("ebus22.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
    }
    
    .header{
        background-color:blue;
        padding: 30px;
        text-align: center;
        color:white;
     
            }
            
    .receipt{
         border-style:double;
         font-size:20px;
         background-color:gray;
         padding:25px;
            }
    </style>
    </head>
<body>
         
     <div class="header">
            <h1>Prestigious Co.</h1>
        </div>
        
    
    <br>
    <br>
    <center><h2>Thank you for purchasing!!</h2></center>
        
    <br>
    <center><h3><u>Order Summary!</u></h3></center>
    <br>
  
    
    <div class="receipt">
    <center><?php
    session_start();
    $totalValue2 = $_POST['txtTotal'];
    $fullNameValue = $_POST['txtName'];
    $address = $_POST['txtAddress'];
$phoneNumber = $_POST['txtphoneNumber'];

    echo "The name is: ".$fullNameValue.".";
    echo "<br></br>";
    echo "Address: ".$address.".";
    echo "<br></br>";
    echo "Phone Number: ".$phoneNumber.".";
    echo "<br></br>";
    echo "The total amount is : €".$totalValue2.".";
    ?></center></div>

</body>
<html>
    
    