<?php
include("dbcon.php");

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $ret= mysqli_query("SELECT * FROM users WHERE username='$username' and password='$password'");
    $num=mysqli_fetch_array($ret);
    if($num>0)
    {
       echo "tobi";
        header("location: lodge_data.php");
    }
    else
    {
        echo "incorrect username / password";
    }
}
?>