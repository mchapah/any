<?php
session_start();
include("db.php"); //Establishing connection with our database
 
$error = ""; //Variable for storing our errors.
if(isset($_POST["login-submit"]))
{
if(empty($_POST["email"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$username=$_POST['email'];
$password=$_POST['password'];

 
// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

 
//Check username and password from database
$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

$_SESSION['usertype']=$row['usertype'];
 
//If username and password exist in our database then create a session.
//Otherwise echo error.


 
if(mysqli_num_rows($result) > 0)
{
       
   $_SESSION['username']= $username;
    header("location: index.php"); // Redirecting To Other Page
 
}else
{
$error = "Incorrect username or password";
header("location: login.php?error='".$error."'");
}

}
}
 
?>