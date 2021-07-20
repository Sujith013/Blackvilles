<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Do Hyeon' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel="stylesheet">
    <link href="main page.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>BlackVilles-main</title>

</head>

<script>

function honda()
{
    document.getElementById('BMW').style.display='none'; document.getElementById('Honda').style.display='inline';  document.getElementById('Chevrolet').style.display='none';
    document.getElementById('Toyota').style.display='none'; document.getElementById('Audi').style.display='none'; document.getElementById('Mercedes').style.display='none';
    document.getElementById('Volkswagen').style.display='none'; document.getElementById('Ford').style.display='none'; document.getElementById('Porsche').style.display='none';
}

function Mercedes()
{
    document.getElementById('BMW').style.display='none'; document.getElementById('Honda').style.display='none';  document.getElementById('Chevrolet').style.display='none';
    document.getElementById('Toyota').style.display='none'; document.getElementById('Audi').style.display='none'; document.getElementById('Mercedes').style.display='inline';
    document.getElementById('Volkswagen').style.display='none'; document.getElementById('Ford').style.display='none'; document.getElementById('Porsche').style.display='none';
}


function Porsche()
{
    document.getElementById('BMW').style.display='none'; document.getElementById('Honda').style.display='none';  document.getElementById('Chevrolet').style.display='none';
    document.getElementById('Toyota').style.display='none'; document.getElementById('Audi').style.display='none'; document.getElementById('Mercedes').style.display='none';
    document.getElementById('Volkswagen').style.display='none'; document.getElementById('Ford').style.display='none'; document.getElementById('Porsche').style.display='inline';
}

function Chevrolet()
{
    document.getElementById('BMW').style.display='none'; document.getElementById('Honda').style.display='none';  document.getElementById('Chevrolet').style.display='inline';
    document.getElementById('Toyota').style.display='none'; document.getElementById('Audi').style.display='none'; document.getElementById('Mercedes').style.display='none';
    document.getElementById('Volkswagen').style.display='none'; document.getElementById('Ford').style.display='none'; document.getElementById('Porsche').style.display='none';
}

function Audi()
{
    document.getElementById('BMW').style.display='none'; document.getElementById('Honda').style.display='none';  document.getElementById('Chevrolet').style.display='none';
    document.getElementById('Toyota').style.display='none'; document.getElementById('Audi').style.display='inline'; document.getElementById('Mercedes').style.display='none';
    document.getElementById('Volkswagen').style.display='none'; document.getElementById('Ford').style.display='none'; document.getElementById('Porsche').style.display='none';
}

function Ford()
{
    document.getElementById('BMW').style.display='none'; document.getElementById('Honda').style.display='none';  document.getElementById('Chevrolet').style.display='none';
    document.getElementById('Toyota').style.display='none'; document.getElementById('Audi').style.display='none'; document.getElementById('Mercedes').style.display='none';
    document.getElementById('Volkswagen').style.display='none'; document.getElementById('Ford').style.display='inline'; document.getElementById('Porsche').style.display='none';
}

function BMW()
{
    document.getElementById('BMW').style.display='inline'; document.getElementById('Honda').style.display='none';  document.getElementById('Chevrolet').style.display='none';
    document.getElementById('Toyota').style.display='none'; document.getElementById('Audi').style.display='none'; document.getElementById('Mercedes').style.display='none';
    document.getElementById('Volkswagen').style.display='none'; document.getElementById('Ford').style.display='none'; document.getElementById('Porsche').style.display='none';
}

function Toyota()
{
    document.getElementById('BMW').style.display='none'; document.getElementById('Honda').style.display='none';  document.getElementById('Chevrolet').style.display='none';
    document.getElementById('Toyota').style.display='inline'; document.getElementById('Audi').style.display='none'; document.getElementById('Mercedes').style.display='none';
    document.getElementById('Volkswagen').style.display='none'; document.getElementById('Ford').style.display='none'; document.getElementById('Porsche').style.display='none';
}

