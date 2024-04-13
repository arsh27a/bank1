<?php
//connection estabishment
$conn=mysqli_connect("localhost","root","","bank");
if(mysqli_connect_errno())
{
	echo "Failed to connect:", mysqli_connect_error();
}
//checking for existence of form data
if(!isset($_REQUEST['name']))
{
    echo "error in name<br>";
}
elseif(!isset($_REQUEST['mobile-no']))
{
    echo "error in mobile<br>";
}
elseif(!isset($_REQUEST['email']))
{
    echo "error in email<br>";
}
elseif(!isset($_REQUEST['pincode']))
{
    echo "error in pincode<br>";
}
elseif(!isset($_REQUEST['text-box']))
{
    echo "error in remarks<br>";
}
else{
//fetching from form
$name=mysqli_real_escape_string($conn,$_REQUEST['name']);
$mobile=mysqli_real_escape_string($conn,$_REQUEST['mobile-no']);
$email=mysqli_real_escape_string($conn,$_REQUEST['email']);
$remarks=mysqli_real_escape_string($conn,$_REQUEST['text-box']);
$pincode=mysqli_real_escape_string($conn,$_REQUEST['pincode']);


//inserting into database
mysqli_query($conn,"INSERT INTO customercare(Name,Mobile,Email,Pincode,Remarks) values('$name','$mobile','$email','$pincode','$reamrks')");
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