<?php
// Include your database connection code here.
//database connection
$servername ="localhost";
$username="root";
$password ="";
$dbname="dw_ass";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve reviews from the database.
// For example:
$sql = "SELECT * FROM review ORDER BY id DESC";
 $stmt = $pdo->query($sql);

// Display reviews in a loop.
while ($row = $stmt->fetch()) {
   echo "<h3>{$row['name']}</h3>";
//     echo "<p>Rating: {$row['rating']}</p>";
  echo "<p>{$row['review']}</p>";
 }
?>
