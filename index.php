<?php
$servername = "phpmyadmin.imkatta.no";
$username = "imkattano_papirfly";
$password = "vxLMkw@[!TwU";
$dbname = "imkattano_papirfly";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];

// Insert data into the database
$sql = "INSERT INTO elevdata (navn, telefon, epost) VALUES ('$name', '$telefon', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "data ble sett inn"
   } else {
    echo "Error: " . $sql . "<br>" "Fortsetter dette å skje ta kontakt med Nikolas via teams   nikvar16". $conn->error;
}

$conn->close();
?>
