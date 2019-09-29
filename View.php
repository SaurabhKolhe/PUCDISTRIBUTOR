<?php
include("config.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$result=mysqli_query($conn,"select * from client");
echo'<style>
    table{
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
}
th,td{
	border: 1px solid #ddd;
    padding: 4px;
}
th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}
</style>';

echo '<table>';   
echo '<tr>';
echo'<th width="5%">id</th>';
echo'<th width="20%">Name</th>';
echo'<th width="15%">Email</th>';
echo'<th width="10%">Mobile</th>';
echo'<th width="35%">Address</th>';
echo'<th width="5%">Center</th>';
echo'<th width="10%">Date</th>';

echo'</tr>';
echo'</table>';
while($row=mysqli_fetch_array($result)) 
{
echo '<table>';   

echo '<tr>';
echo "<td width='5%'> ".$row["id"];
echo "<td width='20%'> ".$row["name"];
echo "<td width='15%'> ".$row["email"];
echo "<td width='10%'> ".$row["mobile"];
echo "<td width='35%'> ".$row["address"];
echo "<td width='5%'> ".$row["center"];
echo "<td width='10%'> ".$row["date"];

echo'</table>';
}
echo'<br><br>
<button onclick="myFunction()"  style="background-color:grey;margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%">Print</button>

<script>
function myFunction() {
  window.print();
}
</script>';
mysqli_close($conn);
?>