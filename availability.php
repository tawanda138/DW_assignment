<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dw_ass";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pitchType = $_POST["pitchType"]; // Assuming a select input for pitch type

    // SQL query to search for pitch availability
    $sql = "SELECT * FROM pitches WHERE pitch_type = '$pitchType' AND availability = 'available'";
    
    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display the available pitches
        echo "<h2>Available $pitchType Pitches:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>Pitch ID: " . $row["id"] . "</li>";
            // Display other pitch information here
        }
        echo "</ul>";
    } else {
        echo "No available $pitchType pitches found.";
    }

    // Close the database connection
    $conn->close();
}
?>


