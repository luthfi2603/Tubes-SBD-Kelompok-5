<?php
    $data = tampilkan("SELECT * FROM users");
    /*echo "<table class='table table-bordered'>";
    echo
    "<tr>
            <th>id</th>
            <th>nama</th>
            <th>no_hp</th>
            <th>username</th>
            <th>gender</th>
            <th>city</th>
            <th>email_address</th>
            <th>birthdate</th>
            <th>preferred_cinema</th>
            <th>pin</th>
            <th>card no</th>
            <th>password</th>
            <th>level</th>
            </tr>";

    foreach ($hasil as $data) {
        echo "<tr><td>" . $data['id'] . "</td><td>" . $data['nama'] . "</td><td>" . $data['no_hp'] . "</td><td>" . $data['username'] . "</td><td>" . $data['gender'] . "</td><td>" . $data['city'] . "</td><td>" . $data['email_address'] . "</td><td>" . $data['birthdate'] . "</td><td>" . $data['preferred_cinema'] . "</td><td>" . $data['pin'] . "</td><td>" . $data['card_no'] . "</td><td>" . $data['password'] . "</td><td>" . $data['level'] . "</td>";
        //disini akan dibuat tombol Edit dan Hapus 
        echo "<td><form method='POST' action='ubah.php'>
    <input type='hidden' name='id' value=" . $data['id'] . ">
    <button type='submit' name='btnUpdate' class='btn btn-info'>Update</button></form></td>";
        echo "<td><form onsubmit=\"return confirm ('Anda Yakin Mau Menghapus Data?');\" method='POST'>
    <input type='hidden' name='id' value=" . $data['id'] . ">
    <button type='submit' name='btnHapus' class='btn btn-danger'>Delete</button></form></td>
    </tr>";

        if (isset($_POST['btnHapus'])) {
            // Inisiasi variabel untuk menampung isian id
            $id = $_POST['id'];

            if ($conn) {
                $sql = "DELETE FROM users WHERE id='$id'";
                mysqli_query($conn, $sql);
                echo "<p class='alert alert-success text-center'><b>Data Akun Berhasil Dihapus.</b></p>";
            } elseif ($conn->connect_error) {
                echo "<p class='alert alert-danger text-center'><b>Data gagal dihapus. Terjadi kesalahan: " . $conn->connect_error . "</b></p>";
            }
        } elseif (isset($_POST['btnUpdate'])) {
            // Inisiasi variabel untuk menampung isian id
            $id = $_POST['id'];

            // Redirect ke halaman ubah.php dengan mengirimkan id yang ingin diubah
            header("Location: ubah.php?id=$id");
            exit();
        }
    }
    echo "</table>";*/
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My users</h1>
</div>
<div class="table-responsive">
    <a href="/admin/users/create" class="btn btn-primary mb-3">Create new user</a>
    <table class="table table-striped table-sm text-center align-middle">
        <thead>
            <tr class="text-center align-middle">
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">No. HP</th>
                <th scope="col">Username</th>
                <th scope="col">Gender</th>
                <th scope="col">City</th>
                <th scope="col">Email</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Preferred Cinema</th>
                <th scope="col">Pin</th>
                <th scope="col">Card No</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($data as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['no_hp'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['gender'] ?></td>
                    <td><?= $row['city'] ?></td>
                    <td><?= $row['email_address'] ?></td>
                    <td><?= $row['birthdate'] ?></td>
                    <td><?= $row['preferred_cinema'] ?></td>
                    <td><?= $row['pin'] ?></td>
                    <td><?= $row['card_no'] ?></td>
                    <td><?= $row['level'] ?></td>
                    <td>
                        <a href="#" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="" method="POST" class="d-inline">
                            <button class="border-0 badge bg-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div>