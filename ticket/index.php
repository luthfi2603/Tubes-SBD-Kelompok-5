<?php
    require "../includes/functions.php";
    if(!isset($_SESSION['ticket_id'])){
        echo"
            <script>
                document.location.href = '/cgv';
            </script>
        ";
    }
    
    $ticket_id = $_SESSION['ticket_id'];
    $data = tampilkan("
        SELECT *
        FROM tickets a
        INNER JOIN seats b ON a.seat_id = b.seat_id
        INNER JOIN schedule_times c ON a.schedule_time_id = c.schedule_time_id
        INNER JOIN schedule_locations d ON c.schedule_location_id = d.schedule_location_id
        INNER JOIN cinema_auditoriums e ON d.cinema_auditorium_id = e.cinema_auditorium_id
        INNER JOIN schedules f ON d.schedule_id = f.schedule_id
        INNER JOIN movies g ON f.movie_id = g.movie_id
        INNER JOIN cinemas h ON f.cinema_id = h.cinema_id
        WHERE a.ticket_id = ".$ticket_id."
    ")[0];
    $dateString = $data['date'];
    $date = strtotime($dateString);
    $formattedDate = date("D, d M Y", $date);
    $timeString = $data['time'];
    $time = strtotime($timeString);
    $formattedTime = date('H:i', $time);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV | Ticket</title>
    <link rel="shortcut icon" href="../assets/icon/favicon.ico" type="image/x-icon">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-end my-4">
                    <button class="btn btn-primary" onclick="PrintDiv('divToPrint')">Print</button>
                    <a href="/cgv" class="btn btn-outline-primary ms-2">Selesai</a>
                </div>
                <div id="divToPrint">
                    <div class="card mx-auto col-5">
                        <div class="card-body px-5">
                            <h5 class="card-title text-center">CGV*<?= $data['cinema_name'] ?></h5>
                            <h3 class="card-title"><?= $data['title'] ?></h3>
                            <div class="row mb-1">
                                <span class="text-muted">
                                    Show Date : <span class="text-dark"><?= $formattedDate ?></span>
                                </span>
                            </div>
                            <div class="row mb-1">
                                <span class="text-muted">
                                    Show Time : <b class="text-dark"><?= $formattedTime ?></b> &nbsp;&nbsp; <b class="text-dark"><?= $data['type'] ?></b>
                                </span>
                            </div>
                            <div class="row mb-1">
                                <span class="text-muted">
                                    Ticket JW : <span class="text-dark">Rp <?= number_format($data['total'], 0, '.', '.') ?></span>
                                </span>
                            </div>
                            <div class="row mb-1">
                                <span class="text-muted">
                                    Seat Code : <b class="text-dark"><?= $data['seat_code'] ?></b>
                                </span>
                            </div>
                            <div class="row mb-1">
                                <span class="text-muted">
                                    Audi : <b class="text-dark"><?= $data['cinema_auditorium_name'] ?></b>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function PrintDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var orginialContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = orginialContents;
        }
    </script>
</body>

</html>