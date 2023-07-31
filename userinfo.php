<?php
$con= mysqli_connect('localhost','root');

if($con){
    echo " connection successfull";
}else{
    echo " no connection";
}

mysqli_select_db($con,'userformdata');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];


$query= " insert into userinfodata (user,email,mobile) 
values ('$user', '$email', '$mobile') "; 

mysqli_query($con,$query);


?>