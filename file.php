<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moods";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Title FROM faq where id=1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "title: " . $row["Title"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
