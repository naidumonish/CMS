<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<center>
<?php
$uid=$_POST['UID'];
$rid=$_POST['RID'];
$credits=$_POST['credits'];
$db = mysqli_connect('localhost','root','secret@9','credit_management')
 or die('Error connecting to MySQL server.');

$query = "SELECT MAX(TransferID) AS maximum FROM transfers;";
mysqli_query($db, $query) or die('Error 3023');
$result1=mysqli_query($db, $query);
$row1 = mysqli_fetch_array($result1);
$transferID=($row1['maximum'])+1;
$date = date("Y-m-d");

$query5="select Credits from user where UserID=$uid";
mysqli_query($db,$query5) or die("Error 6738");
$result2=mysqli_query($db,$query5);
$row2=mysqli_fetch_assoc($result2);

if(($row2['Credits']-$credits)>=0)
{
$query4="insert into transfers values('$transferID','$uid','$rid','$date','$credits')";
mysqli_query($db,$query4) or die("Error 5039");

$query1 = "UPDATE user SET Credits=Credits+$credits WHERE UserID=$rid";
mysqli_query($db, $query1) or die('Error 8239');

$query2 = "UPDATE user SET Credits=Credits-$credits WHERE UserID=$uid";
mysqli_query($db, $query2) or die('Error 1271');

$query3 = "SELECT * from user";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query3);
$row = mysqli_fetch_array($result);

echo "<table style='font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%'>";
echo "<tr>";
echo "<th style='border: 1px solid #ddd; padding: 8px'>User ID</th>";
echo "<th style='border: 1px solid #ddd; padding: 8px'>Name</th>";
echo "<th style='border: 1px solid #ddd; padding: 8px'>Credits</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr style='border: 1px solid #ddd; padding: 8px; text-align:center'><td>".$row['UserID']."</td><td>".$row['Name']."</td><td>".$row['Credits']."</td></tr>";
}
echo "</table>";
}
else
{
echo "Not enough credits";
echo "<br>Transaction not possible";
echo "<br>";
}
?>
<div style="padding:20px">
<a id="button" href="Home.php">Go to Home page</a>
<a id="button" href="transfer.php">Go to Users page</a>
</div>
</center>
</html>