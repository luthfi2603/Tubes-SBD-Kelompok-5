<?php
    if(isset($_SESSION['seats'])){
        $schedule_time_id = $_SESSION['schedule_time_id'];
        $seats = $_SESSION['seats'];
        $total = $_SESSION['total'];
        $data = tampilkan("
            SELECT *
            FROM schedule_times a
            INNER JOIN schedule_locations b ON a.schedule_location_id = b.schedule_location_id
            INNER JOIN cinema_auditoriums c ON b.cinema_auditorium_id = c.cinema_auditorium_id
            INNER JOIN seat_types d ON c.cinema_auditorium_id = d.cinema_auditorium_id
            INNER JOIN schedules e ON b.schedule_id = e.schedule_id
            WHERE a.schedule_time_id = ".$schedule_time_id."
        ");
        if($data[0]['date'] == '2023-06-04'){
            if($data[0]['seat_type_name'] == 'Regular'){
                $total += 75000;
            }else{
                $total += 200000;
            }
        }else{
            if($data[0]['seat_type_name'] == 'Regular'){
                $total += 50000;
            }else{
                $total += 100000;
            }
        }
        if(isset($_POST['proceed'])){
            $dibayar = $_POST['dibayar'];
            if($dibayar != $total){
                echo"
                    <script>
                        alert('Jumlah dibayar tidak sesuai dengan total');
                    </script>
                ";
            }else{
                $sql = "
                    INSERT INTO seats
                    (seat_type_id, seat_code, total)
                    VALUES
                    (
                        ".$data[0]['seat_type_id'].",
                        '".$seats."',
                        '".$total."'
                    )
                ";
                mysqli_query($conn, $sql);

                $data2 = mysqli_query($conn, "
                    SELECT seat_id FROM seats ORDER BY seat_id DESC LIMIT 1
                ");

                $data2 = mysqli_fetch_assoc($data2);
                
                $sql2 = "
                    INSERT INTO tickets
                    (schedule_time_id, user_id, seat_id, paid)
                    VALUES
                    (
                        ".$schedule_time_id.",
                        '".$_SESSION['id']."',
                        '".$data2['seat_id']."',
                        '1'
                    )
                ";
                mysqli_query($conn, $sql2);

                unset($_SESSION['schedule_time_id']);
                unset($_SESSION['seats']);
                unset($_SESSION['total']);

                echo"
                    <script>
                        document.location.href = '/cgv';
                    </script>
                ";
            }
        }
    }else{
        echo"
            <script>
                document.location.href = '?p=cinema';
            </script>
        ";
    }
?>
<div class="main-body-container">
    <form action="?p=payment" method="POST">
        <input type="hidden" name="p" value="payment">
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
                            <label for="pembayaran">Masukkan pembayaran</label>
                            <input name="dibayar" type="number" id="pembayaran" list="myCoupon" style="margin-left: 50px; width: 300px; padding: 6px 10px;">
                            <button name="proceed" type="submit">Bayar</button>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="payment-sum-section">
                <div class="box-container">
                    <div class="box-header">Total</div>
                    <div class="box-body">Rp <?= number_format($total, 0, '.', '.') ?></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="booking-info-seats-container">
            <div class="booking-info-seats-wrapper">
                <a href="javascript:window.history.back();" class="seat-prev" id="cnx-book-cancel"><span>Cancel</span></a>
                <div class="clear"></div>
            </div>
        </div>
    </form>
</div>
<div class="clear"></div>