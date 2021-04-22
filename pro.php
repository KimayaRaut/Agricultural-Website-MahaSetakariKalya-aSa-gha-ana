<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";
// Create connection
$conn = mysqli_connect($servername, $username, $password,
$dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST['name1'];
$rate=$_POST['rate'];
$comment=$_POST['comment'];
$email=$_POST['email'];
$sql = "INSERT INTO user1
VALUES ('$name','$rate','$comment','$email')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>