<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$people=$_POST['people'];
$message=$_POST['message'];


$conn=new mysqli('localhost','root','','minip');
if($conn->connect_error)
{
  die('Connection Failed:'.$conn->connect_error);


}
else{
  $stmt=$conn->prepare("insert into booking(name,email,phone,date,time,people,message)
  values(?,?,?,?,?,?,?)");

  $stmt->bind_param("sssssss",$name,$email,$phone,$date,$time,$people,$message);
  $stmt->execute();
  echo "registration successful";
  $stmt->close();
  $conn->close();
}


?>
