<?php
 $conn = mysqli_connect("localhost", "root", "", "cgv");
        
$id = $_POST['id'];
$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $query);

foreach ($result as $data) {
?>
<form action="update.php" method="post">
  <h3>
    <table id="daftar" width="100%">
      <tr>
        <th colspan="2" style="text-align: center">Update Akun</th>
      </tr>
      <tr>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <td>Username</td>
        <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
        <td>Password</td>
        <td><input type="password" name="password" value="<?php echo $data['password']; ?>"></td>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
        <td>Email Address</td>
        <td><input type="text" name="email_address" value="<?php echo $data['email_address']; ?>"></td>
      </tr>
    </table>
  </h3>
  <input type="submit" name="submit" value="Update">
</form>
<?php
}
?>
