<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message=$_POST['message'];

        $sql = "INSERT INTO contactus (name, email, phone,message)
VALUES ('$name', '$email', '$phone','$message')";

if ($conn->query($sql) === TRUE) {
 
  header("Location: index.html");
} else {
  header("Location: index.html");

}
    }


$conn->close();
?> 