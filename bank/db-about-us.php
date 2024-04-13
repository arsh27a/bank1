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
    echo "Error in Customer ID<br>";
}
elseif(!isset($_REQUEST['bank']))
{
    echo "error in bank<br>";
}

else{
    
    //fetching from form
    $customerid=mysqli_real_escape_string($conn,$_REQUEST['customer-id']);
    $bank=mysqli_real_escape_string($conn,$_REQUEST['bank']);

    //inserting into database
    mysqli_query($conn,"INSERT INTO savingsaccount(CustomerID,Bank) values('$customerid','$bank')");

    if(mysqli_error($conn))
    {
        echo "Enter valid data";
    }
    else
    {
        echo "Application process completed";
    }
}

//closing connection
mysqli_close($conn);


