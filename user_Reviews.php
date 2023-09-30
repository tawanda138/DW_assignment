<!DOCTYPE html>
<html>
<head>
    <title>Write a Review</title>
    <link rel="stylesheet" href="navigation.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar">
    <!-- LOGO -->
    <div class="logo">GWSC</div>
    <!-- USING CHECKBOX HACK -->
    <input type="checkbox" id="checkbox_toggle" />
      <label for="checkbox_toggle" class="hamburger">&#9776;</label>


    <!-- NAVIGATION MENU -->
    <ul class="nav-links">

      <!-- NAVIGATION MENUS -->
      <div class="menu">

        <li><a href="Homepage.php">Home</a></li>
        <li><a href="Information.php">Information</a></li>
        <li><a href="user_Reviews.php">Reviews</a></li>
        <li><a href="Features.php">Features</a></li>
        <li><a href="localattractions.php">LocalAttractions</a></li>
        <li><a href="Pitch Types and Availability.php">Pitch Types and Availability</a></li>
        <li><a href="Contact.php">Contact</a></li>
      </div>
    </ul>
  </nav> 
  
    <h1>Write a Review</h1>
    <form id="reviewForm" action="submit_review.php" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required><br>


        <label for="review">Your Review:</label><br>
        <textarea id="review" name="review" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Submit Review">
    </form>
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

    $query= "SELECT * FROM review ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

 if (mysqli_num_rows($result) > 0) {
    // OUTPUT DATA OF EACH ROW
    while($row = mysqli_fetch_assoc($result)) {
        echo "name: " . $row["name"];
         echo" Review: " . $row["review"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
    
    ?>
    
</body>
</html>
