<?php
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $review = $_POST['review'];

    // Insert the review into your database.
    // You should use prepared statements to prevent SQL injection.
  // Create a prepared statement
  $stmt = $conn->prepare("INSERT INTO review (name,review) VALUES (?,?)");
  $stmt->bind_param("ss", $name,$review);

  // Execute the statement
  if ($stmt->execute()) {
      // This block will execute if data was successfully inserted into the database   
      echo "<p>Thank you for your review</p>";
      
  } else {
      echo "Error: " . $stmt->error;
  }
  
    // For example:
    // $sql = "INSERT INTO reviews (name, rating, review) VALUES (?, ?, ?)";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$name, $rating, $review]);
}

  // Close the statements and connection
  $stmt->close();
  $conn->close();

// Redirect back to the page after submitting the review.
header("Location: user_Reviews.php");

?>
