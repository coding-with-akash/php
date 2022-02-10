<?php
$name=$_POST['name'];
$pass=$_POST['pass'];

$name = stripcslashes($name);
$pass = stripcslashes($pass);
// $name = mysql_real_escape_string($name);
// $pass = mysql_real_escape_string($pass);


mysqli_connect("127.0.0.1:3307","root","");
// mysql_select_db("login");
 $result=("select * from users.login where username='$name' and password='
 $pass'  ") or die("filed to querry".mysql_error());

 $row=$result;
 if ($row['username']==$name && $row['password']==$pass){
     echo "login sucessful";
 }
 else{
     echo "failed";
 };





?>