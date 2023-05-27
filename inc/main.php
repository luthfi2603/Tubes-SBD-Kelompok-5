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
            case"promotion2":
                include "page/promotion2.php";
                break;
            case"promotion3":
                include "page/promotion3.php";
                break;
            case"promotion4":
                include "page/promotion4.php";
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
            case"snack":
                include "page/snack.php";
                break;
            case"concession":
                include "page/concession.php";
                break;
            case"seat":
                include "page/seat.php";
                break;
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
                    <div class="container mtNav">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center text-huruf">Halaman Tidak Ditemukan</h2>
                            </div>
                        </div>
                    </div>
                ';
                break;
        }
    }else{
        include "page/home.php";
    }
?>