 <html>
 <body>
 <?php
$servername = "localhost";
$username = "root";

$nummer = $_GET["nummer"];
$titel = $_GET["Titel"];
$typ = $_GET["Typ"];

// Create connection
$mysqli = mysqli_connect($servername, $username);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
echo $nummer . "" . $titel;
$sql = "USE LTB";
$mysqli->query($sql);
$sql = "INSERT INTO $typ (Nummer, Titel) VALUES ('$nummer', '$titel')";
$mysqli->query($sql);


?> 
<script language="javascript" type="text/javascript">
//window.close();
</script>
</body>
</html>