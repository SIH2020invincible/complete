<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sih";

// Create connection
$link = mysqli_connect("localhost", "root", "", "sih");
$conn = new mysqli($servername, $username, $password, $dbname);
//$link = mysqli_connect("localhost", "root", "", "sih");
//$username = mysqli_real_escape_string($link, $_REQUEST["uname"]);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username=mysqli_real_escape_string($link, $_REQUEST["uname"]);

// sql to delete a record
$sql = "DELETE FROM anganwadi WHERE username='".$username."'";

if ($conn->query($sql) === TRUE) {
    $a= "Record deleted successfully";
} else {
    $a= "Error deleting record: ";
}

$conn->close();
?>
<html>

<head>

<title>POSHAN ABHIYAAN</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>

       

.topnav {

overflow: hidden;

background-color: #e9e9e9;

}



.topnav a {

float: left;

display: block;

color: black;

text-align: center;

padding: 14px 16px;

text-decoration: none;

font-size: 17px;

}



.topnav a:hover {

background-color: #ddd;

color: black;

}



.topnav a.active {

background-color: #2196F3;

color: white;

}



.topnav input[type=text] {

float: right;

padding: 6px;

margin-top: 8px;

margin-right: 16px;

border: none;

font-size: 17px;

}



h1{

background-color: lightskyblue;

height: 250px;

padding-left: 25%;

text-align: justify;

}



.B{

 color: darkblue;

 font-size: 150%;

}



div.gallery {

margin: 5px;

border: 1px solid #ccc;

float: left;

width: 300px;

padding-left: 4%;

}







@media screen and (max-width: 600px) {

.topnav a, .topnav input[type=text] {

float: none;

display: block;

text-align: left;

width: 100%;

margin: 0;

padding: 14px;

}



.topnav input[type=text] {

border: 1px solid #ccc;  

}

}





</style>

</head>

<body>

<div class="split left">                                     <!---------------SCREEN UPAR K LIE YHA SE SPLIT HAI---------------->

<div class="gallery">

  <a target="_blank" href="Ee.jpg">

    <img src="Ee.jpg"  width="300" height="240" >

  </a>

</div>



<h1><br><br>

<p> MINISTRY OF WOMEN & CHILDREN DEVELOPEMENT </p></h1>

<p class="B"><marquee> !!! SAHI POSHAN DESH ROSHAN !!! </marquee></p>







<div class="topnav">

<a class="active" href="mukhyasevika.html">Back</a>







</div>

<div align="center">

<font color="red"><b><?php echo $a; ?></b></font>

</div>

</body>

</html>