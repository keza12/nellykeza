<?php
$conn=mysqli_connect("localhost","root","","keza nelly");
if($conn){
    echo"connection succesfully";
}
else{
    die("connection failed".mysqli_connect_error());

}
?>