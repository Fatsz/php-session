<?php  
ob_start(); 
session_start(); 
ob_end_clean(); 
$username=$_POST["username"]; 
$password=$_POST["password"]; 
if($username=="admin" AND $password=="admin") 
{ 
$_SESSION["username"]=$username; 
header("location:informasi.php"); 
}else{ 
header("location:index.php?login_gagal=true"); 
} 
?>