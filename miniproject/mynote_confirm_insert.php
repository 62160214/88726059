<?php
header('Content-type: text/plain; charset=utf-8');
$servername = "localhost";
$username = "Potiyalay";
$password = "Potiyalay";
$dbname = "My note";
// Create connection
$conn = new mysqli($conn = new mysqli($servername, $username, $password, $dbname););
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$header =   $_POST['header'];
$content = $_POST['content'];

$sql = "INSERT INTO mynote_data (note_header, note_detail)VALUES ('$header', '$content')";

if ($conn->query($sql) === TRUE) {
  header( "refresh: 1; url=index.php" );
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>