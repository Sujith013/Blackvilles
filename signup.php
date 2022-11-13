
<?php

if(isset($_POST["submit"]))
{
$username=$_POST["username"];
$password=$_POST["pass"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$addressl1=$_POST["addressl1"];
$addressl2=$_POST["addressl2"];
$city=$_POST["city"];
$pincode=$_POST["pincode"];
$DOB=$_POST["Date"];
}

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="BlackVilles";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname,"3307");

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$check="SELECT * from user_details where username='".$username."' OR email='".$email."' OR phone='".$phone."'  limit 1";
$result=mysqli_query($conn,$check);
if(mysqli_num_rows($result)!=1)
{
$insert="INSERT INTO user_details(Username,Password,Email,Phone,Addressl1,Addressl2,City,Pincode,DOB) VALUES('$username','$password','$email','$phone','$addressl1','$addressl2','$city','$pincode','$DOB')";
$run=mysqli_query($conn,$insert);

if($run)
{
    if($insert)
    {
        header("Location: http://localhost:7882/DBMS-project/login.html");
    }
}
}
?>

<script>
    alert('Username, Email or Phone no already taken, Please enter a different one');
    window.location.href = "http://localhost:7882/DBMS-project/SignUp.html" ;
</script>";

    


