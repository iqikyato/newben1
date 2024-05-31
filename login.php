<?php
$koneksi = mysqli_connect("localhost", "root", "", "kyato");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
                     // "register" sesuai sama nama table
   $query = " SELECT * FROM register WHERE username='$username' AND password='$password'";
   $cekuser=mysqli_query($koneksi,$query);
   if($cekuser && mysqli_num_rows($cekuser) > 0){
    echo "<script>
          alert('Welcome');
          window.location.href = 'home.php';
          </script>";
    exit();
   } else { 
    echo "<script>
          alert('Username/Password Invalid');
          window.location.href = 'Login.html';
          </script>";
    exit();
}
}
?>