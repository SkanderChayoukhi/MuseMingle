<?php
$conn=mysqli_connect("localhost","root","","admin");
if(!$conn){
    echo 'failed to connect'.mysqli_connect_error();
}
?>