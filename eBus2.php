<?php 
session_start();
$fullNameValue = "";
$totalValue2 = "";
/* 
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;



/**
 * Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    <body>
    <style>
    body{
        background-image:  url("https://tbncdn.freelogodesign.org/f36ad545-0e07-4155-8c9f-6f05022e92bd.png?1551356824294");
    background-repeat: no-repeat;
background-size: 1300px 1100px
    }
    </style>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                    <h1>Personal Details</h1>
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value=""  /></td>
                        </tr>
                        <tr>
    
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
    
        <center>
              
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
        </center >
        </div>
        </form>
    </body>
</html>



