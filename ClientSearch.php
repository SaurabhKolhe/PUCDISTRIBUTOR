<?php
include("config.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$user=$_POST['user'];
$mobile=$_POST['mobile'];
$flag=0;
echo"<style>
    table{
		font-family:Arial, Helvetica,sans-serif;
		border-collapse:collapse;
		width:100%;
		
	  }
	 th,td{
		 border: 1px solid #ddd;
		 padding:8px;
	 }	   
	 tr:nth-child(even){background-color:#f2f2f2;}
	tr:hover
	{
		background-color:#ddd;
	}
	th{
		padding-top:12px;
		padding-bottom:12px;
		text-align:left;
		background-color:#4CAF50;
		color:white;
	}
	</style>";
echo'<h2>Client Details</h2>';
echo '<table>';   
echo '<tr>';
echo'<th width="5%">id</th>';
echo'<th width="10%">Name</th>';
echo'<th width="20%">Email</th>';
echo'<th width="20%">Mobile</th>';
echo'<th width="40%">Address</th>';
echo'<th width="5%">Center</th>';
echo'</tr>';
echo'</table>';
$result=mysqli_query($conn,"select *  from client where name='$user' and mobile='$mobile'");
while($row=mysqli_fetch_array($result)) 
{
echo'<table>
      <tr>
	  <td width="5%">'.$row["id"].'</td>
	  <td width="10%">'.$row["name"].'</td>
      <td width="20%">'.$row["email"].'</td>
      <td width="20%">'.$row["mobile"].'</td>
      <td width="40%">'.$row["address"].'</td>
      <td width="5%">'.$row["center"].'</td>
      </tr>
      </table>
	  <br> <br>';
	  
}	  

echo'<h2>Client Slip Records</h2>';
	  echo '<table>';   
echo '<tr>';
echo'<th width="20%">Name</th>';
echo'<th width="10%">Mobile</th>';
echo'<th width="10%">Total Slip</th>';
echo'<th width="15%">Start_date</th>';
echo'<th width="15%">End_date</th>';
echo'<th width="15%">Start_Slip</th>';
echo'<th width="15%">End_Slip</th>';
echo'</tr>';
echo'</table>';
$result=mysqli_query($conn,"select *  from slip where name='$user' and mobile='$mobile'");
while($row=mysqli_fetch_array($result)) 
{
echo'<table>
      <tr>
	  <td width="20%">'.$row["name"].'</td>
      <td width="10%">'.$row["mobile"].'</td>
      <td width="10%">'.$row["total_slip"].'</td>
	  <td width="15%">'.$row["start_date"].'</td>
	  <td width="15%">'.$row["end_date"].'</td>
	  <td width="15%">'.$row["start_slipno"].'</td>
      <td width="51%">'.$row["end_slipno"].'</td>
      </tr>
      </table>
	  <br> <br>';
}

echo'<h2>Client Slip Request Details</h2>';
	  echo '<table>';   
echo '<tr>';
echo'<th width="20%">Name</th>';
echo'<th width="10%">Mobile</th>';
echo'<th width="40%">Message</th>';
echo'<th width="10%">Date</th>';
echo'<th width="10%">Day</th>';
echo'<th width="10%">TIME</th>';
echo'</tr>';
echo'</table>';
$result=mysqli_query($conn,"select *  from request where name='$user' and mobile='$mobile'");
while($row=mysqli_fetch_array($result)) 
{
echo'<table>
      <tr>
	  <td width="20%">'.$row["name"].'</td>
      <td width="10%">'.$row["mobile"].'</td>
      <td width="40%">'.$row["message"].'</td>
      <td width="10%">'.$row["date"].'</td>
	  <td width="10%">'.$row["day"].'</td>
	  <td width="10%">'.$row["time"].'</td>
      </tr>
      </table>
	  <br> <br>';
	  
}  

mysqli_close($conn);
?>