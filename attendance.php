<html>

    <head>

    <title>POSHAN ABHIYAAN</title>

</head>
<body style="background-color:powderblue;">
  
<center><h1>Attendance</h1>
 <p></p>
 <br>
 <p></p>
 <h2>Enter Id of people who are present</h2>
 <br>
 <form action="upload.php">
  Id Number:<br>
  <input type="text" name="id" value="Enter Id">
  
  <br><br>
  <input type="submit" value="Submit">
</form> </center>
 
<?php



$link = mysqli_connect("localhost", "root", "", "sih");

$conn = new mysqli("localhost", "root", "", "sih");

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

$username = mysqli_real_escape_string($link, $_REQUEST["uname"]);



// attempt insert query execution

$sql = "SELECT id,name,address,contact FROM user WHERE username='".$username."' ";



$result = $conn->query($sql);



if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {

    echo "<br>".$row["id"]."&emsp;".$row["name"]." &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;     ". $row["contact"]. "  &emsp;&emsp;&emsp;&emsp;&emsp;    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;    " . $row["address"] . "<br>";

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