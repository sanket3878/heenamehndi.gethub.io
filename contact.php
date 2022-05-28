<?php
$servername="localhost";
$username="root";
$password="";
$database="contact";

$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['sb']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql="INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "Message sent successfully!";
}
else
{
echo "sorry!Record was not inserted";
}
}
