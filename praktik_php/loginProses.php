<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect, $query);
    $cek=mysqli_num_rows($result);

    if ($cek) {
        echo "Anda berhasil login, silakan menuju"; ?>
        <a href="loginForm.html">Halaman HOME</a>
    <?php
    }else{
        echo "Anda gagal login, silakan " ;?>
        <a href="loginForm.html">login kembali</a>
    <?php
        echo mysqli_error($connect);
    }
?>