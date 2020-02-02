<?php



$link = mysqli_connect("localhost", "root", "", "sih");

$conn = new mysqli("localhost", "root", "", "sih");

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

$username = mysqli_real_escape_string($link, $_REQUEST["uname"]);



// attempt insert query execution

$sql = "SELECT username,password,name FROM mukhya WHERE district='".$username."' ";

echo "<br>Name:    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;    Username:&emsp;&emsp;  &emsp; &emsp;&emsp;       Password:<br>";

$result = $conn->query($sql);



if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {

    echo "<br>". $row["name"]." &emsp;&emsp;         ". $row["username"]. "  &emsp;&emsp;        " . $row["password"] . "<br>";

  }

} else {

  echo "0 results";

}



$conn->close();




// close connection

mysqli_close($link);

?>