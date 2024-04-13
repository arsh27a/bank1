<?php
//connection estabishment
$conn=mysqli_connect("localhost","root","","bank");
if(mysqli_connect_errno())
{
	echo "Failed to connect:", mysqli_connect_error();
}
//checking for existence of form data
if(!isset($_REQUEST['customer-id']))
{
    echo "error in customer ID<br>";
}
elseif(!isset($_REQUEST['bank']))
{
    echo "error in bank<br>";
}
elseif(!isset($_REQUEST['amount']))
{
    echo "error in amount<br>";
}
elseif(!isset($_REQUEST['tenure']))
{
    echo "error in tenure<br>";
}
elseif(!isset($_REQUEST['interestRate']))
{
    echo "error in interest rate<br>";
}
elseif(!isset($_REQUEST['maturedAmount']))
{
    echo "error in marured amount<br>";
}
else{

//fetching from form
$customerid=mysqli_real_escape_string($conn,$_REQUEST['customer-id']);
$bank=mysqli_real_escape_string($conn,$_REQUEST['bank']);
$amount=mysqli_real_escape_string($conn,$_REQUEST['amount']);
$tenure=mysqli_real_escape_string($conn,$_REQUEST['tenure']);
$interestRate=mysqli_real_escape_string($conn,$_REQUEST['interestRate']);
$maturedAmount=mysqli_real_escape_string($conn,$_REQUEST['maturedAmount']);

//inserting into database
mysqli_query($conn,"INSERT INTO fixeddeposit(CustomerID,Bank,Amount,Tenure,InterestRate,MaturedAmt)  values('$customerid','$bank','$amount','$tenure','$interestRate','$maturedAmount')");
if(mysqli_error($conn))                      
{                                            
    echo "Enter valid data";                 
}                         
else{
    echo "Submission Done!";
}                   
}                                    
//closing connection
mysqli_close($conn);
?>