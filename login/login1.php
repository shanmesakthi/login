<?php
session_start();
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$con=mysqli_connect("localhost","root","","demo") or die("db not connect");
$que="select*from demotb where name='$name'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    if($row['pwd']==$pwd)
    {
        $_SESSION['username']=$row['name'];
        $_SESSION['password']=$row['pwd'];
        echo"<script>alert('login success');
        window.location.href='home.php'";
    }
    else{
        echo"<script>alert('login unsuccessfull');</script>";
    }
}
    else{
        echo"<script>alert('enter valide user name');</script>";
    }
?>