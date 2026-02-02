<?php
$conn = new mysqli("localhost", "root", "", "studentdb");

$result = $conn->query("SELECT * FROM students");

echo "<h2>Task 1 – Student Records</h2>";

while($row = $result->fetch_assoc()) {
  echo $row['name']." | ".$row['email']." | ".$row['department']."<br>";
}

$conn->close();
?>
