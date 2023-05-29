<?php
    $data = tampilkan("SELECT * FROM users a INNER JOIN cities b ON a.city = b.city_id");
    if(isset($_POST['btnHapus'])){
        $id = $_POST['id'];
        if(hapus($id) > 0){
            echo"
                <script>
                    alert('Data berhasil dihapus');
                    document.location.href = '/cgv/admin/?p=users';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data gagal dihapus!');
                </script>
            ";
        }
    }
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My users</h1>
</div>
<div class="table-responsive">
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
                    <td><?= $row['city_name'] ?></td>
                    <td><?= $row['email_address'] ?></td>
                    <td><?= $row['birthdate'] ?></td>
                    <td><?= $row['preferred_cinema'] ?></td>
                    <td><?= $row['pin'] ?></td>
                    <td><?= $row['card_no'] ?></td>
                    <?php if($row['level'] == 1) : ?>
                        <td>Admin</td>
                    <?php else : ?>
                        <td>User</td>
                    <?php endif ?>
                    <td>
                        <a href="/cgv/admin?p=edit-user&id=<?= $row['id'] ?>" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="" method="POST" class="d-inline">
                            <input hidden type="text" name="id" value="<?= $row['id'] ?>">
                            <button name="btnHapus" class="border-0 badge bg-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div>