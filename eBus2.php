<?php 
session_start();
$fullNameValue = "";
$totalValue2 = "";
$address = "";
$phoneNumber = "";
/* 
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtAddress'] = $address;
$_SESSION['txtphoneNumber'] = $phoneNumber;

/**
 * Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    
    
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
    
    
    </style>
    </head>  
           
    <body>
    
    <div class="header">
            <h1>Prestigious Co.</h1>
        </div>
        
         
    
    <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                    
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                         <tr>
                            <td>Address</td>
                            <td><input type="text" id="txtAddress" name="txtAddress" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td><input type="text" id="txtNum" name="txtphoneNumber" value="" /></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" value=""  /></td>
                        </tr>
                        <tr>
    
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
    
        <center>
              
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                <input  type="button" value="Previous" onclick="history.back(-1)" />
        </center >
        </div>
        </form>
    </body>
</html>



