<div class="main-body-container skin">
    <div class="body-wrapper">
        <div class="membership-profile-header">
            <div class="vcard-profile">
                <a href="#" class="vcard-picture"><img src="https://cdn.cgv.id/assets/images/profile-blank.png" /></a>
                <div class="vcard-name">
                    <span>Muhammad Luthfi <img src="https://cdn.cgv.id/assets/images/not_verified_icon_text.svg" alt=""></span> <a href="https://www.cgv.id/en/membership/edit_profile">Edit Profile</a>
                </div>
                <div class="vcard-info">
                    <ul>
                        <li>Type<span>: General </span></li>
                        <li>Card Number<span>: 6062-3620-2533-6468</span></li>
                        <li>Email
                            <span>: luthfim904@gmail.com</span>
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
                <li class="parent-nav"><a href="https://www.cgv.id/en/membership/transaction_history">My Transactions</a>
                    <ul>
                        <li class="child-nav"><a href="https://www.cgv.id/en/membership/point_history">Point Usage</a></li>
                    </ul>
                </li>
                <li class="parent-nav"><a href="https://www.cgv.id/en/membership/cgv_card">CGV Card</a></li>
                <li class="parent-nav"><a href="https://www.cgv.id/en/membership/profile">My Profile</a></li>
                <li class="parent-nav"><a href="https://www.cgv.id/en/membership/my_voucher">My Voucher</a></li>
                <li class="parent-nav"><a href="https://www.cgv.id/en/membership/my_coupon">My Coupon</a></li>
            </ul>
        </div>
        <div class="profile-body">
            <h2>Edit Profile</h2>
            <div class="add-cc-wrapper">
                <div class="form-group add-cc">
                    <form action="https://www.cgv.id/en/membership/profile/update" method="post">
                        <input type="hidden" name="_token" value="scg8p7SyjFOMkLNaRLkv3iyjwTsghmzUSeOe1enJ">
                        <ul>
                            <li>
                                <div class="input-group pull-left">
                                    <label for="inputFulltName">Name</label>
                                    <input type="text" name="full_name" id="inputFulltName" value="Muhammad Luthfi" />
                                </div>
                                <div class="input-group pull-right">
                                    <label for="inputUsername">Username</label>
                                    <input type="text" name="username" id="inputUsername" value="ZeeroXc" />
                                    <span class="usernameValidator" style="position: absolute; right: 20px; top: 35px;"><i class="fa fa-close" data-toggle="tooltip" title="Character allowed only alphabetic and numeric"></i></span>
                                </div>
                                <div class="input-group pull-right not-verified">
                                    <label for="inputEmail">Email</label>
                                    <input type="text" name="email" id="inputEmail" value="luthfim904@gmail.com" placeholder="user@mail.com" readonly />
                                    <img class="icon-not-verify" src="https://cdn.cgv.id/assets/images/not_verified_icon.svg" alt="Not Verified Icon" title="Not Verified Email">
                                    <button type="button" class="btn-verify" id="btn-verify-email">Verify</button>
                                </div>
                                <div class="input-group pull-left ">
                                    <label for="inputMobileNo">Mobile No. **</label>
                                    <input type="text" name="mobile" id="inputMobileNo" value="088262450134" placeholder="08XXX" readonly />
                                    <img class="icon-verified" src="https://cdn.cgv.id/assets/images/verified_icon.svg" width="100" alt="Verified Icon" title="Verified Phone Number">
                                </div>
                                <div class="input-group pull-right">
                                    <label for="inputGender">Gender</label>
                                    <select id="inputGender" name="gender" disabled>
                                        <option>-- Select Gender --</option>
                                        <option value="01" selected>Male</option>
                                        <option value="02">Female</option>
                                        <option value="03">None</option>
                                    </select>
                                </div>
                                <div class="input-group pull-left">
                                    <label for="inputBirthdate">Birth Date</label>
                                    <input type="text" name="birth_date" id="inputBirthdate" data-provide="inputBirthdate" data-date-format="dd-mm-yyyy" value="26-03-2004" placeholder="dd-mm-yyyy" readonly />
                                </div>
                                <div class="input-group pull-right">
                                    <label for="inputIdCard">ID Card No.</label>
                                    <input type="text" name="id_card" id="inputIdCard" value="" />
                                </div>
                                <div class="input-group pull-left">
                                    <label for="inputCity">City</label>
                                    <select id="inputCity" name="city" style="height: 30px;">
                                        <option>-- Select City --</option>
                                        <option value="006">Ambon</option>
                                        <option value="007">Balikpapan</option>
                                        <option value="052">BandaAceh</option>
                                        <option value="009">Bandung</option>
                                        <option value="053">Banjar</option>
                                        <option value="054">Banjarbaru</option>
                                        <option value="010">Banjarmasin</option>
                                        <option value="011">Batam</option>
                                        <option value="012">Batu</option>
                                        <option value="055">Bau-Bau</option>
                                        <option value="013">Bekasi</option>
                                        <option value="014">Bengkulu</option>
                                        <option value="056">Bima</option>
                                        <option value="057">Binjai</option>
                                        <option value="058">Bitung</option>
                                        <option value="059">Blitar</option>
                                        <option value="015">Bogor</option>
                                        <option value="060">Bontang</option>
                                        <option value="061">Bukit tinggi</option>
                                        <option value="101">Cikarang</option>
                                        <option value="016">Cilegon</option>
                                        <option value="062">Cimahi</option>
                                        <option value="017">Cirebon</option>
                                        <option value="018">Denpasar</option>
                                        <option value="019">Depok</option>
                                        <option value="063">Dumai</option>
                                        <option value="064">Gorontalo</option>
                                        <option value="102">Gresik</option>
                                        <option value="065">Gunungsitoli</option>
                                        <option value="001">Jakarta Barat</option>
                                        <option value="002">Jakarta Pusat</option>
                                        <option value="003">Jakarta Selatan</option>
                                        <option value="004">Jakarta Timur</option>
                                        <option value="005">Jakarta Utara</option>
                                        <option value="020">Jambi</option>
                                        <option value="066">Jayapura</option>
                                        <option value="104">Jember</option>
                                        <option value="105">Karanganyar</option>
                                        <option value="051">Karawang</option>
                                        <option value="021">Kediri</option>
                                        <option value="067">Kendari</option>
                                        <option value="069">Kupang</option>
                                        <option value="008">Lampung</option>
                                        <option value="070">Langsa</option>
                                        <option value="071">Lhokseumawe</option>
                                        <option value="072">Lubuklinggau</option>
                                        <option value="022">Madiun</option>
                                        <option value="023">Magelang</option>
                                        <option value="024">Makassar</option>
                                        <option value="025">Malang</option>
                                        <option value="026">Manado</option>
                                        <option value="027">Mataram</option>
                                        <option value="028" selected>Medan</option>
                                        <option value="073">Metro</option>
                                        <option value="068">mobagu</option>
                                        <option value="029">Mojokerto</option>
                                        <option value="999">Other</option>
                                        <option value="030">Padang</option>
                                        <option value="074">Padangpanjang</option>
                                        <option value="075">Padangsidempuan</option>
                                        <option value="076">PagarAlam</option>
                                        <option value="031">Palangka Raya</option>
                                        <option value="032">Palembang</option>
                                        <option value="077">Palopo</option>
                                        <option value="078">Palu</option>
                                        <option value="079">Pangkal Pinang</option>
                                        <option value="080">Parepare</option>
                                        <option value="081">Pariaman</option>
                                        <option value="082">Pasuruan</option>
                                        <option value="083">Payakumbuh</option>
                                        <option value="033">Pekalongan</option>
                                        <option value="034">Pekanbaru</option>
                                        <option value="084">Pematangsiantar</option>
                                        <option value="035">Pontianak</option>
                                        <option value="085">Prabumulih</option>
                                        <option value="036">Probolinggo</option>
                                        <option value="103">Purwakarta</option>
                                        <option value="050">Purwokerto</option>
                                        <option value="086">Sabang</option>
                                        <option value="087">Salatiga</option>
                                        <option value="037">Samarinda</option>
                                        <option value="088">Sawahlunto</option>
                                        <option value="038">Semarang</option>
                                        <option value="039">Serang</option>
                                        <option value="089">Sibolga</option>
                                        <option value="090">Singkawang</option>
                                        <option value="042">Solo</option>
                                        <option value="091">Solok</option>
                                        <option value="092">Sorong</option>
                                        <option value="093">Subulussalam</option>
                                        <option value="040">Sukabumi</option>
                                        <option value="094">SungaiPenuh</option>
                                        <option value="041">Surabaya</option>
                                        <option value="044">Tangerang</option>
                                        <option value="043">Tangerang Selatan</option>
                                        <option value="045">Tanjung Pinang</option>
                                        <option value="095">Tanjungbalai</option>
                                        <option value="096">Tarakan</option>
                                        <option value="046">Tasikmalaya</option>
                                        <option value="047">TebingTinggi</option>
                                        <option value="048">Tegal</option>
                                        <option value="097">Ternate</option>
                                        <option value="098">TidoreKepulauan</option>
                                        <option value="099">Tomohon</option>
                                        <option value="100">Tual</option>
                                        <option value="049">Yogyakarta</option>
                                    </select>
                                </div>
                                <div class="input-group pull-left">
                                    <label for="inputAddress">Address</label>
                                    <textarea name="address" id="inputAddress" rows="4" style="width: 323px; resize: none; border-color: rosybrown;">-</textarea>
                                </div>
                            </li>
                        </ul>
                        <div class="form-submit-wrapper">
                            <input type="submit" value="Save" />
                            <input type="reset" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>