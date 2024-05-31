<?php
require 'connection.php';
$Username = $_POST["username"];
$Password = $_POST["password"];
$Email = $_POST["gmail"];
$Gender = $_POST["gender"];
$Hobby = $_POST["hobby"];

$query_sql = "INSERT INTO registration (Username, Password, Email, Gender, Hobby) 
            VALUES ('$Username', '$Password', '$Email', '$Gender', '$Hobby')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: Registration.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
