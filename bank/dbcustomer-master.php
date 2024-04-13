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
    echo "error in customer id<br>";
}
elseif(!isset($_REQUEST['name']))
{
    echo "error in name<br>";
}
elseif(!isset($_REQUEST['father-name']))
{
    echo "error in father name<br>";
}
elseif(!isset($_REQUEST['gender']))
{
    echo "error in gender<br>";
}
elseif(!isset($_REQUEST['PAN-no']))
{
    echo "error in PAN<br>";
}
elseif(!isset($_REQUEST['mobile-no']))
{
    echo "error in mobile no<br>";
}
elseif(!isset($_REQUEST['aadhar-no']))
{
    echo "error in aadhar<br>";
}
else{
//fetching from form
$customerid=mysqli_real_escape_string($conn,$_REQUEST['customer-id']);
$name=mysqli_real_escape_string($conn,$_REQUEST['name']);
$mobile=mysqli_real_escape_string($conn,$_REQUEST['mobile-no']);
$fathername=mysqli_real_escape_string($conn,$_REQUEST['father-name']);
$gender=mysqli_real_escape_string($conn,$_REQUEST['gender']);
$pan=mysqli_real_escape_string($conn,$_REQUEST['PAN-no']);
$aadhar=mysqli_real_escape_string($conn,$_REQUEST['aadhar-no']);


//inserting into database
mysqli_query($conn,"INSERT INTO customermaster values('$customerid','$name','$fathername','$gender','$pan','$mobile','$aadhar')");
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