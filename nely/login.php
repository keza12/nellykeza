<?php
include('connection.php');

if(isset($_post['submit']))
{
$name=$_post['username'];
$password=$_post['password'];
$select=mysqli_query($conn,"select* users WHERE user_name='$name'");
if(mysqli_num_rows($select)>0){
    echo"username already taken";
}else{
    $insert="INSERT INTO nelly VALUEs('$name','$password)";
    mysqli_query($conn,$insert);
}

}


?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label>username:</label>
        <input type="text"name="username"id=""><br><br>
        <label>password:</label>
        <input type="text"name="password"id=""><br><br>
        <input type="submit"name="submit"id="">
</form>   
</body>
</html>