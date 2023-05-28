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

    $city = tampilkan("SELECT * FROM cities ORDER BY name ASC");
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
                <div class="tab-content">
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
                                                <select name="pref_city" id="citySelector" style="height: 30px;width: 100px;float: left;">
                                                    <option value="">All</option>
                                                    <?php foreach($city as $item) : ?>
                                                    <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <select name="pcinema" style="height: 30px;width: 160px;float: right;">
                                                    <option value>--Select Cinema--</option>
                                                    <option value="001" attr-city="Bandung">Paris Van Java</option>
                                                    <option value="002" attr-city="Jakarta">Grand Indonesia</option>
                                                    <option value="003" attr-city="Jakarta">Pasific Place</option>
                                                    <option value="005" attr-city="Tangerang Selatan">Teras Kota</option>
                                                    <option value="006" attr-city="Jakarta">Central Park</option>
                                                    <option value="007" attr-city="Bekasi">Bekasi Cyber Park</option>
                                                    <option value="008" attr-city="Balikpapan">Plaza Balikpapan</option>
                                                    <option value="011" attr-city="Bandung">Miko Mall</option>
                                                    <option value="013" attr-city="Yogyakarta">Jwalk Mall</option>
                                                    <option value="014" attr-city="Bandung">BEC Mall</option>
                                                    <option value="015" attr-city="Tangerang">Bandara City Mall</option>
                                                    <option value="016" attr-city="Cirebon">Grage City Mall</option>
                                                    <option value="017" attr-city="Yogyakarta">Pakuwon Mall Jogja</option>
                                                    <option value="018" attr-city="Surabaya">Marvell City</option>
                                                    <option value="019" attr-city="Karawang">Festive Walk</option>
                                                    <option value="020" attr-city="Jakarta">Slipi Jaya</option>
                                                    <option value="021" attr-city="Manado">Grand Kawanua City</option>
                                                    <option value="022" attr-city="Tangerang">Ecoplaza Citraraya Cikupa</option>
                                                    <option value="023" attr-city="Mojokerto">Sunrise Mall</option>
                                                    <option value="024" attr-city="Medan">Focal Point</option>
                                                    <option value="025" attr-city="Jakarta">Green Pramuka Mall</option>
                                                    <option value="026" attr-city="Purwokerto">Rita Supermall</option>
                                                    <option value="027" attr-city="Palembang">Social Market</option>
                                                    <option value="028" attr-city="Jakarta">Bella Terra Lifestyle Center</option>
                                                    <option value="029" attr-city="Bandung">23 Paskal Shopping Center</option>
                                                    <option value="030" attr-city="Depok">Depok Mall</option>
                                                    <option value="031" attr-city="Yogyakarta">Transmart Maguwo</option>
                                                    <option value="032" attr-city="Tegal">Transmart Tegal</option>
                                                    <option value="033" attr-city="Pekanbaru">Transmart Pekanbaru</option>
                                                    <option value="034" attr-city="Mataram">Transmart Mataram</option>
                                                    <option value="035" attr-city="Jakarta">Transmart Cempaka Putih</option>
                                                    <option value="036" attr-city="Bekasi">Bekasi Trade Center</option>
                                                    <option value="037" attr-city="Jakarta">Aeon Mall JGC</option>
                                                    <option value="038" attr-city="Bandung">Metro Indah Mall</option>
                                                    <option value="039" attr-city="Palembang">Transmart Palembang</option>
                                                    <option value="040" attr-city="Bekasi">Lagoon Avenue Bekasi</option>
                                                    <option value="041" attr-city="Solo">Transmart Solo</option>
                                                    <option value="042" attr-city="Cirebon">Transmart Cirebon</option>
                                                    <option value="043" attr-city="Lampung">Transmart Lampung</option>
                                                    <option value="045" attr-city="Tangerang Selatan">Transmart Graha Bintaro</option>
                                                    <option value="046" attr-city="Karawang">Technomart</option>
                                                    <option value="048" attr-city="Surabaya">BG Junction</option>
                                                    <option value="049" attr-city="Jakarta">FX Sudirman</option>
                                                    <option value="051" attr-city="Gresik">Icon Mall Gresik</option>
                                                    <option value="052" attr-city="Bogor">Vivo Sentul</option>
                                                    <option value="053" attr-city="Blitar">Blitar Square</option>
                                                    <option value="055" attr-city="Samarinda">Plaza Mulia</option>
                                                    <option value="056" attr-city="Karawang">Cikampek Mall</option>
                                                    <option value="057" attr-city="Batam">Park Avenue Batam</option>
                                                    <option value="059" attr-city="Purwakarta">Sadang Terminal Square</option>
                                                    <option value="060" attr-city="Bandung">Kings Shopping Center</option>
                                                    <option value="064" attr-city="Palembang">PTC Mall</option>
                                                    <option value="065" attr-city="Tangerang Selatan">Paradise Walk Serpong</option>
                                                    <option value="066" attr-city="Madiun">Plaza Lawu Madiun</option>
                                                    <option value="067" attr-city="Kediri">Kediri Mall</option>
                                                    <option value="068" attr-city="Jakarta">Sunter Mall</option>
                                                    <option value="069" attr-city="Cikarang">Living Plaza Jababeka</option>
                                                    <option value="070" attr-city="Probolinggo">Wijaya Kusuma</option>
                                                    <option value="071" attr-city="Batam">Grand Batam Mall</option>
                                                    <option value="072" attr-city="Makassar">Panakkukang Square</option>
                                                    <option value="076" attr-city="Malang">Malang City Point</option>
                                                    <option value="077" attr-city="Jember">Roxy Square Jember</option>
                                                    <option value="079" attr-city="Padang">Raya Padang</option>
                                                    <option value="080" attr-city="Tangerang">Grand Batavia</option>
                                                    <option value="081" attr-city="Surabaya">Maspion Square</option>
                                                    <option value="086" attr-city="Jakarta">Buaran Plaza</option>
                                                    <option value="087" attr-city="Pekanbaru">Holiday Pekanbaru</option>
                                                    <option value="088" attr-city="Pekanbaru">Studio Pekanbaru</option>
                                                    <option value="089" attr-city="Tangerang">Mall Ciputra Tangerang</option>
                                                    <option value="092" attr-city="Jakarta">Poins Mall</option>
                                                    <option value="094" attr-city="Serang">Ecoplaza Citra Maja Raya</option>
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
                                                <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
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
<script src="https://cdn.cgv.id/assets/js/plugins/jquery-ui-1.10.4.custom.min.js"></script>