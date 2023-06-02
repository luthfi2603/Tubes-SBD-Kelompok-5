<?php
    require "../includes/functions.php";
    if($_SESSION['level'] != 1){
        header('location: /cgv');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CGV Admin</title>
    <link rel="shortcut icon" href="../assets/icon/favicon.ico" type="image/x-icon">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>

<body>
    <?php include "./layouts/header.php" ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "./layouts/sidebar.php" ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?php include "./layouts/main.php" ?>
            </main>
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
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>