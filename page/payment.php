<div class="main-body-container">
    <div class="body-wrapper">
        <div class="payment-option-section">
            <div class="payment-header">
                <span class="timer-countdown">Released in <font>-</font> </span>
                <h4>Payment Information</h4>
                <a href="javascript:location.reload();" class="payment-reset">
                    <i class="fa fa-refresh"></i> Reset
                </a>
            </div>
            <div class="coupon-wrapper">
                <div class="form-group">
                    <div class="input-group pull-left">
                        <label for="couponList">E-Coupons/Promo Code</label>
                        <input type="text" id="couponList" list="myCoupon" value="" style="margin-left: 50px; width: 300px; padding: 6px 10px;" />
                    </div>
                    <button type="submit" class="btn red pull-right">Apply</button>
                    <div class="clear"></div>
                    <div class="coupon-desc hidden"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="payment-option" role="tabpanel">
                <ul class="nav nav-tabs" id="payment-option-tab" role="tablist">
                    <li role="presentation" class="active"><a href="#cgvpoint" aria-controls="cgvpoint" role="tab" id="cgvpointTab" data-toggle="tab">CGV Points</a></li>
                    <li role="presentation"><a href="#creditCard" aria-controls="creditCard" role="tab" id="creditCardTab" data-toggle="tab">Credit Card</a></li>
                    <li role="presentation"><a href="#virtualAcc" aria-controls="virtualAcc" role="tab" id="virtualAccTab" data-toggle="tab">Debit Transfer</a></li>
                    <li role="presentation"><a href="#voucher" aria-controls="Voucher" role="tab" id="voucherTab" data-toggle="tab">Voucher</a></li>
                    <li role="presentation"><a href="#others" aria-controls="Others" role="tab" id="othersTab" data-toggle="tab">Others</a></li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="voucher">
                        <form action="https://www.cgv.id/en/payment/voucher/pay" method="post">
                            <input type="hidden" name="_token" value="scg8p7SyjFOMkLNaRLkv3iyjwTsghmzUSeOe1enJ"> <input type="hidden" name="order_id" value="10182580" />
                            <div class="form-group voucher-payment">
                                <div class="input-header">Voucher<span class="pull-right"><a href="https://www.cgv.id/en/membership/register_voucher" id="voucher-reg" class="btn-voucher-reg" target="_blank">Register</a></span></div>
                                <div class="input-group voucher-box">
                                    <div class="voucher-type">Box Office</div>
                                    <div class="voucher_list_wrapper">
                                    </div>
                                </div>
                                <div class="input-group voucher-con">
                                    <div class="voucher-type">Concession</div>
                                    <div class="voucher_list_wrapper">
                                    </div>
                                </div>
                                <div class="spacer-30"></div>
                            </div>
                            <div class="form-group term">
                                <div class="input-group">
                                    <input type="checkbox" name="agree1" id="agree1" />
                                    <label for="agree1">I understand that children under 3 are not allowed inside Velvet/Velvet Suite auditoriums</label>
                                </div>
                                <div class="input-group">
                                    <input type="checkbox" name="agree2" id="agree2" />
                                    <label for="agree2">I understand with this that are allowed in 1 bed sofa only a maximum of 2 peoples</label>
                                </div>
                            </div>
                            <input type="hidden" id="payment-type" name="payment_type" value="voucher" />
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="cgvpoint">
                        <form action="https://www.cgv.id/en/payment/point" method="post">
                            <input type="hidden" name="_token" value="scg8p7SyjFOMkLNaRLkv3iyjwTsghmzUSeOe1enJ"> <input type="hidden" name="order_id" value="10182580" />
                            <div class="form-group payment">
                                <div class="input-group-border">
                                    <label for="point_balance">Available Points</label>
                                    <input type="text" name="point_balance" id="point_balance" class="form-control" value="0" disabled />
                                </div>
                                <div class="input-group-border">
                                    <label for="point_pin">PIN</label>
                                    <input type="password" name="point_pin" id="point_pin" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group term">
                                <div class="input-group">
                                    <input type="checkbox" name="agree1" id="agree5" />
                                    <label for="agree5">I understand that children under 3 are not allowed inside Velvet/Velvet Suite auditoriums</label>
                                </div>
                                <div class="input-group">
                                    <input type="checkbox" name="agree2" id="agree6" />
                                    <label for="agree6">I understand with this that are allowed in 1 bed sofa only a maximum of 2 peoples</label>
                                </div>
                            </div>
                            <input type="hidden" id="payment-type" name="payment_type" value="cgvpoint" />
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="creditCard">
                        <form action="https://www.cgv.id/en/payment/credit_card" method="post">
                            <input type="hidden" name="_token" value="scg8p7SyjFOMkLNaRLkv3iyjwTsghmzUSeOe1enJ"> <input type="hidden" name="order_id" value="10182580" />
                            <div class="form-group cc_payment">
                                <div class="input-header">Credit Card</div>
                                <div class="input-group">
                                    <label for="cc_name">Fullname (As it appears on your card)</label>
                                    <input type="text" name="cc_firstname" id="cc_name" class="form-control" placeholder="Firstname" value="" />
                                    <input type="text" name="cc_lastname" id="cc_name" class="form-control" placeholder="Lastname" value="" />
                                </div>
                                <div class="input-group" style="position: relative; clear: both; top: 7px;">
                                    <label for="cc_no">Card Number / CVV</label>
                                    <input type="text" name="cc_no" id="cc_no" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX" value="" /> /
                                    <input type="password" name="cc_cvv" id="cc_cvv" class="form-control" placeholder="CVV" value="" />
                                    <div class="cc-partner-logo">
                                        <img src="https://cdn.cgv.id/assets/images/cc-partner-logo.png" />
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label for="cc_exp">Expiration date</label>
                                    <select name="cc_exp_month" class="form-control" id="cc_exp">
                                        <option value="">-- Select Month --</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <select name="cc_exp_year" class="form-control" id="cc_exp">
                                        <option value="">-- Select Year --</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                        <option value="2037">2037</option>
                                        <option value="2038">2038</option>
                                        <option value="2039">2039</option>
                                        <option value="2040">2040</option>
                                        <option value="2041">2041</option>
                                        <option value="2042">2042</option>
                                    </select>
                                </div>
                                <div class="spacer-30"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="form-group term">
                                <div class="input-group">
                                    <input type="checkbox" name="agree1" id="agree7" />
                                    <label for="agree7">I understand that children under 3 are not allowed inside Velvet/Velvet Suite auditoriums</label>
                                </div>
                                <div class="input-group">
                                    <input type="checkbox" name="agree2" id="agree8" />
                                    <label for="agree8">I understand with this that are allowed in 1 bed sofa only a maximum of 2 peoples</label>
                                </div>
                            </div>
                            <input type="hidden" id="payment-type" name="payment_type" value="creditCard" />
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="virtualAcc">
                        <form action="https://www.cgv.id/en/payment/virtual-account/pay" method="post">
                            <input type="hidden" name="_token" value="scg8p7SyjFOMkLNaRLkv3iyjwTsghmzUSeOe1enJ"> <input type="hidden" name="order_id" value="10182580" />
                            <div class="form-group cc_payment">
                                <div class="input-group-border">
                                    <label for="bankcd">Bank List</label>
                                    <select name="bankcd" id="bankcd">
                                        <option value=""> - Select VA Bank Account - </option>
                                        <option value="BBBA">Bank Permata</option>
                                        <option value="BDIN">Bank PT. BANK DANAMON INDONESIA, TBK</option>
                                        <option value="BMRI">Bank Mandiri</option>
                                        <option value="BNIA">Bank PT. BANK CIMB NIAGA, TBK.</option>
                                        <option value="BNIN">Bank Negara Indonesia 46</option>
                                        <option value="BRIN">Bank Rakyat Indonesia</option>
                                        <option value="CENA">Bank Central Asia</option>
                                        <option value="HNBN">Bank KEB Hana Indonesia</option>
                                        <option value="IBBK">Bank International Indonesia Maybank</option>
                                    </select>
                                </div>
                                <div class="input-group-border">
                                    <b>Note:</b>
                                    <ul class="payment-note">
                                        <li>Any bank virtual account can received transfer from any bank account except for Mandiri Bank.</li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="form-group term">
                                <div class="input-group">
                                    <input type="checkbox" name="agree1" id="agree9" />
                                    <label for="agree9">I understand that children under 3 are not allowed inside Velvet/Velvet Suite auditoriums</label>
                                </div>
                                <div class="input-group">
                                    <input type="checkbox" name="agree2" id="agree10" />
                                    <label for="agree10">I understand with this that are allowed in 1 bed sofa only a maximum of 2 peoples</label>
                                </div>
                            </div>
                            <input type="hidden" id="payment-type" name="payment_type" value="virtualAcc" />
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="others">
                        <form action="" method="post">
                            <div class="form-group others-payment">
                                <div class="input-header">Others</div>
                                <div class="others-payment-section">
                                    <input type="radio" name="payment_others" value="gopay" />
                                    <div class="others-logo">
                                        <img src="https://cdn.cgv.id/assets/images/gopay_icon.png" title="GO-PAY" />
                                    </div>
                                </div>
                                <hr />
                                <div class="others-payment-section">
                                    <input type="radio" name="payment_others" value="dana" />
                                    <div class="others-logo">
                                        <img src="https://cdn.cgv.id/assets/images/dana_icon.png" title="Dana" />
                                    </div>
                                </div>
                                <hr />
                                <div class="others-payment-section">
                                    <input type="radio" name="payment_others" value="kredivo" />
                                    <div class="others-logo">
                                        <img src="https://cdn.cgv.id/assets/images/logo-kredivo.png" title="Kredivo" />
                                    </div>
                                </div>
                                <hr />
                                <div class="others-payment-section">
                                    <input type="radio" name="payment_others" value="indodana" />
                                    <div class="others-logo">
                                        <img src="https://cdn.cgv.id/assets/images/payment/indodana.png" title="Indodana" />
                                    </div>
                                </div>
                                <hr />
                                <div class="spacer-30"></div>
                            </div>
                            <div class="form-group term">
                                <div class="input-group">
                                    <input type="checkbox" name="agree1" id="agree11" />
                                    <label for="agree11">I understand that children under 3 are not allowed inside Velvet/Velvet Suite auditoriums</label>
                                </div>
                                <div class="input-group">
                                    <input type="checkbox" name="agree2" id="agree12" />
                                    <label for="agree12">I understand with this that are allowed in 1 bed sofa only a maximum of 2 peoples</label>
                                </div>
                            </div>
                            <input type="hidden" id="payment-type" name="payment_type" value="others" />
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="couponFullPayment">
                        <form action="" method="post">
                            <div class="form-group term">
                                <div class="input-group">
                                    <input type="checkbox" name="agree1" id="agree13" />
                                    <label for="agree9">I understand that children under 3 are not allowed inside Velvet/Velvet Suite auditoriums</label>
                                </div>
                                <div class="input-group">
                                    <input type="checkbox" name="agree2" id="agree14" />
                                    <label for="agree10">I understand with this that are allowed in 1 bed sofa only a maximum of 2 peoples</label>
                                </div>
                            </div>
                            <input type="hidden" id="payment-type" name="payment_type" value="couponFullPayment" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="payment-sum-section">
            <div class="box-container">
                <div class="box-header">Total</div>
                <div class="box-body">Rp <span class="total-cost">35,000</span>,-</div>
            </div>
            <div class="box-container">
                <div class="box-header">Service</div>
                <div class="box-body">Rp <span class="service-cost">0</span>,-</div>
            </div>
            <div class="box-container">
                <div class="box-header">Discount<sup id="promo-name" class="hidden">-</sup></div>
                <div class="box-body">Rp <span class="discount-cost">0</span>,-</div>
            </div>
            <div class="box-container">
                <div class="box-header">Payment Fee</div>
                <div class="box-body">Rp <span class="fee-cost">0</span>,-</div>
            </div>
            <div class="box-container">
                <div class="box-header">Grand Total</div>
                <div class="box-body">Rp <span class="grand-cost">35,000</span>,-</div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="booking-info-seats-container">
        <div class="booking-info-seats-wrapper">
            <a href="https://www.cgv.id/en/payment/cancel_checkout/10182580/2023-05-22" class="seat-prev" id="cnx-book-cancel"><span>Cancel</span></a>
            <ul class="hidden">
                <li>
                    <div class="sum-booking-movie">
                        <div class="movie-thumb"></div>
                        <ul class="movie-info">
                            <li><span class="ticket-title">-</span></li>
                            <li>Audi: <span class="ticket-audi">-</span></li>
                            <li>Format: <span class="ticket-format">-</span></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="sum-booking-cinema">
                        <ul class="cinema-info">
                            <li>Location: <span class="ticket-cinema">-</span></li>
                            <li>Date: <span class="ticket-showdate">-</span></li>
                            <li>Time: <span class="ticket-showtime">-</span></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="sum-booking-seats">
                        <ul class="seats-info">
                            <li>Seats: <span class="ticket-seats-count">0</span></li>
                            <li>Seats No: <span class="ticket-seats-list">-</span></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="sum-booking-price">
                        <ul class="price-info">
                            <li>Total Rp <span class="total-cost">0</span>,-</li>
                        </ul>
                    </div>
                </li>
            </ul>
            <input type="submit" value="Proceed" class="seat-next" disabled />
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>


