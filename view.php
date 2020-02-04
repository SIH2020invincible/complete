<html>

    <head>

    <title>POSHAN ABHIYAAN</title>

</head>
<body style="background-color:powderblue;">
  
  <h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;Records</h1>
 <p></p>
 <br>
 <p></p>
 <h2> NAME  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;Contact Number &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ADDRESS</h2>
<?php



$link = mysqli_connect("localhost", "root", "", "sih");

$conn = new mysqli("localhost", "root", "", "sih");

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

$username = mysqli_real_escape_string($link, $_REQUEST["uname"]);



// attempt insert query execution

$sql = "SELECT name,address,contact FROM user WHERE username='".$username."' ";



$result = $conn->query($sql);



if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {

    echo "<br>". $row["name"]." &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;     ". $row["contact"]. "  &emsp;&emsp;&emsp;&emsp;&emsp;    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;    " . $row["address"] . "<br>";

  }

} else {

  echo "0 results";

}



$conn->close();




// close connection

mysqli_close($link);

?>
</body>
</html>