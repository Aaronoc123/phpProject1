

<!--Creating a session variable and assigning it to txtTotal-->

<?php
session_start(); 
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<style>
    header{
        background-image:url("company.jpg")
    }
    body {
    background-image: url("consult.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}
    </style>
    <div class="header">
            
        <h1><u><center>Prestigious Co.</center></u></h1>
        <hr />
    </div>
        <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
                <center>
                    <table cellspacing="10">
            <tr>
                <td><h3><b>Select a Consulting Service</b></h3></td>
            </tr>
            <tr>
                            <td>Blockchain @ £1500</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1500" /></td>
                        </tr>                
            <tr>
                            <td>Autonomous Things @ £2000</td>
                            <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                        </tr>                
            <tr>
                            <td>Immersive Experience @ £2750</td>
                            <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="2750" /></td>
                        </tr>    
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
        <tr>
                    <td><b></b></td>
                    <td><h3><b>Amount</b></h3></td>
        </tr>
        <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
        </tr>
        <tr>
                    <td>-Discount @30%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
        </tr>
                <tr>
                    <td>+VAT @20%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
        </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
            </table>
        </center>
    
    <br />
        <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Checkout"/>
                   <input  type="button" value="Previous" onclick="history.back(-1)" />
        </center>
    </form>
</div>
        
       <script type="text/javascript">
        function calcSub() {
            //Assigning variables to the values
            var subAmount = parseFloat(document.getElementById('txtSubTot').value);
            var Blockchain = parseFloat(document.getElementById('Blockchain').value);
            var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
            var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
            
//            If radio buttons are clicked, values are assigned
            if (document.getElementById('Blockchain').checked) {
                document.intCalc.txtSubTot.value = Blockchain;
                subAmount = Blockchain;
                calculation(subAmount);
                
            } 
        else if (document.getElementById('AutonomousThings').checked) {
                document.intCalc.txtSubTot.value = AutonomousThings;
                subAmount = AutonomousThings;
                 calculation(subAmount);
               
            } 
        else if (document.getElementById('ImmersiveExperience').checked) {
                document.intCalc.txtSubTot.value = ImmersiveExperience;
                subAmount = ImmersiveExperience;
                 calculation(subAmount);
            } 
        }    
        
         //Function for calculating the values
        function calculation(parmSTotal){
           var subTotal = parseFloat(parmSTotal);
           var discCalc = parseFloat(subTotal * .30);
           var vatCalc = parseFloat(subTotal * .20);
           var total = parseFloat(subTotal - discCalc + vatCalc);
           
           //Inserting them into the correct fields
           document.intCalc.txtDisc.value = discCalc;  
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
          
        }
//      

    </script>
    
    <script>
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
    document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
    document.getElementById("txtTotal").value="";
}
    </script>
</body>
</html>