<!-- Start Age restriction modal -->
<div class="modal fade" id="age_restriction_modal" tabindex="-1" role="dialog" aria-labelledby="age_restriction_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="text-align: left;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="font: 14px Arial;">
                                Saya sudah setuju untuk mengikuti kebijakan:
                                <ul style="list-style-type:disc; margin:10px 30px;">
                                    <li><b>Telah mengunduh aplikasi PeduliLindungi dan mendapat kategori Kuning atau Hijau</b></li>
                                    <li><b>Pembatasan Usia</b></li>
                                    <li><b>Pembelian Makan & Minum</b></li>
                                </ul>
                                Sesuai dengan Peraturan Pemerintah Kota tempat saya tinggal.
                                <p style="margin-top:10px;">Tiket yang sudah dibeli tidak dapat dibatalkan.</p>
                            </h3>
                        </div>
                        <div class="spacer-10"></div>
                        <a href="https://www.cgv.id/en/events/detail/EV202109131400461469" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="disagreeAgeRestriction">Batal</button>
                <button type="button" class="btn btn-primary" id="agreeAgeRestriction">Beli Tiket</button>
            </div>
        </div>
    </div>
</div>
<!-- End Age restriction modal -->

<div class="modal fade" id="payment_modal" tabindex="-1" role="dialog" aria-labelledby="payment_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="padding:10px 20px;min-height:36.428571px;">
                <div class="modal-title"></div>
            </div>
            <div class="modal-body" style="text-align: left;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="qr-container" style="text-align: center;"></div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="col-md-12">
                            <h3 style="font-size: 16px;">1. Open <b id="app-name"></b> in your mobile phone</h3>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="col-md-12">
                            <h3 style="font-size: 16px;">2. Tap <b>&quot;Pay&quot;</b> then scan the QR Code below</h3>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="col-md-12">
                            <h3 style="font-size: 16px;">3. Check and verify your payment details then tap <b>&quot;PAY&quot;</b></h3>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="col-md-12">
                            <h3 style="font-size: 16px;">4. Enter your security <b>&quot;PIN&quot;</b></h3>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="col-md-12">
                            <h3 style="font-size: 16px;">5. Transaction finish and click <b>&quot;Check Transaction&quot;</b> button below to complete your payment.</h3>
                        </div>
                        <div class="spacer-10"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span id="modalTimeOut" style="float: left; font-size: 18px; line-height: 40px;">
                    <font>-</font>
                </span>
                <button type="button" id="cancel-trx-btn" class="btn btn-secondary">Cancel</button>
                <button type="button" id="check-trx-btn" class="btn btn-primary">Check Transaction</button>
            </div>
        </div>
    </div>
</div>