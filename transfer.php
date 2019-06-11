<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<?php

$db = mysqli_connect('localhost','root','secret@9','credit_management')
 or die('Error connecting to MySQL server.');

$query1 = "SELECT * FROM user";
mysqli_query($db, $query1) or die('Error querying database.');

$result1 = mysqli_query($db, $query1);
$row1 = mysqli_fetch_array($result1);
echo "<center><h1>Select sender receiver and credits</h1></center>";
echo "<br>";
echo "<table style='font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%'>";
echo "<tr style='border: 1px solid #ddd; padding: 8px'>";
echo "<th style='border: 1px solid #ddd; padding: 8px'>User ID</th>";
echo "<th style='border: 1px solid #ddd; padding: 8px'>Name</th>";
echo "<th style='border: 1px solid #ddd; padding: 8px'>Credits</th>";
echo "</tr>";
while($row1=mysqli_fetch_assoc($result1))
{
echo "<tr style='border: 1px solid #ddd; padding: 8px; text-align:center'><td>".$row1['UserID']."</td><td>".$row1['Name']."</td><td>".$row1['Credits']."</td></tr>";
}
echo "</table>";
mysqli_close($db);

?>
<div style="padding:20px">
<center>
<form action="users3.php" method="post">
<div style="padding:5px"><h3>Sender ID:</h3><input type="number" name="UID"></div><br>
<div style="padding:5px"><h3>Credits to be transferred:</h3><input type="number" name="credits"></div><br>
<div style="padding:5px"><h3>Receiver ID:</h3><input type="number" name="RID"></div><br>
<input id="button" type="submit">
<center>
</div>
</html>