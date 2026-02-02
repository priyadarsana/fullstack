<?php
$conn = new mysqli("localhost", "root", "", "studentdb");

if ($conn->connect_error) {
  die("DB Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$dept = $_POST['department'];
$phone = $_POST['phone'];

$sql = "INSERT INTO students(name,email,dob,department,phone)
        VALUES('$name','$email','$dob','$dept','$phone')";

$conn->query($sql);
$conn->close();

echo "Task 1 Completed – Student Registered<br>";
echo "<a href='index.html'>Back</a>";
?>
