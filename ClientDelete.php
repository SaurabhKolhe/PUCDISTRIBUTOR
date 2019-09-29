
<?php
include("config.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$user=$_POST['user'];
$mobile=$_POST['mobile'];
$flag=0;

$result=mysqli_query($conn,"select *  from client where name='$user' and mobile='$mobile'");

while($row=mysqli_fetch_array($result)) 
{ 
 
          if($user==$row['name'] && $mobile==$row['mobile'])
         {
                  $flag=1;
                  break;
         }    


}
if($flag==1)
{
   $result="Delete from client where name='$user' and mobile='$mobile'";
   if(mysqli_query($conn,$result)){
					       
								header("Location:AdminHome.html");
	            }								
			   else{
				 echo "ERROR: Could not able to execute $result. " . mysqli_error($conn);
				}
}
else
{
                     echo '<h1>Client not Exist in Record</h1>';
					 echo'<form action="ClientDelete.html" method="POST" class="appointment-form" id="appointment-form">';
					 echo'<input type="submit" name="submit" id="submit" class="submit" value="Back" />';
					 echo'</form>';    

}
mysqli_close($conn);
?>