<?php
    if(@$_GET){
        switch($_GET["p"]){
            case"users":
                include 'users/akun.php';
                break;
            case"movies":
                include 'movies/index.php';
                break;
            case"edit-user":
                include 'users/ubah.php';
                break;
            case"tickets":
                include 'tickets/index.php';
                break;
            default:
                echo'
                    <h1>Halaman Tidak Ditemukan</h1>
                ';
                break;
        }
    }else{
        include "page/home.php";
    }
?>