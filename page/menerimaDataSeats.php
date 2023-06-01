<?php
    session_start();
    $schedule_time_id = $_POST['schedule_time_id'];
    $total = $_POST['total'];

    $seatsJson = $_POST['seats'];
    $seatsArray = json_decode($seatsJson, true);

    $seats = "";
    if($seatsArray){
        foreach($seatsArray as $seat){
            $id = $seat['id'];
            $seats .= $id . ", ";
        }
    }else{
        echo"Gagal mengurai JSON.";
    }
    $seats = rtrim($seats, ", ");

    $_SESSION['schedule_time_id'] = $schedule_time_id;
    $_SESSION['seats'] = $seats;
    $_SESSION['total'] = $total;
    echo"
        <script>
            document.location.href = '/cgv?p=payment';
        </script>
    ";
    die;
?>