<html>
<head>
<title> LTB-Verwalter </title>
</head>
<body bgcolor="99CCFF">

<div>
<h1 align="center">LTB-Verwalter</h1>
</div>
<br>
<!--<p align = center><button onclick="window.location.href='add.html'">Hinzufuegen...</button> &nbsp; oder &nbsp; <button onclick="window.location.href='remove.html'">Entfernen...</button></p>-->

<br>
<br>
<br>

<?php
$servername = "localhost";
$username = "root";


$mysqli = mysqli_connect($servername, $username);

//Verbindung ueberpruefen...
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($mysqli, "LTB");
$result = mysqli_query($mysqli,"SELECT * FROM main ORDER BY Nummer asc;");

echo '<p align="center">';
echo "<table border='0'>
<tr>
<th>Nummer</th>
<th>Titel</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Nummer'] . "</td>";
echo "<td>" . $row['Titel'] . "</td>";
echo "</tr>";
}
echo "</table>";



$result = mysqli_query($mysqli,"SELECT * FROM Spezial ORDER BY Nummer asc;");

echo "<table border='0'>
<tr>
<th>Nummer</th>
<th>Titel</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Nummer'] . "</td>";
echo "<td>" . $row['Titel'] . "</td>";
echo "</tr>";
}
echo "</table>";


$result = mysqli_query($mysqli,"SELECT * FROM Premium ORDER BY Nummer asc;");

echo "<table border='0'>
<tr>
<th>Nummer</th>
<th>Titel</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Nummer'] . "</td>";
echo "<td>" . $row['Titel'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo "</p>";
?> 

</body>
</html>