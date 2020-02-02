<?php
$username=filter_input(INPUT_POST,'district');
if(!empty($username) ){

    header("location: login.html");
}
else{
   header("location:index.html");
}
?>
