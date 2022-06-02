<?php
$conn=mysqli_connect("localhost","root","","collegechat");

if(!$conn){
    echo "Database Connected" . mysqli_connect_error();
}

?>
