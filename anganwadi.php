<?php



$link = mysqli_connect("localhost", "root", "", "sih");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

$usernam = mysqli_real_escape_string($link, $_REQUEST["uname"]);

$passwor = mysqli_real_escape_string($link, $_REQUEST["psw"]);



// attempt insert query execution

$sql = "SELECT username,password FROM anganwadi WHERE username='".$usernam."' and password='".$passwor."'";



$result = mysqli_query($link,$sql);



$count = mysqli_num_rows($result);





if($count !=0) {

         

         header("location: anganwadi.html");

      }else {
        header("location: login.html");
         

      }

 

 

// close connection

mysqli_close($link);

?>