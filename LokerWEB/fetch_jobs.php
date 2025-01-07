// fetch_jobs.php
<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "job_vacancies";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM jobs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='col-md-4'>";
    echo "<h3>" . $row["title"] . "</h3>";
    echo "<p>" . $row["description"] . "</p>";
    echo "<p><strong>Company:</strong> " . $row["company"] . "</p>";
    echo "<p><strong>Location:</strong> " . $row["location"] . "</p>";
    echo "</div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>