<?php



$servername = "localhost";
$username = "root";
$password = "asdf31121287;";
$database = "magexpress";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*
$userName = "root";
$password = "asdf31121287;";
$sunucu = "localhost";
$database = "magexpress";

$baglan = mysql_connect($sunucu,$userName,$password);
mysql_query("SET NAMES UTF8");

if (!$baglan) {
    echo "bagalnti hatasi".mysql_errno();
    exit();
}
$db = mysql_select_db($database);

if (!$db) {
    echo "Veri Tabani Hatasi".mysql_error();
    exit();
}
*/

?>