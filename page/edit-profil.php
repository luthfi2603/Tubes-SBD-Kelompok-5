<?php
    $data = tampilkan("SELECT * FROM users a INNER JOIN cities b ON a.city = b.city_id WHERE a.id = " . $_SESSION['id'] . "")[0];
    $city = tampilkan("SELECT * FROM cities ORDER BY city_name ASC");
    if(isset($_POST['save'])){
        if(ubah2($_POST) > 0){
            echo"
                <script>
                    alert('Data berhasil diubah');
                    document.location.href = '?p=profil';
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
<div class="main-body-container skin">
    <div class="body-wrapper">
        <div class="membership-profile-header">
            <div class="vcard-profile">
                <a href="#" class="vcard-picture"><img src="https://cdn.cgv.id/assets/images/profile-blank.png" /></a>
                <div class="vcard-name">
                    <span><?= $data['nama'] ?> <img src="https://cdn.cgv.id/assets/images/not_verified_icon_text.svg" alt=""></span> <a href="/cgv?p=edit-profil">Edit Profile</a>
                </div>
                <div class="vcard-info">
                    <ul>
                        <li>Type<span>: General </span></li>
                        <li>Card Number<span>: <?= $data['card_no'] ?></span></li>
                        <li>Email
                            <span>: <?= $data['email_address'] ?></span>
                        </li>
                    </ul>
                </div>
                <!-- <div class="vcard-balance">
                    <h3>Balance</h3>
                    IDR 0
                </div>
                <div class="vcard-points">
                    <h3>Points</h3>
                    0 pts
                </div> -->
            </div>
        </div>
    </div>
    <div class="profile-wrapper" id="profile-menu">
        <div class="profile-nav">
            <ul>
                <li class="parent-nav">My CGV</li>
                <li class="parent-nav"><a href="/cgv?p=profil">My Profile</a></li>
            </ul>
        </div>
        <div class="profile-body">
            <h2>Edit Profile</h2>
            <div class="add-cc-wrapper">
                <div class="form-group add-cc">
                    <form action="" method="post">
                        <input hidden type="text" name="id" value="<?= $data["id"]; ?>">
                        <ul>
                            <li>
                                <div class="input-group pull-left">
                                    <label for="inputFulltName">Name</label>
                                    <input type="text" name="nama" id="inputFulltName" value="<?= $data['nama'] ?>">
                                </div>
                                <div class="input-group pull-right">
                                    <label for="inputUsername">Username</label>
                                    <input type="text" name="username" id="inputUsername" value="<?= $data['username'] ?>">
                                    <span class="usernameValidator" style="position: absolute; right: 20px; top: 35px;"><i class="fa fa-check" data-toggle="tooltip" title="" data-original-title="Character allowed only alphabetic and numeric"></i></span>
                                </div>
                                <div class="input-group pull-right not-verified">
                                    <label for="inputEmail">Email</label>
                                    <input type="text" name="email" id="inputEmail" value="<?= $data['email_address'] ?>" placeholder="user@mail.com" readonly="">
                                    <img class="icon-not-verify" src="https://cdn.cgv.id/assets/images/not_verified_icon.svg" alt="Not Verified Icon" title="Not Verified Email">
                                    <button type="button" class="btn-verify" id="btn-verify-email">Verify</button>
                                </div>
                                <div class="input-group pull-left ">
                                    <label for="inputMobileNo">Mobile No. **</label>
                                    <input type="text" name="mobile" id="inputMobileNo" value="<?= $data['no_hp'] ?>" placeholder="08XXX" readonly="">
                                    <img class="icon-verified" src="https://cdn.cgv.id/assets/images/verified_icon.svg" width="100" alt="Verified Icon" title="Verified Phone Number">
                                </div>
                                <div class="input-group pull-right">
                                    <label for="inputGender">Gender</label>
                                    <select id="inputGender" name="gender" disabled="">
                                        <option>-- Select Gender --</option>
                                        <option value="01" selected="">Male</option>
                                        <option value="02">Female</option>
                                        <option value="03">None</option>
                                    </select>
                                </div>
                                <div class="input-group pull-left">
                                    <label for="inputBirthdate">Birth Date</label>
                                    <input type="text" name="birth_date" id="inputBirthdate" data-provide="inputBirthdate" data-date-format="dd-mm-yyyy" value="<?= $data['birthdate'] ?>" placeholder="dd-mm-yyyy" readonly="" class="hasDatepicker">
                                </div>
                                <div class="input-group pull-right">
                                    <label for="inputIdCard">ID Card No.</label>
                                    <input type="text" name="id_card" id="inputIdCard" value="<?= $data['card_no'] ?>">
                                </div>
                                <div class="input-group pull-left">
                                    <label for="inputCity">City</label>
                                    <select id="inputCity" name="city" style="height: 30px;">
                                        <option>-- Select City --</option>
                                        <?php foreach($city as $item) : ?>
                                            <?php if($data['city'] == $item['city_id']) : ?>
                                                <option selected value="<?= $item['city_id'] ?>"><?= $item['city_name']?></option>
                                            <?php endif ?>
                                        <option value="<?= $item['city_id'] ?>"><?= $item['city_name'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="input-group pull-left">
                                    <label for="inputAddress">Address</label>
                                    <textarea name="address" id="inputAddress" rows="4" style="width: 323px; resize: none; border-color: rosybrown;"><?= $data['address'] ?></textarea>
                                </div>
                            </li>
                        </ul>
                        <div class="form-submit-wrapper">
                            <input name="save" type="submit" value="Save">
                            <input type="reset" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>