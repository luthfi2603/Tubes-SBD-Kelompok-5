<?php
    $id = $_GET['id'];
    $data = tampilkan("SELECT level FROM users WHERE id = $id")[0];
    if(isset($_POST['ubah'])){
        if(ubah($_POST) > 0){
            echo"
                <script>
                    alert('Data berhasil diubah');
                    document.location.href = '/cgv/admin/?p=users';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data gagal diubah!');
                </script>
            ";
        }
    }
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah level</h1>
</div>
<div class="container">
    <form action="" method="POST">
        <input name="id" type="text" hidden value="<?= $id ?>">
        <div class="row">
            <div class="col-3">
                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <select name="level" class="form-select id="gender">
                        <?php if($data['level'] == 1) : ?>
                            <option value="1" selected>Admin</option>
                            <option value="2">User</option>
                        <?php else : ?>
                            <option value="1">Admin</option>
                            <option value="2" selected>User</option>
                        <?php endif ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-grid gap-2 col-3 mt-1">
                <button class="btn btn-dark" name="ubah">Update</button>
            </div>
        </div>
    </form>
</div>