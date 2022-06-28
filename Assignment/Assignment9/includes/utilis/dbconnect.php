
<?php
// $conn = mysqli_connect("localhost", "root", "") 
// or die("Connection failed : " . mysqli_connect_error());

// include "includes/utilis/helper.php";
$conn = new mysqli("localhost", "root", "" , "student_mngmt");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>