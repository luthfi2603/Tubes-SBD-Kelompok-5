<?php
    if(isset($_POST['id_user'])) {
        $id_user = $_POST['id_user'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email_address = $_POST['email_address'];
        $password = $_POST['password'];

        $conn = mysqli_connect("localhost", "root", "", "cgv");

        if ($conn) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hashing password
            $sql = "UPDATE user SET username='$username', password='$hashed_password', nama='$nama', email_address='$email_address' WHERE id_user=$id_user";
            mysqli_query($conn, $sql);
            echo "<p class='alert alert-success text-center'><b>Perubahan Akun Berhasil Disimpan. <a href='akun.php' class='btn btn-primary'>Kembali</a></b></p>";
        } else {
            echo "<p class='alert alert-danger text-center'><b>Terjadi kesalahan</b></p>";
        }  
    } else {
        echo "<p class='alert alert-danger text-center'><b>Data tidak lengkap. Harap isi semua field.</b></p>";
    }     
?>
