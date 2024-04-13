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
    echo "error in Customer ID<br>";
}
elseif(!isset($_REQUEST['bank']))
{
    echo "error in bank<br>";
}
elseif(!isset($_REQUEST['plot-area']))
{
    echo "error in plot area<br>";
}
elseif(!isset($_REQUEST['demanded-amount']))
{
    echo "error in demand amount<br>";
}
elseif(!isset($_REQUEST['tenure']))
{
    echo "error in tenure<br>";
}
elseif(!isset($_REQUEST['loan-amount']))
{
    echo "error in loan amount<br>";
}
else{

//fetching from form
$customerid=mysqli_real_escape_string($conn,$_REQUEST['customer-id']);
$bank=mysqli_real_escape_string($conn,$_REQUEST['bank']);
$plotArea=mysqli_real_escape_string($conn,$_REQUEST['plot-area']);
$demandAmt=mysqli_real_escape_string($conn,$_REQUEST['demanded-amount']);
$tenure=mysqli_real_escape_string($conn,$_REQUEST['tenure']);
$loanAmt=mysqli_real_escape_string($conn,$_REQUEST['loan-amount']);
mysqli_query($conn,"INSERT INTO homeloan(CustomerID,Bank,PlotArea,DemandAmt,Tenure,LoanAmt) values('$customerid','$bank','$plotArea','$demandAmt','$tenure','$loanAmt')");


//inserting into database
if(mysqli_error($conn))
{
    echo "Enter valid data";
}
else
{
    echo "Submission Completed!";
}
}

//closing connection
mysqli_close($conn);

?>