function Volkswagen()
{
    document.getElementById('BMW').style.display='none'; document.getElementById('Honda').style.display='none';  document.getElementById('Chevrolet').style.display='none';
    document.getElementById('Toyota').style.display='none'; document.getElementById('Audi').style.display='none'; document.getElementById('Mercedes').style.display='none';
    document.getElementById('Volkswagen').style.display='inline'; document.getElementById('Ford').style.display='none'; document.getElementById('Porsche').style.display='none';
}
</script>

<?php

$d=strtotime("+3 days");

$host="localhost";
$dbusername="root";
$dbpassword="Jithtn@0012";
$dbname="BlackVilles";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname,"3307");

 if ($conn->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$car27="SELECT * from car_desc where Car_id='Blv_027'"; $car9="SELECT * from car_desc where Car_id='Blv_009'"; $car18="SELECT * from car_desc where Car_id='Blv_018'";
$car1="SELECT * from car_desc where Car_id='Blv_001'"; $car10="SELECT * from car_desc where Car_id='Blv_010'"; $car19="SELECT * from car_desc where Car_id='Blv_019'";
$car2="SELECT * from car_desc where Car_id='Blv_002'"; $car11="SELECT * from car_desc where Car_id='Blv_011'"; $car20="SELECT * from car_desc where Car_id='Blv_020'";
$car3="SELECT * from car_desc where Car_id='Blv_003'"; $car12="SELECT * from car_desc where Car_id='Blv_012'"; $car21="SELECT * from car_desc where Car_id='Blv_021'";
$car4="SELECT * from car_desc where Car_id='Blv_004'"; $car13="SELECT * from car_desc where Car_id='Blv_013'"; $car22="SELECT * from car_desc where Car_id='Blv_022'";
$car5="SELECT * from car_desc where Car_id='Blv_005'"; $car14="SELECT * from car_desc where Car_id='Blv_014'"; $car23="SELECT * from car_desc where Car_id='Blv_023'";
$car6="SELECT * from car_desc where Car_id='Blv_006'"; $car15="SELECT * from car_desc where Car_id='Blv_015'"; $car24="SELECT * from car_desc where Car_id='Blv_024'";
$car7="SELECT * from car_desc where Car_id='Blv_007'"; $car16="SELECT * from car_desc where Car_id='Blv_016'"; $car25="SELECT * from car_desc where Car_id='Blv_025'";
$car8="SELECT * from car_desc where Car_id='Blv_008'"; $car17="SELECT * from car_desc where Car_id='Blv_017'"; $car26="SELECT * from car_desc where Car_id='Blv_026'";

$cars1="SELECT * from car_features where Car_id='Blv_001'"; $cars10="SELECT * from car_features where Car_id='Blv_010'"; $cars19="SELECT * from car_features where Car_id='Blv_019'";
$cars2="SELECT * from car_features where Car_id='Blv_002'"; $cars11="SELECT * from car_features where Car_id='Blv_011'"; $cars20="SELECT * from car_features where Car_id='Blv_020'";
$cars3="SELECT * from car_features where Car_id='Blv_003'"; $cars12="SELECT * from car_features where Car_id='Blv_012'"; $cars21="SELECT * from car_features where Car_id='Blv_021'";
$cars4="SELECT * from car_features where Car_id='Blv_004'"; $cars13="SELECT * from car_features where Car_id='Blv_013'"; $cars22="SELECT * from car_features where Car_id='Blv_022'";
$cars5="SELECT * from car_features where Car_id='Blv_005'"; $cars14="SELECT * from car_features where Car_id='Blv_014'"; $cars23="SELECT * from car_features where Car_id='Blv_023'";
$cars6="SELECT * from car_features where Car_id='Blv_006'"; $cars15="SELECT * from car_features where Car_id='Blv_015'"; $cars24="SELECT * from car_features where Car_id='Blv_024'";
$cars7="SELECT * from car_features where Car_id='Blv_007'"; $cars16="SELECT * from car_features where Car_id='Blv_016'"; $cars25="SELECT * from car_features where Car_id='Blv_025'";
$cars8="SELECT * from car_features where Car_id='Blv_008'"; $cars17="SELECT * from car_features where Car_id='Blv_017'"; $cars26="SELECT * from car_features where Car_id='Blv_026'";
$cars9="SELECT * from car_features where Car_id='Blv_009'"; $cars18="SELECT * from car_features where Car_id='Blv_018'"; $cars27="SELECT * from car_features where Car_id='Blv_027'";

?>

<body>
    
    <nav>
        <a href="#Topbar"><img src="logo1.png" alt="logohere" width="60px" height="80px" style="position: fixed;"></a>
    </nav>
    
    <nav class="topbar" id="Topbar" style="margin-left: 320px;">
        
        <a href="#Topbar">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#brands">BRANDS</a>
        <a href="#services">SERVICES</a>
        <a href="#contact">CONTACT</a>
    
    </nav>

    <div class="welcome">
        
    <pre style="font-family: 'Annie Use Your Telescope';">
Welcome
To The
Official page
Of
BlackVilles
        </pre>
    
    </div>

    <br><br><br><br><br><br><br>

    <div class="About" id="about">
        <h1 style="color: white;font-family:'Do Hyeon';margin-left: 70px;">About :</h1>
        <br><br>
        <p style="color: white;font-family:'Abel';text-align:center;font-size:40px;width:1250px;margin-left:130px"><b>Blackvilles</b> Showroom was established on the year <b>1997</b> by xxxx. You will be able to surf and buy cars
        from some of the top brands across the globe and will also be able to available to avail our <b>top quality services</b> by just making an appointment 
        through our website. You can choose the date, time and type of service according to your convenience and can also pass comments regarding any 
        specific problems and queries. You can look at our working hours and can surf through the general details, features and price of <b>27 Cars</b> from
        <b>9</b> different brands.</p>
    </div>
    <br><br><br>
    <div class="brands" id="brands" style="display: inline;">   
        <p style="color: white;font-family:'Fredoka One';margin-left: 660px;font-size: 60px;">Brands</p>
    
        <div class="line1" style="margin-left: 65px;">
       
            <a href="#Honda" onclick="honda()"><img src="honda.jpg" alt="Honda"></a>
            <a href="#Mercedes" onclick="Mercedes()"><img src="Mercedes.png" alt="Mercedes"></a>
            <a href="#Chevrolet" onclick="Chevrolet()"><img src="chevrolet.jpg" alt="Chevrolet"></a>
        </div>

        <br><br><br><br><br>
    
    <div class="line2" style="margin-left: 65px;">
        <a href="#Porsche" onclick="Porsche()"><img src="porsche.jpg" alt="Porsche"></a>
        <a href="#Audi" onclick="Audi()"><img src="Audi.jpg" alt="ferrari"></a>
        <a href="#Ford" onclick="Ford()"><img src="ford.jpg" alt="ford"></a>
    </div>

    <br><br><br><br><br>
    
    <div class="line3" style="margin-left: 65px;">
        <a href="#BMW" onclick="BMW()"><img src="bmw.jpg" alt="bmw"></a>
        <a href="#Toyota" onclick="Toyota()"><img src="toyota.jpg" alt="toyota"></a>
        <a href="#Volkswagen" onclick="Volkswagen()"><img src="volkswagon.jpg" alt="volkswagon"></a>
    </div>

    </div>

    <br><br><br><br><br><br><br><br><br>

    <div class="ibrand" id="Honda" style="display:none;">
        <h1>Honda</h1>
        <br>
        <h1 style="color: white;text-decoration: none;">Honda City</h1>
        <br><br>
        <img src="HondaCity1.jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="HondaCity2.jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">
        <br><br><br>
        
        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car1); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car1); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car1); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car1); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car1); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car1); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car1); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car1); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars1); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars1); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars1); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars1); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars1); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">Honda Amaze</h1>
        <br><br>
        <img src="HondaAmaze1.jpeg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="HondaAmaze2.jpeg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car2); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car2); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car2); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car2); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car2); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car2); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car2); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car2); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars2); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars2); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars2); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars2); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars2); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>
        <h1 style="color: white;text-decoration: none;">Honda Jazz</h1>
        <br><br>
        <img src="HondaJazz1.jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(120%);">
        <img src="HondaJazz2.jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(120%);">
    
        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car3); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car3); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car3); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car3); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car3); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car3); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car3); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car3); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars3); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars3); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars3); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars3); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars3); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br><br><br><br>
            
    </div>

    <div class="ibrand" id="Mercedes" style="display:none;">
        <h1>Mercedes</h1>
        <br>
        <h1 style="color: white;text-decoration: none;">Benz A Class</h1>
        <br><br>
        <img src="BenzAclass1.jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(120%);">
        <img src="BenzAclass2.jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(120%);">
        
        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car4); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car4); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car4); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car4); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car4); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car4); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car4); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car4); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars4); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars4); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars4); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars4); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars4); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>
        <h1 style="color: white;text-decoration: none;">Benz E class</h1>
        <br><br>
        <img src="BenzEclass1.jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="BenzEclass2.webp" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">
        
        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car5); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car5); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car5); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car5); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car5); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car5); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car5); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car5); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

       <br><br><br>

       <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars5); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars5); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars5); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars5); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars5); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>
        <h1 style="color: white;text-decoration: none;">Benz GLS</h1>
        <br><br>
        <img src="BenzGLS1.jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="BenzGLS2.png" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">
        <br><br><br>
        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car6); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car6); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car6); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car6); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car6); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car6); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car6); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car6); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars6); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars6); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars6); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars6); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars6); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br><br><br><br>

    </div>

    <div class="ibrand" id="Chevrolet" style="display:none;">
        <h1>Chevrolet</h1>
        <br>
        <h1 style="color: white;text-decoration: none;">Chevrolet Cruze</h1>
        <br><br>
        <img src="Cruze1.png" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Cruze2.jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car7); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car7); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car7); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car7); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car7); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car7); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car7); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car7); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars7); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars7); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars7); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars7); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars7); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>
        <h1 style="color: white;text-decoration: none;">Chevrolet Aveo</h1>
        <br><br>
        <img src="Aveo1.jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Aveo2.jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car8); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car8); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car8); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car8); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car8); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car8); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car8); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car8); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars8); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars8); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars8); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars8); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars8); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>
        <h1 style="color: white;text-decoration: none;">Chevrolet Captiva</h1>
        <br><br>
        <img src="Captiva1.jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Captiva2.jfif" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car9); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car9); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car9); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car9); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car9); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car9); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car9); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car9); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars9); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars9); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars9); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars9); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars9); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br><br><br><br>

    </div>

    <div class="ibrand" id="Porsche" style="display:none;">
        <h1>Porsche</h1>
        <br>
        <h1 style="color: white;text-decoration: none;">Porsche 911</h1>
        <br><br>
        <img src="Porsche911(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Porsche911(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car10); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car10); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car10); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car10); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car10); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car10); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car10); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car10); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars10); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars10); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars10); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars10); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars10); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">Porsche 718</h1>
        <br><br>
        <img src="Porche718(1).webp" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Porche718(2).webp" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car11); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car11); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car11); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car11); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car11); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car11); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car11); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car11); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars11); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars11); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars11); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars11); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars11); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">Porsche Panamerra</h1>
        <br><br>
        <img src="Panemerra1.jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);transform: scaleX(-1);">
        <img src="Panemerra2.jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car12); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car12); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car12); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car12); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car12); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car12); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car12); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car12); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars12); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars12); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars12); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars12); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars12); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br><br><br><br>

    </div>

    <div class="ibrand" id="Audi" style="display:none;">
        <h1>Audi</h1>
        <br>
        <h1 style="color: white;text-decoration: none;">Audi A7</h1>
        <br><br>
        <img src="Audi A7(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Audi A7(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car13); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car13); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car13); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car13); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car13); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car13); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car13); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car13); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars13); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars13); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars13); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars13); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars13); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">Audi Q5</h1>
        <br><br>
        <img src="Audi Q5(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Audi Q5(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car14); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car14); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car14); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car14); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car14); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car14); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car14); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car14); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars14); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars14); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars14); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars14); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars14); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">Audi A4</h1>
        <br><br>
        <img src="Audi A4(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Audi A4(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car15); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car15); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car15); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car15); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car15); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car15); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car15); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car15); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars15); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars15); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars15); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars15); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars15); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br><br><br><br>

    </div>

    <div class="ibrand" id="Ford" style="display:none;">
        <h1>Ford</h1>
        <br>
        <h1 style="color: white;text-decoration: none;">Ford Ecosport</h1>
        <br><br>
        <img src="Ford ecosport(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Ford ecosport(2).jpeg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car16); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car16); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car16); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car16); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car16); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car16); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car16); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car16); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars16); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars16); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars16); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars16); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars16); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>

        <br><br><br>
        <h1 style="color: white;text-decoration: none;">Ford Endeavor</h1>
        <br><br>
        <img src="Ford endeavor(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Ford endeavor(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car17); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car17); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car17); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car17); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car17); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car17); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car17); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car17); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars17); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars17); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars17); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars17); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars17); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">Ford Aspire</h1>
        <br><br>
        <img src="Ford aspire(1).webp" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Ford aspire(2).jpeg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car18); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car18); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car18); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car18); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car18); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car18); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car18); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car18); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars18); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars18); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars18); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars18); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars18); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br><br><br><br>

    </div>

    <div class="ibrand" id="BMW" style="display:none;">
        <h1>BMW</h1>
        <br>
        <h1 style="color: white;text-decoration: none;">BMW x1</h1>
        <br><br>
        <img src="BMW x1(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="BMW x1(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car19); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car19); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car19); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car19); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car19); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car19); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car19); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car19); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars19); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars19); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars19); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars19); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars19); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">BMW x3</h1>
        <br><br>
        <img src="BMW x3(2).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="BMW x3(1).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car20); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car20); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car20); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car20); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car20); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car20); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car20); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car20); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars20); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars20); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars20); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars20); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars20); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">BMW x7</h1>
        <br><br>
        <img src="BMW x7(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="BMW x7(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car21); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car21); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car21); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car21); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car21); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car21); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car21); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car21); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars21); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars21); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars21); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars21); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars21); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br><br><br><br>

    </div>

    <div class="ibrand" id="Toyota" style="display:none;">
        <h1>Toyota</h1>
        <br>
        <h1 style="color: white;text-decoration: none;">Toyota Yaris</h1>
        <br><br>
        <img src="Toyota Yaris(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Toyota Yaris(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car22); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car22); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car22); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car22); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car22); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car22); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car22); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car22); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars22); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars22); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars22); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars22); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars22); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">Toyota Camry</h1>
        <br><br>
        <img src="Toyota Camry(2).jpeg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);transform: scaleX(-1);">
        <img src="Toyota Camry(1).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);transform: scaleX(-1);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car23); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car23); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car23); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car23); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car23); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car23); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car23); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car23); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars23); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars23); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars23); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars23); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars23); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">Toyota Glanza</h1>
        <br><br>
        <img src="Toyota Glanza(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="Toyota Glanza(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car24); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car24); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car24); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car24); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car24); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car24); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car24); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car24); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars24); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars24); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars24); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars24); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars24); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <<br><br><br><br><br>

    </div>

    <div class="ibrand" id="Volkswagen" style="display:none;">
        <h1>Volkswagen</h1>
        <br>
        <h1 style="color: white;text-decoration: none;">Volkswagen Polo</h1>
        <br><br>
        <img src="volkswagon polo(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="volkswagon polo(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car25); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car25); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car25); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car25); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car25); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car25); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car25); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car25); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars25); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars25); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars25); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars25); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars25); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">Volkswagen Vento</h1>
        <br><br>
        <img src="volkswagon vento(1).jpg" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);transform: scaleX(-1);">
        <img src="volkswagon vento(2).jpg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);transform: scaleX(-1);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car26); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car26); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car26); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car26); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car26); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car26); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car26); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car26); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars26); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars26); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars26); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars26); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars26); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br>

        <h1 style="color: white;text-decoration: none;">Volkswagen T-roc</h1>
        <br><br>
        <img src="volkswagon T-roc(1).webp" alt="" width="600px" height="400px" style="margin-left: 80px;border-radius: 8px;filter: contrast(150%);">
        <img src="volkswagon T-roc(2).jpeg" alt="" width="600px" height="400px" style="margin-left: 120px;border-radius: 8px;filter: contrast(150%);">

        <br><br><br>

        <p class="cardesc">Mileage : <?php $result=mysqli_query($conn,$car27); while($row=mysqli_fetch_array($result)) echo $row['Mileage'];?> Kmpl</p>
        <p class="cardesc">Fuel Type : <?php $result=mysqli_query($conn,$car27); while($row=mysqli_fetch_array($result)) echo $row['Fuel_type'];?></p>
        <p class="cardesc">Fuel Tank Capacity : <?php $result=mysqli_query($conn,$car27); while($row=mysqli_fetch_array($result)) echo $row['Fuel_capacity'];?>L</p>
        <p class="cardesc">Seating Capacity : <?php $result=mysqli_query($conn,$car27); while($row=mysqli_fetch_array($result)) echo $row['Seating_Capacity'];?></p><br><br><br>
        <p class="cardesc">Color : <?php $result=mysqli_query($conn,$car27); while($row=mysqli_fetch_array($result)) echo $row['Color'];?></p>
        <p class="cardesc">Airbags : <?php $result=mysqli_query($conn,$car27); while($row=mysqli_fetch_array($result)) echo $row['Airbags'];?></p>
        <p class="cardesc">Dimensions (cm) : <?php $result=mysqli_query($conn,$car27); while($row=mysqli_fetch_array($result)) echo $row['Dimensions'];?></p>
        <p class="cardesc">Price : <?php $result=mysqli_query($conn,$car27); while($row=mysqli_fetch_array($result)) echo $row['Price'];?></p>

        <br><br><br>

        <h1 style="color:white;text-decoration:none;">Features</h1>
        <br><br>        
        <p class="cfeatures" style="margin-left: 180px;">Bluetooth : <?php $result=mysqli_query($conn,$cars27); while($row=mysqli_fetch_array($result)) echo $row['Bluetooth'];?></p>
        <p class="cfeatures">USB : <?php $result=mysqli_query($conn,$cars27); while($row=mysqli_fetch_array($result)) echo $row['USB'];?></p>
        <p class="cfeatures">GPS : <?php $result=mysqli_query($conn,$cars27); while($row=mysqli_fetch_array($result)) echo $row['GPS'];?></p>
        <p class="cfeatures">Speakers : <?php $result=mysqli_query($conn,$cars27); while($row=mysqli_fetch_array($result)) echo $row['Speakers'];?></p>
        <p class="cfeatures">Display : <?php $result=mysqli_query($conn,$cars27); while($row=mysqli_fetch_array($result)) echo $row['Display'];?></p>
        <br><br><br><br><br>

    </div>

    <div class="services" id="services">
    
    <h1  style="color: white;font-family:'Fredoka One';font-size:50px;margin-left:490px">Service Appointment</h1>   
    <br><br><br><br><br><br>
    <form action="appointment.php" method="POST" class="forms">
    
    <label for="firstname" style="margin-left:500px;">Firstname</label><br>
    <input class="f" type="text" name="firstname" style="margin-left:500px;" required><br><br>
    <label for="lastname" style="margin-left:500px;">Lastname</label><br>
    <input class="f" type="text" name="lastname" style="margin-left:500px;" required><br><br>
    <label for="phoneno" style="margin-left:800px;">Mobile</label><br>
    <input class="f" type="tel" name="phoneno" maxlength="10" minlength="10" style="margin-left:800px;" required><br><br>
    <label for="email" style="margin-left:800px;">Email</label><br>
    <input class="f" type="email" name="email" style="margin-left:800px;" required><br><br>
    <label for="app_car" style="margin-left:610px;">Car</label><br>
    <select name="app_car" id="app_car" style="margin-left:580px;width:130px;" required>
    <option value="Honda City">Honda City</option><option value="Honda Amaze">Honda Amaze</option><option value="Honda Jazz">Honda Jazz</option>
    <option value="Benz-A class">Benz-A class</option><option value="Benz-E class">Benz-E class</option><option value="Benz-GLS">Benz-GLS</option>
    <option value="Chevrolet Cruze">Chevrolet Cruze</option><option value="Chevrolet Aveo">Chevrolet Aveo</option><option value="Chevrolet Captiva">Chevrolet Captiva</option>
    <option value="Porsche 911">Porsche 911</option><option value="Porsche 718">Porsche 718</option><option value="Porsche panamera">Porsche panamera</option>
    <option value="Audi A7">Audi A7</option><option value="Audi Q5">Audi Q5</option><option value="Audi A4">Audi A4</option>
    <option value="Ford Eco Sport">Ford Eco Sport</option><option value="Ford Endeavor">Ford Endeavor</option><option value="Ford Aspire">Ford Aspire</option>
    <option value="BMW x1">BMW x1</option><option value="BMW x3">BMW x3</option><option value="BMW x7">BMW x7</option>
    <option value="Toyota Yaris">Toyota Yaris</option><option value="Toyota Camry">Toyota Camry</option><option value="Toyota Glanza">Toyota Glanza</option>
    <option value="Volkswagen Polo">Volkswagen Polo</option><option value="Volkswagen Vento">Volkswagen Vento</option><option value="Volkswagen T-roc">Volkswagen T-roc</option>
    </select><br><br>
    <label for="service_type" style="margin-left:580px;">Service  Type</label><br>
    <select name="service_type" id="service_type" style="margin-left:580px;" required>
    <option value="Car-Wash">Car-Wash</option>
    <option value="Oil-check">Oil-Check</option>
    <option value="general">general</option>
    <option value="special">special</option>
    </select><br><br>
    <label for="date" style="margin-left:580px;">Date</label><br>
    <input type="date" name="appdate"  min="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d",$d);?>" class="f" style="margin-left:580px;"><br><br>
    <label for="timeslot" style="margin-left:580px;">Time</label><br>
    <select name="timeslot" id="timeslot" required style="margin-left:580px;">
        <option value="8:00-9:00 (am)">8:00-9:00 (am)</option>
        <option value="9:00-10:00 (am)">9:00-10:00 (am)</option>
        <option value="10:00-11:00 (am)">10:00-11:00 (am)</option>
        <option value="3:00-4:00 (pm)">3:00-4:00 (pm)</option>
        <option value="4:00-5:00 (pm)">4:00-5:00 (pm)</option>
        <option value="5:00-6:00 (pm)">5:00-6:00 (pm)</option>
    </select><br><br><br>
    <label for="comments" style="margin-left:700px;">comments (Optional)</label><br>
    <textarea name="comments" rows="7" cols="60" style="margin-left:700px;"></textarea><br><br><br>
    <input type="submit" class="s" name="submit" value="submit" style="margin-left: 600px;">
    <input type="reset" class="s">
    </form>
    </div>

    <br><br><br><br>

    <div>
    <h1 id="contact" style="color: white;font-family:'Fredoka One';font-size:50px;margin-left:660px">Contact</h1>
    <br><br><br>
    <a href="#"><i class="fa fa-facebook" style=" margin-left:300px;color: white;width:70px;height:70px;font-size:50px;background-color:rgb(0, 71, 179);line-height: 70px;text-align:center;border-radius:8px"></i></a>
    <a href="#"><i class="fa fa-instagram" style="margin-left:200px;color: white;width:70px;height:70px;font-size:50px;background-color:rgb(255, 0, 255);line-height: 70px;text-align:center;border-radius:8px"></i></a>
    <a href="#"><i class="fa fa-twitter" style="margin-left:200px;color: white;width:70px;height:70px;font-size:50px;background-color:rgb(0, 204, 255);line-height: 70px;text-align:center;border-radius:8px"></i></a>
    <a href="#"><i class="fa fa-whatsapp" style="margin-left:200px;color: white;width:70px;height:70px;font-size:50px;background-color:rgb(0, 204, 0);line-height: 70px;text-align:center;border-radius:8px"></i></a>

</div>


</body>
</html>

