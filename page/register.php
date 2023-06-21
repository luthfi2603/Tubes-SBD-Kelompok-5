<?php
    if(isset($_POST["registrasi"])){
        if(register($_POST) > 0){
            echo"
                <script>
                    alert('Pendaftaran akun berhasil');
                    document.location.href = '/cgv?p=login';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Pendaftaran akun gagal!');
                </script>
            ";
        }
    }

    $city = tampilkan("SELECT * FROM cities ORDER BY city_name ASC");
    $cinemas = tampilkan("SELECT * FROM cinemas ORDER BY cinema_name ASC");
?>
<div class="main-body-container">
    <div class="body-wrapper">
        <div class="login-section">
            <div class="login-tab-panel" role="tabpanel">
                <ul class="nav nav-tabs" id="login-tab" role="tablist">
                <li role="presentation">
                        <a href="/cgv?p=login">Login</a>
                    </li>
                    <li role="presentation" class="active">
                        <a href="#">Sign Up</a>
                    </li>
                </ul>
                <div class="tab-content" style="padding:0;">
                    <div role="tabpanel" class="tab-pane active" id="signup">
                        <div class="signup-header">
                            <h5>Create New Account</h5>
                            <p>Please provide accurate information so we may identify you at the Box Office</p>
                        </div>
                        <form action="" method="post" autocomplete="off" id="form-signup">
                            <input type="hidden" name="_token" value="wBtWa8SC6dW1himMjgrtEvdKYVkwjRvX4Eniq9dt">
                            <div class="form-group signup">
                                <ul>
                                    <li>
                                        <div class="input-group required">
                                            <label style="float: left;">
                                                Preferred Cinema
                                            </label>
                                            <div style="display: block;padding-left: 170px;">
                                                <!-- <select name="pref_city" id="citySelector" style="height: 30px;width: 100px;float: left;">
                                                    <option value="">All</option>
                                                    <?php // foreach($city as $item) : ?>
                                                    <option value="<?= $item['city_name'] ?>"><?= $item['city_name'] ?></option>
                                                    <?php // endforeach ?>
                                                </select> -->
                                                <select name="pcinema" style="height: 30px;width: 160px;float: right;">
                                                    <option value>--Select Cinema--</option>
                                                    <?php foreach($cinemas as $cinema) : ?>
                                                        <option value="<?= $cinema['cinema_id'] ?>" attr-city="#"><?= $cinema['cinema_name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-group required">
                                            <label for="inputName">
                                                Full Name
                                            </label>
                                            <input type="text" id="inputName" name="nama" value autocomplete="off">
                                        </div>
                                        <div class="input-group">
                                            <label for="userName">Username</label>
                                            <input type="text" id="userName" name="username" value autocomplete="off">
                                            <!-- <span class="usernameValidator" style="position: absolute; right: 10px; top: 10px;">
                                                <i class="fa fa-check" data-toggle="tooltip" title data-original-title="Character allowed only alphabetic and numeric"></i>
                                            </span> -->
                                        </div>
                                        <div class="input-group required">
                                            <label for="inputGender">
                                                Gender
                                            </label>
                                            <select id="inputGender" name="gender" style="height: 30px;">
                                                <option>-- Select Gender --</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="None">None</option>
                                            </select>
                                        </div>
                                        <div class="input-group required">
                                            <label>
                                                Birthdate
                                            </label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="date" name="birthdate" id="datepicker" data-provide="datepicker" class="ms-5">
                                        </div>
                                        <div class="input-group required">
                                            <label>
                                                Phone Number
                                            </label>
                                            <input type="text" name="noHp" value placeholder="08XXX" autocomplete="off">
                                        </div>
                                        <div class="input-group required">
                                            <label for="inputCity">
                                                City
                                            </label>
                                            <select id="inputCity" name="kota" style="height:30px;">
                                                <option value>-- Select City --</option>
                                                <?php foreach($city as $item) : ?>
                                                <option value="<?= $item['city_id'] ?>"><?= $item['city_name'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </li>
                                    <li id="regform2">
                                        <div class="input-group required">
                                            <label for="inputEmail">
                                                Email Address
                                            </label>
                                            <input type="text" id="inputEmail" name="email" value autocomplete="off">
                                        </div>
                                        <div class="input-group required">
                                            <label>
                                                New Password
                                            </label>
                                            <input type="password" name="password" value autocomplete="off" placeholder="8 Character Alphanumeric">
                                            <!-- <span class="passValidator" style="position: absolute; right: 10px; top: 10px;">
                                                <i class="fa fa-close" data-toggle="tooltip" title data-original-title="8 digits combination of alphabet and numeric.">
                                                </i>
                                            </span> -->
                                        </div>
                                        <div class="input-group required">
                                            <label>
                                                New PIN
                                            </label>
                                            <input type="password" name="pin" value autocomplete="off" placeholder="6 digits number">
                                            <!-- <span class="pinValidator" style="position: absolute; right: 10px; top: 10px;">
                                                <i class="fa fa-close" data-toggle="tooltip" title data-original-title="6 digits of numeric">
                                                </i>
                                            </span> -->
                                        </div>
                                        <div class="input-group">
                                            <label>
                                                CGV Card No.
                                                <small style="font-size: 12px; font-style: italic;">(If Any)</small>
                                            </label>
                                            <input type="text" name="cardNo" value autocomplete="off" placeholder="Your CGV Card No. (No space or dash)">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group term">
                                <div class="input-group">
                                    <label for="agree">
                                        "By clicking the create account button, you agree to CGV cinema's"
                                        <a href="https://www.cgv.id/en/content/legal_term" target="_blank">terms of use and privacy policy</a>
                                        "and approve to receive any information"
                                    </label>
                                </div>
                            </div>
                            <div class="form-group signup-submit right">
                                <div class="input-group">
                                    <input name="registrasi" type="submit" value="Create Account">
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/jquery-ui-1.10.4.custom.min.js"></script>