<?php

 $dbhost = "127.0.0.1:3307";
 $dbuser = "root";
 $dbpass = "";
 $db = "login";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) ;


 $name=$_POST['name'];
 $pass=$_POST['pass'];
//  or die("Connect failed: %s\n". $conn -> error)
 if(!$conn){
     echo "connection fail";
 }else{
    echo "succesful";
 }
 

 $sql="INSERT INTO `users`(`username`, `password`) VALUES ('$name','$pass')";
 $result=mysqli_query($conn,$sql);

 if($result){
     echo "successful";
 }
else{
    echo "fail";
}
?>