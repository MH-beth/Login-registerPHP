<?php

session_start();

header('location:../../index.php');

$con = mysqli_connect('localhost', 'root','root');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$s = " select * from usertable where name = '$name'";
$d = " select * from usertable where email = '$email'";
$result = mysqli_query($con, $s);
$result2 = mysqli_query($con, $d);

$num = mysqli_num_rows($result);
$num2 = mysqli_num_rows($result2);

if($num == 1 || $num2 == 1){
    echo "Username or password already taken";
}
else{
    $reg = "  insert into usertable(name, password, firstname, lastname, email) values ('$name', '$pass', '$fname', '$lname', '$email')";
    mysqli_query($con, $reg);
}
?>