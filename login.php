<?php

if(isset($_POST["submit"]))
{
$username=$_POST["username"];
$password=$_POST["pass"];
}

$host="localhost";
$dbusername="root";
$dbpassword="Jithtn@0012";
$dbname="BlackVilles";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname,"3307");

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$check="SELECT * from user_details where username='".$username."' AND password='".$password."' limit 1";
$result=mysqli_query($conn,$check);
if(mysqli_num_rows($result)==1)
{
    header("Location:http://localhost:7882/DBMS-project/main page.php");

}

?>

<script>
    alert('Wrong Username or Password!!...Please check the credentials entered');
    window.location.href = "http://localhost:7882/DBMS-project/login.html" ;
</script>";