<?php
    if($_GET){
        if(isset($_GET['cinema_id'])){
            if(isset($_GET['date'])){
                $cinema_id = $_GET['cinema_id'];
                $date = $_GET['date'];
                $data = tampilkan("
                    SELECT * 
                    FROM cinemas
                    WHERE cinema_id = ".$cinema_id."
                ");
                $data2 = tampilkan("SELECT COUNT(cinema_auditorium_name) AS jumlah_auditorium FROM cinema_auditoriums WHERE cinema_id = ".$cinema_id."");
                $data3 = tampilkan("
                    SELECT * 
                    FROM movies a
                    INNER JOIN schedules b ON a.movie_id = b.movie_id
                    WHERE b.date = '$date' AND b.cinema_id = ".$cinema_id."
                ");
                $dateString = $date;
                $date = strtotime($dateString);
                $formattedDate = date("D, d M Y", $date);
            }else{
                $cinema_id = $_GET['cinema_id'];
                $data = tampilkan("
                    SELECT * 
                    FROM cinemas
                    WHERE cinema_id = ".$cinema_id."
                ");
                $data2 = tampilkan("SELECT COUNT(cinema_auditorium_name) AS jumlah_auditorium FROM cinema_auditoriums WHERE cinema_id = ".$cinema_id."");
                $data3 = tampilkan("
                    SELECT * 
                    FROM movies a
                    INNER JOIN schedules b ON a.movie_id = b.movie_id
                    WHERE b.date = '2023-06-04' AND b.cinema_id = ".$cinema_id."
                ");
                $dateString = "2023-06-04";
                $date = strtotime($dateString);
                $formattedDate = date("D, d M Y", $date);
            }
        }else{
            $data = tampilkan("
                SELECT * 
                FROM cinemas
                WHERE cinema_id = 1
            ");
            $data2 = tampilkan("SELECT COUNT(cinema_auditorium_name) AS jumlah_auditorium FROM cinema_auditoriums WHERE cinema_id = 1");
            $data3 = tampilkan("
                SELECT * 
                FROM movies a
                INNER JOIN schedules b ON a.movie_id = b.movie_id
                WHERE b.date = '2023-06-04' AND b.cinema_id = 1
            ");

            $dateString = "2023-06-04";
            $date = strtotime($dateString);
            $formattedDate = date("D, d M Y", $date);
            $cinema_id = '1';
        }
    }
    $cities = tampilkan("SELECT * FROM cities ORDER BY city_name ASC");
?>
<div class="main-body-container skin">
    <div class="body-wrapper">
        <div class="sect-common">
            <div class="favorite-wrap">
                <h3 class="hidden">SHOWTIMES BY THEATERS</h3>
                <div class="sect-favorite">
                    <h4><img src="./assets/images/logo_small.png" alt="CGV Cinemas"></h4>
                </div>
                <div class="sect-city">
                    <ul>
                        <?php foreach ($cities as $city) : ?>
                            <?php $cinemas = tampilkan("SELECT * FROM cinemas WHERE city_id = " . $city['city_id'] . "") ?>
                            <li class="city">
                                <a href="javascript:void(0);"><?= $city['city_name'] ?></a>
                                <div class="area">
                                    <ul>
                                        <?php foreach ($cinemas as $cinema) : ?>
                                            <li class="on">
                                                <a title="<?= $cinema['cinema_name'] ?>" href="/cgv?p=cinema&cinema_id=<?= $cinema['cinema_id'] ?>" id="<?= $cinema['cinema_id'] ?>" class="cinema_fav">
                                                    <?= $cinema['cinema_name'] ?>
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cinema-info-wrapper" id="cinema">
            <div class="cinema-info-header">
                <h2>cinema info</h2>
            </div>
            <div class="cinema-info-body">
                <h4><?= $data[0]['cinema_name'] ?></h4>
                <div id="distance" style="text-align:center; font-size:15px; margin-bottom:10px"></div>
                <div class="cinema-info">
                    <div class="cover_cinema" style="background-image : url('assets/images/<?= $data[0]['cinema_cover'] ?>')">
                        <div class="price_section">
                            <div class="price_audi">
                                <div class="audi-features-text">
                                    Features : <?= $data2[0]['jumlah_auditorium'] ?> Auditoriums |
                                </div>
                                <div class="audi_image">
                                    <img src="./assets/images/GOLDCLASS.png" alt="Image GOLD CLASS">
                                </div>
                            </div>
                            <hr>
                            <div class="price_group">
                                TICKET PRICE
                                <div class="sub_group_price">
                                    <div class="row">
                                        <div class="col-prices-cinema-sch">
                                            <div class="row">
                                                <div class="column">
                                                    <div class="title-price-info">REGULAR</div>
                                                    <table class="table_price">
                                                        <tr>
                                                            <td>Mon-Thu</td>
                                                            <td class="double-dot-padding">:</td>
                                                            <td>Rp. 50.000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Friday</td>
                                                            <td class="double-dot-padding">:</td>
                                                            <td>Rp. 60.000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Weekend/Holiday</td>
                                                            <td class="double-dot-padding">:</td>
                                                            <td>Rp. 75.000</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="column">
                                                    <div class="title-price-info">GOLD CLASS</div>
                                                    <table class="table_price">
                                                        <tr>
                                                            <td>Mon-Thu</td>
                                                            <td class="double-dot-padding">:</td>
                                                            <td>Rp. 100.000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Friday</td>
                                                            <td class="double-dot-padding">:</td>
                                                            <td>Rp. 150.000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Weekend/Holiday</td>
                                                            <td class="double-dot-padding">:</td>
                                                            <td>Rp. 200.000</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-info-cinema-sch">
                                            <div class="title-price-info">
                                                <?= $data[0]['cinema_name'] ?>
                                            </div>
                                            <?= $data[0]['address'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="showtimes-wrapper" id="schedule">
            <h4>SCHEDULES <span>*Schedules are subject to change without prior notice</span></h4>
            <div class="sect-schedule">
                <div class="date-schedule">
                    <div class="item-wrap">
                        <ul class="slides item" style="width: 800px; height: 72px;">
                            <li>
                                <div class="day">
                                    <a href="
                                        <?php if(isset($_GET['cinema_id'])) : ?>
                                            /cgv?p=cinema&cinema_id=<?= $cinema_id ?>&date=2023-06-04
                                        <?php else : ?>
                                            /cgv?p=cinema&cinema_id=1&date=2023-06-04
                                        <?php endif ?>
                                    " id="load-schedule-date" date="2023-06-04">
                                        <span> Jun</span>
                                        <em>Sun</em>
                                        <strong>04</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="
                                        <?php if(isset($_GET['cinema_id'])) : ?>
                                            /cgv?p=cinema&cinema_id=<?= $cinema_id ?>&date=2023-06-05
                                        <?php else : ?>
                                            /cgv?p=cinema&cinema_id=1&date=2023-06-05
                                        <?php endif ?>
                                    " id="load-schedule-date" date="2023-06-05">
                                        <span> Jun</span>
                                        <em>Mon</em>
                                        <strong>05</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="btn-prev">View previous date</button>
                    <button type="button" class="btn-next">View Next Date</button>
                </div>
                <div class="clear"></div>
                <div class="schedule-container">
                    <div class="schedule-json">
                        <div class="schedule-section">
                            <div class="schedule-lists">
                                <ul>
                                    <?php foreach($data3 as $item) : ?>
                                        <?php
                                            $data4 = tampilkan("
                                                SELECT *
                                                FROM schedule_locations a
                                                INNER JOIN cinema_auditoriums b
                                                ON a.cinema_auditorium_id = b.cinema_auditorium_id
                                                WHERE a.schedule_id = ".$item['schedule_id']."
                                            ");
                                        ?>
                                        <li>
                                            <div class="schedule-title"><a href="/cgv?p=detail-movie&id=<?= $item['movie_id'] ?>"><?= $item['title'] ?></a> <span><?= $item['genre'] ?> / <?= $item['duration'] ?> </span></div>
                                            <ul>
                                                <?php foreach($data4 as $item2) : ?>
                                                    <?php
                                                        $data5 = tampilkan("
                                                            SELECT *
                                                            FROM schedule_locations a
                                                            INNER JOIN schedule_times b
                                                            ON a.schedule_location_id = b.schedule_location_id
                                                            WHERE a.schedule_location_id = ".$item2['schedule_location_id']."
                                                        ");
                                                    ?>
                                                    <li class="schedule-type">
                                                        <i class="fa fa-caret-right"></i> <?= $item2['type'] ?> <span class="audi-nm"><?= $item2['cinema_auditorium_name'] ?></span>
                                                    </li>
                                                    <li>
                                                        <ul class="showtime-lists">
                                                            <?php foreach($data5 as $item3) : ?>
                                                                <?php
                                                                    $time = strtotime($item3['time']);
                                                                    $formattedTime = date('H:i', $time);
                                                                ?>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="active" id="<?= $item3['schedule_time_id'] ?>" attr-mov="<?= $item['title'] ?>" attr-fmt="<?= $item2['type'] ?>"><?= $formattedTime ?></a>
                                                                </li>
                                                            <?php endforeach ?>
                                                        </ul>
                                                        <div class="clear"></div>
                                                    </li>
                                                <?php endforeach ?>
                                            </ul>
                                            <div class="clear"></div>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="showtimes-sum">
                        <div class="sum-text">
                            <font>SUMMARY :</font> Location: <span id="sum-location"><?= $data[0]['cinema_name'] ?></span> | Date: <span id="sum-showdate"><?= $formattedDate ?></span><br />
                            Movie: <span id="sum-movie">-</span> | Class: <span id="sum-suite">-</span> | Time: <span id="sum-showtime">-</span>
                        </div>
                        <form action="" method="GET">
                            <input type="hidden" name="p" value="seat">
                            <input type="hidden" name="schedule_time_id" value="">
                            <input type="submit" value="PICK YOUR SEATS" disabled>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>