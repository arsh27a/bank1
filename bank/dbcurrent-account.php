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
elseif(!isset($_REQUEST['business-name']))
{
    echo "error in Business Name<br>";
}
elseif(!isset($_REQUEST['owner-name']))
{
    echo "error in Owner Name<br>";
}
elseif(!isset($_REQUEST['bank']))
{
    echo "error in bank<br>";
}
elseif(!isset($_REQUEST['TAN-no']))
{
    echo "error in TAN<br>";
}
elseif(!isset($_REQUEST['business-address']))
{
    echo "error in business address<br>";
}

else{
//fetching from form
$customerid=mysqli_real_escape_string($conn,$_REQUEST['customer-id']);
$businessName=mysqli_real_escape_string($conn,$_REQUEST['business-name']);
$ownerName=mysqli_real_escape_string($conn,$_REQUEST['owner-name']);
$bank=mysqli_real_escape_string($conn,$_REQUEST['bank']);
$TAN=mysqli_real_escape_string($conn,$_REQUEST['TAN-no']);
$businessAddress=mysqli_real_escape_string($conn,$_REQUEST['business-address']);

//inserting into database
mysqli_query($conn,"INSERT INTO currentaccount(CustomerID,BusinessName,OwnerName,Bank,TAN,BusinessAddress) values('$customerid','$businessName','$ownerName','$bank','$TAN','$businessAddress')");
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