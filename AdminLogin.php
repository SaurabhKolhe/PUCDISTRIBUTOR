<?php
include("config.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$user=$_POST['user'];
$pass=$_POST['pass'];
$flag=0;

$result=mysqli_query($conn,"select *  from admin where Username='Admin' and Password='$pass'");

while($row=mysqli_fetch_array($result)) 
{
 
          if($user==$row['Username'] && $pass==$row['Password'])
         {
                  $flag=1;
                  break;
         }    


}
if($flag==1)
{
    header("location:AdminHome.html");
  
}
else
{
    header("location:AdminLogin.html");

}
?>