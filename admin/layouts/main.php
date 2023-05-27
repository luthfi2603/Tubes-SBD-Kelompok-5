<?php
    if(@$_GET){
        switch($_GET["p"]){
            case"movies":
                include "page/movies.php";
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