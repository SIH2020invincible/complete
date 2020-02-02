<?php



$link = mysqli_connect("localhost", "root", "", "sih");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

$username = mysqli_real_escape_string($link, $_REQUEST["uname"]);

$password = mysqli_real_escape_string($link, $_REQUEST["psw"]);



// attempt insert query execution

$sql = "SELECT username,password FROM mukhya WHERE username='".$username."' and password='".$password."'";



$result = mysqli_query($link,$sql);



$count = mysqli_num_rows($result);





if($count !=0) {

         

         header("location: mukhyasevika.html");

      }else {
        header("location: login.html");
         

      }

 

 

// close connection

mysqli_close($link);

?>