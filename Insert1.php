<?php
include("Connect.php");
$name      =$_POST['name'];
$age        =$_POST['age'];
$gen        =$_POST['gen'];
$email      =$_POST['email'];
$phome     =$_POST['phone'];
$info      =$_POST['ta'];

$insert ="insert into coll(	name,	age, gender,	email,	phone,	info,	dd	) values ('$name', $age,  '$gen',  '$email', $phome, '$info', current_timestamp)";
$qur =mysqli_query($connect, $insert);
if ($qur) {
    # code...
    echo"<br>Data insert ";
}
else {
    echo"Failed";
}








?>