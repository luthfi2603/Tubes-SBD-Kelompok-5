<?php
    if(@$_GET){
        switch($_GET["p"]){
            case"movies":
                include "page/movies.php";
                break;
            case"cinema":
                include "page/cinemas.php";
                break;
            case"promotion":
                include "page/promotion.php";
                break;
            case"login":
                include "page/login.php";
                break;
            case"register":
                include "page/register.php";
                break;
            case"news":
                include "page/news.php";
                break;
            case"membership":
                include "page/membership.php";
                break;
            case"special":
                include "page/special.php";
                break;
            case"detail-movie":
                include "page/detail-movie.php";
                break;
            case"profil":
                include "page/profil.php";
                break;
            case"seat":
                $schedule_time_id = $_GET['schedule_time_id'];
                $data = tampilkan("
                    SELECT *
                    FROM schedule_times a
                    INNER JOIN schedule_locations b ON a.schedule_location_id = b.schedule_location_id
                    INNER JOIN cinema_auditoriums c ON b.cinema_auditorium_id = c.cinema_auditorium_id
                    INNER JOIN seat_types d ON c.cinema_auditorium_id = d.cinema_auditorium_id
                    INNER JOIN schedules e on b.schedule_id = e.schedule_id
                    WHERE a.schedule_time_id = ".$schedule_time_id."
                ");
                if($data[0]['seat_type_name'] == 'Regular'){
                    if($data[0]['date'] == '2023-06-04'){
                        include "page/seat.php";
                        break;
                    }else{
                        include "page/seat2.php";
                        break;
                    }
                }else{
                    if($data[0]['date'] == '2023-06-04'){
                        include "page/seat3.php";
                        break;
                    }else{
                        include "page/seat4.php";
                        break;
                    }
                }
            case"payment":
                include "page/payment.php";
                break;
            case"edit-profil":
                include "page/edit-profil.php";
                break;
            case"detail-promotion":
                include "page/detail-promotion.php";
                break;
            case"detail-special":
                include "page/detail-special.php";
                break;
            case"detail-news":
                include "page/detail-news.php";
                break;
            case"logout":
                include "includes/logout.php";
                break;
            default:
                echo'
                    <h1 style="font-size:2em;font-weight:bold;margin:2.5rem 0;padding:0 530px;">404 Halaman Tidak Ditemukan</h1>
                ';
                break;
        }
    }else{
        include "page/home.php";
    }
?>