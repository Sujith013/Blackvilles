<?php 


if(isset($_POST["submit"]))
{
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$phoneno=$_POST["phoneno"];
$carname=$_POST["app_car"];
$service=$_POST["service_type"];
$appdate=$_POST["appdate"];
$timeslot=$_POST["timeslot"];
$comments=$_POST["comments"];
}

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="BlackVilles";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname,"3307");

 if ($conn->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$insert="INSERT INTO appointment_form(first_name,last_name,phone_no,email,Car_name,Service_type,service_date,time_slot,Comments) VALUES('$firstname','$lastname','$phoneno','$email','$carname','$service','$appdate','$timeslot','$comments')";
$runs=mysqli_query($conn,$insert);

if($runs)
{
    header("Location:http://localhost:7882/DBMS-project/main page.php");
}
?>
