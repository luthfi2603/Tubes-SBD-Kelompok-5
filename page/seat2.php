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
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J3');" id="J3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J3">
                                J3
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J4');" id="J4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J4">
                                J4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200601" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J5');" id="J5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J5">
                                J5
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200701" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J6');" id="J6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J6">
                                J6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J7');" id="J7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J7">
                                J7
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00200901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J8');" id="J8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J8">
                                J8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00201001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J9');" id="J9" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J9">
                                J9
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00201101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J10');" id="J10" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J10">
                                J10
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00201201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J11');" id="J11" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J11">
                                J11
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00201301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J12');" id="J12" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J12">
                                J12
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00201401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J13');" id="J13" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J13">
                                J13
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00201501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J14');" id="J14" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J14">
                                J14
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00201801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J17');" id="J17" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J17">
                                J17
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00201901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J18');" id="J18" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J18">
                                J18
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00202001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J19');" id="J19" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J19">
                                J19
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00202101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('J20');" id="J20" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="J20">
                                J20
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H3');" id="H3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H3">
                                H3
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H4');" id="H4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H4">
                                H4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300601" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H5');" id="H5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H5">
                                H5
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300701" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H6');" id="H6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H6">
                                H6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H7');" id="H7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H7">
                                H7
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00300901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H8');" id="H8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H8">
                                H8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00301001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H9');" id="H9" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H9">
                                H9
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00301101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H10');" id="H10" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H10">
                                H10
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00301201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H11');" id="H11" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H11">
                                H11
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00301301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H12');" id="H12" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H12">
                                H12
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00301401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H13');" id="H13" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H13">
                                H13
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00301501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H14');" id="H14" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H14">
                                H14
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00301801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H17');" id="H17" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H17">
                                H17
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00301901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H18');" id="H18" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H18">
                                H18
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00302001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H19');" id="H19" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H19">
                                H19
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00302101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('H20');" id="H20" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="H20">
                                H20
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G3');" id="G3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G3">
                                G3
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G4');" id="G4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G4">
                                G4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400601" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G5');" id="G5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G5">
                                G5
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400701" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G6');" id="G6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G6">
                                G6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G7');" id="G7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G7">
                                G7
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00400901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G8');" id="G8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G8">
                                G8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00401001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G9');" id="G9" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G9">
                                G9
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00401101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G10');" id="G10" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G10">
                                G10
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00401201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G11');" id="G11" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G11">
                                G11
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00401301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G12');" id="G12" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G12">
                                G12
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00401401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G13');" id="G13" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G13">
                                G13
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00401501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G14');" id="G14" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G14">
                                G14
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00401801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G17');" id="G17" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G17">
                                G17
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00401901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G18');" id="G18" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G18">
                                G18
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00402001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G19');" id="G19" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G19">
                                G19
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00402101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('G20');" id="G20" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="G20">
                                G20
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F3');" id="F3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F3">
                                F3
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F4');" id="F4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F4">
                                F4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500601" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F5');" id="F5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F5">
                                F5
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500701" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F6');" id="F6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F6">
                                F6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F7');" id="F7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F7">
                                F7
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00500901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F8');" id="F8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F8">
                                F8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00501001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F9');" id="F9" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F9">
                                F9
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00501101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F10');" id="F10" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F10">
                                F10
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00501201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F11');" id="F11" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F11">
                                F11
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00501301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F12');" id="F12" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F12">
                                F12
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00501401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F13');" id="F13" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F13">
                                F13
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00501501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F14');" id="F14" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F14">
                                F14
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00501801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F17');" id="F17" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F17">
                                F17
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00501901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F18');" id="F18" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F18">
                                F18
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00502001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F19');" id="F19" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F19">
                                F19
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00502101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('F20');" id="F20" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="F20">
                                F20
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E3');" id="E3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E3">
                                E3
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E4');" id="E4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E4">
                                E4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600601" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E5');" id="E5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E5">
                                E5
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600701" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E6');" id="E6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E6">
                                E6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E7');" id="E7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E7">
                                E7
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00600901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E8');" id="E8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E8">
                                E8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00601001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E9');" id="E9" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E9">
                                E9
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00601101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E10');" id="E10" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E10">
                                E10
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00601201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E11');" id="E11" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E11">
                                E11
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00601301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E12');" id="E12" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E12">
                                E12
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00601401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E13');" id="E13" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E13">
                                E13
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00601501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E14');" id="E14" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E14">
                                E14
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00601801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E17');" id="E17" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E17">
                                E17
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00601901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E18');" id="E18" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E18">
                                E18
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00602001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E19');" id="E19" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E19">
                                E19
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00602101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('E20');" id="E20" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="E20">
                                E20
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00700401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D3');" id="D3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D3">
                                D3
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00700501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D4');" id="D4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D4">
                                D4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00700601" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D5');" id="D5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D5">
                                D5
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00700701" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D6');" id="D6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D6">
                                D6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00700801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D7');" id="D7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D7">
                                D7
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00700901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D8');" id="D8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D8">
                                D8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00701001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D9');" id="D9" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D9">
                                D9
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00701101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D10');" id="D10" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D10">
                                D10
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00701201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D11');" id="D11" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D11">
                                D11
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00701301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D12');" id="D12" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D12">
                                D12
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00701401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D13');" id="D13" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D13">
                                D13
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00701501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D14');" id="D14" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D14">
                                D14
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00701801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D17');" id="D17" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D17">
                                D17
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00701901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D18');" id="D18" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D18">
                                D18
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00702001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D19');" id="D19" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D19">
                                D19
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00702101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('D20');" id="D20" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="D20">
                                D20
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li>
                            <a href="javascript:void(0);" class="seat_00800201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C1');" id="C1" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C1">
                                C1
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00800301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C2');" id="C2" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C2">
                                C2
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00800401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C3');" id="C3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C3">
                                C3
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00800501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C4');" id="C4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C4">
                                C4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00800601" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C5');" id="C5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C5">
                                C5
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00800701" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C6');" id="C6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C6">
                                C6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00800801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C7');" id="C7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C7">
                                C7
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00800901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C8');" id="C8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C8">
                                C8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00801001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C9');" id="C9" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C9">
                                C9
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00801101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C10');" id="C10" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C10">
                                C10
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00801201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C11');" id="C11" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C11">
                                C11
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00801301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C12');" id="C12" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C12">
                                C12
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00801401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C13');" id="C13" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C13">
                                C13
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00801501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C14');" id="C14" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C14">
                                C14
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00801801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C17');" id="C17" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C17">
                                C17
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00801901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C18');" id="C18" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C18">
                                C18
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00802001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C19');" id="C19" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C19">
                                C19
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00802101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('C20');" id="C20" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="C20">
                                C20
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li>
                            <a href="javascript:void(0);" class="seat_00900201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B1');" id="B1" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B1">
                                B1
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00900301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B2');" id="B2" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B2">
                                B2
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00900401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B3');" id="B3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B3">
                                B3
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00900501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B4');" id="B4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B4">
                                B4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00900601" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B5');" id="B5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B5">
                                B5
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00900701" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B6');" id="B6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B6">
                                B6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00900801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B7');" id="B7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B7">
                                B7
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00900901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B8');" id="B8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B8">
                                B8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00901001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B9');" id="B9" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B9">
                                B9
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00901101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B10');" id="B10" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B10">
                                B10
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00901201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B11');" id="B11" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B11">
                                B11
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00901301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B12');" id="B12" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B12">
                                B12
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00901401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B13');" id="B13" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B13">
                                B13
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00901501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B14');" id="B14" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B14">
                                B14
                            </a>
                        </li>
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00901801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B17');" id="B17" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B17">
                                B17
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00901901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B18');" id="B18" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B18">
                                B18
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00902001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B19');" id="B19" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B19">
                                B19
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_00902101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('B20');" id="B20" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="B20">
                                B20
                            </a>
                        </li>
                    </ul>
                    <ul class="seat-row">
                        <li>
                            <a href="javascript:void(0);" class="seat_01000201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A1');" id="A1" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A1">
                                A1
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01000301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A2');" id="A2" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A2">
                                A2
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01000401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A3');" id="A3" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A3">
                                A3
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01000501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A4');" id="A4" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A4">
                                A4
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01000601" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A5');" id="A5" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A5">
                                A5
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01000701" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A6');" id="A6" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A6">
                                A6
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01000801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A7');" id="A7" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A7">
                                A7
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01000901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A8');" id="A8" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A8">
                                A8
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01001001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A9');" id="A9" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A9">
                                A9
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01001101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A10');" id="A10" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A10">
                                A10
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01001201" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A11');" id="A11" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A11">
                                A11
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01001301" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A12');" id="A12" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A12">
                                A12
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01001401" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A13');" id="A13" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A13">
                                A13
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01001501" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A14');" id="A14" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A14">
                                A14
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01001601" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A15');" id="A15" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A15">
                                A15
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01001701" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A16');" id="A16" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A16">
                                A16
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01001801" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A17');" id="A17" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A17">
                                A17
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01001901" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A18');" id="A18" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A18">
                                A18
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01002001" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A19');" id="A19" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A19">
                                A19
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="seat_01002101" style="background-color: #745012" attr-zone="Regular" onclick="selectSeat('A20');" id="A20" attr-grp-code="" attr-grd="00" attr-trtr="00" attr-price="50000" attr-code="A20">
                                A20
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