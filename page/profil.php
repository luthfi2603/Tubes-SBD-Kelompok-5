<?php
    $data = tampilkan("SELECT * FROM users a INNER JOIN cities b ON a.city = b.city_id WHERE a.id = ".$_SESSION['id']."")[0];
    // echo"<pre>";
    // var_dump($data); die;
    // echo"</pre>";
?>
<div class="main-body-container skin">
    <div class="body-wrapper">
        <div class="membership-profile-header">
            <div class="vcard-profile">
                <a href="#" class="vcard-picture"><img src="https://cdn.cgv.id/assets/images/profile-blank.png" /></a>
                <div class="vcard-name">
                    <span><?= $data['nama'] ?> <img src="https://cdn.cgv.id/assets/images/not_verified_icon_text.svg" alt=""></span> <a href="https://www.cgv.id/en/membership/edit_profile">Edit Profile</a>
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
                <div class="vcard-balance">
                    <h3>Balance</h3>
                    IDR 0
                </div>
                <div class="vcard-points">
                    <h3>Points</h3>
                    0 pts
                </div>
            </div>
        </div>
    </div>
    <div class="profile-wrapper" id="profile-menu">
        <div class="profile-nav">
            <ul>
                <li class="parent-nav">My CGV</li>
                <li class="parent-nav"><a href="https://www.cgv.id/en/membership/profile">My Profile</a></li>
            </ul>
        </div>
        <div class="profile-body">
            <h2>My Profile <a href="https://www.cgv.id/en/membership/edit_profile"><i class="fa fa-edit"></i> Edit Profile</a></h2>
            <div class="my-profile-group">
                <ul>
                    <li>Email<span>: <?= $data['email_address'] ?></span></li>
                    <li>Name<span>: <?= $data['nama'] ?></span></li>
                    <li>Username<span>: <?= $data['username'] ?></span></li>
                    <li>Gender<span>: <?= $data['gender'] ?></span></li>
                    <li>Birthdate<span>: <?= $data['birthdate'] ?></span></li>
                    <li>Mobile No.<span>: <?= $data['no_hp'] ?></span></li>
                    <li>ID Card No.<span>: <?= $data['card_no'] ?></span></li>
                    <li>Address<span>: <?= $data['address'] ?></span></li>
                    <li>City<span>: <?= $data['city_name'] ?></span></li>
                </ul>
            </div>
        </div>
    </div>
</div>