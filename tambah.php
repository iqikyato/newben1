<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $Username = mysqli_real_escape_string($conn, $_POST['Username']);
    $Password = mysqli_real_escape_string($conn, $_POSR['Password']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Gender = $_POST['Gender'];
    $Hobby = $_POST['Hobby'];

    // Convert gender to 'L' or 'P'
    $Gender = ($Gender == 'male') ? 'L' : 'P';


    $sqlquery = "INSERT INTO kyato(Email, Password, Gender, Hobby)
                 VALUES('$Email', '$Password', '$Gender', '$Gender', '$Hobby')";
    
    $result = mysqli_query($conn, $sqlquery);

    if ($result) {
        header("Location: login.html?msg=" . urlencode("New record created successfully"));
        exit(); // Stop further execution after redirect
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>
