<?php

   session_start();
   require_once("koneksi.php");
   $email = $_POST['email'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM admin WHERE email = '$email'";
   $query = $koneksi->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<script type='text/javascript'>
        alert('Username Tidak Terdaftar');
        history.back(self);
        </script>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<script type='text/javascript'>
        alert('Password Salah!');
        history.back(self);
        </script>";
     } else {
       $_SESSION['email'] = $hasil['email'];
       $_SESSION['login'] = true;
       header('location:index3.php');
     }
   }
?>