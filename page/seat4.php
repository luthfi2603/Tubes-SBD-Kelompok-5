<?php
    if(!isset($_SESSION['level'])){
        echo"
            <script>
                alert('Anda belum login, silahkan login terlebih dahulu');
                document.location.href = '?p=login';
            </script>
        ";
    }

    $schedule_time_id = $_GET['schedule_time_id'];
    $data = tampilkan("
        SELECT *
        FROM `schedule_times` a
        INNER JOIN `schedule_locations` b ON a.schedule_location_id = b.schedule_location_id
        INNER JOIN `cinema_auditoriums` c ON b.cinema_auditorium_id = c.cinema_auditorium_id
        INNER JOIN `schedules` d ON b.schedule_id = d.schedule_id
        INNER JOIN `movies` e ON d.movie_id = e.movie_id
        INNER JOIN `cinemas` f ON d.cinema_id = f.cinema_id
        WHERE a.schedule_time_id = ".$schedule_time_id."
    ");
    $dateString = $data[0]['date'];
    $date = strtotime($dateString);
    $formattedDate = date("D, d M Y", $date);
    $timeString = $data[0]['time'];
    $time = strtotime($timeString);
    $formattedTime = date('H:i', $time);
?>
<div class="main-body-container">
    <div class="body-wrapper">
        <div class="seats-wrapper">
            <div class="seats-header">
                <h4>People/Seats</h4>
                <span class="timer-countdown">Refresh in <font>-</font> seconds.</span>
                <a href="javascript:location.reload();" class="seats-reset">
                    <i class="fa fa-refresh"></i> Reset
                </a>
            </div>
            <div class="cnx-seats-section">
                <div class="audi-legend">
                    <h4 class="seat-legend-title">Seat Legend</h4>
                    <div class="legend-list">
                        <span class="seattype disabled" data-toggle="tooltip" title="Not Available"></span>
                        <div class="seat-legend-name">Not Available</div>
                    </div>
                    <div class="legend-list">
                        <span class="seattype" style="background:#745012" data-toggle="tooltip" title="Regular"></span>
                        <div class="seat-legend-name">Regular</div>
                    </div>
                </div>
                <div class="audi-screen">
                    <span>screen</span>
                </div>
                <div class="audi-seats">
                    <ul class="seat-row">
                        <li>
                            <a href="javascript:void(0);" class="seat_00200201" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('E8');" id="E8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="E8">
                                E8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200301" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('E7');" id="E7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="E7">
                                E7
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200501" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('E6');" id="E6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="E6">
                                E6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200601" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('E5');" id="E5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="E5">
                                E5
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200801" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('E4');" id="E4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="E4">
                                E4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200901" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('E3');" id="E3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="E3">
                                E3
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00201101" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('E2');" id="E2" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="E2">
                                E2
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00201201" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('E1');" id="E1" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="E1">
                                E1
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li>
                            <a href="javascript:void(0);" class="seat_00300201" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('D8');" id="D8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="D8">
                                D8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300301" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('D7');" id="D7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="D7">
                                D7
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300501" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('D6');" id="D6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="D6">
                                D6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300601" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('D5');" id="D5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="D5">
                                D5
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300801" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('D4');" id="D4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="D4">
                                D4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300901" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('D3');" id="D3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="D3">
                                D3
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00301101" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('D2');" id="D2" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="D2">
                                D2
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00301201" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('D1');" id="D1" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="D1">
                                D1
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li>
                            <a href="javascript:void(0);" class="seat_00400201" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('C8');" id="C8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="C8">
                                C8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400301" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('C7');" id="C7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="C7">
                                C7
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400501" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('C6');" id="C6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="C6">
                                C6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400601" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('C5');" id="C5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="C5">
                                C5
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400801" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('C4');" id="C4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="C4">
                                C4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400901" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('C3');" id="C3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="C3">
                                C3
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00401101" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('C2');" id="C2" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="C2">
                                C2
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00401201" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('C1');" id="C1" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="C1">
                                C1
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li>
                            <a href="javascript:void(0);" class="seat_00500201" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('B8');" id="B8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="B8">
                                B8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500301" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('B7');" id="B7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="B7">
                                B7
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500501" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('B6');" id="B6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="B6">
                                B6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500601" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('B5');" id="B5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="B5">
                                B5
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500801" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('B4');" id="B4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="B4">
                                B4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500901" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('B3');" id="B3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="B3">
                                B3
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00501101" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('B2');" id="B2" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="B2">
                                B2
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00501201" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('B1');" id="B1" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="B1">
                                B1
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li>
                            <a href="javascript:void(0);" class="seat_00600201" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('A8');" id="A8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="A8">
                                A8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600301" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('A7');" id="A7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="A7">
                                A7
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600501" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('A6');" id="A6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="A6">
                                A6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600601" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('A5');" id="A5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="A5">
                                A5
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600801" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('A4');" id="A4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="A4">
                                A4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600901" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('A3');" id="A3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="A3">
                                A3
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00601101" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('A2');" id="A2" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="A2">
                                A2
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00601201" style="background-color: #C0C081" attr-zone="Gold" onclick="selectSeat('A1');" id="A1" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="100000" attr-code="A1">
                                A1
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="booking-info-seats-container">
        <div class="booking-info-seats-wrapper">
            <a href="javascript:window.history.back();" class="seat-prev"><span>Previous</span></a>
            <ul>
                <li>
                    <div class="sum-booking-movie">
                        <div class="movie-thumb"><img src="assets/images/<?= $data[0]['poster'] ?>"></div>
                        <ul class="movie-info">
                            <li><span class="movie-title"><?= $data[0]['title'] ?></li>
                            <li>Regular</li>
                            <li>Category: <?= $data[0]['genre'] ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="sum-booking-cinema">
                        <ul class="cinema-info">
                            <li class="ellipsis-200">Cinema: <span class="cinema-title"><?= $data[0]['cinema_name'] ?></span></li>
                            <li>Date: <span class="cinema-showdate"><?= $formattedDate ?></span></li>
                            <li>Time: <span class="cinema-showdate"><?= $formattedTime ?></span></li>
                            <li>Screen: <span class="cinema-screen">Regular</span></li>
                            <li>Audi: <span class="cinema-screen"><?= $data[0]['cinema_auditorium_name'] ?></span></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="sum-booking-seats">
                        <ul class="seats-info">
                            <li>Seats: <span class="seats-count">0</span></li>
                            <li>Seats No: <span class="seats-list">-</span></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="sum-booking-price">
                        <ul class="price-info">
                            <li>Total Rp <span class="seats-cost">0</span>,-</li>
                        </ul>
                    </div>
                </li>
            </ul>
            <form action="page/menerimaDataSeats.php" method="POST">
                <input type="hidden" name="schedule_time_id" value="<?= $schedule_time_id ?>">
                <input type="hidden" name="total" value="">
                <input type="hidden" name="seats" value="">
                <input type="submit" value="Next" class="seat-next">
            </form>
            <div class="clear"></div>
        </div>
    </div>
</div>