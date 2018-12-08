//Created By: Shahed Mohammad Hridoy

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM companies";

$result = mysqli_query($conn, $sql) or die("Error in Selection: " . mysqli_error($conn));

while ($row = mysqli_fetch_assoc($result)) {
    $myArray[] = $row;
}
print json_encode($myArray);


mysqli_close($conn);

