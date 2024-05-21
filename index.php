<?php
    // memasukkan file fungsi
    require "includes/functions.php";
    if(isset($_SESSION['level'])){
        if($_SESSION['level'] == 1){
            header('location: /cgv/admin');
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta itemprop="name" content="CGV Indonesia | Evolving beyond Movies">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="content-language" content="id, en">
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="must-revalidate, max-age=3600">
    <meta name="keywords" content="cgv, cgv indonesia, cultureplex, blitz, blitzmegaplex,movie,bioskop,cinema,ticket, film, premiere, velvet, 4dx, gold class, spherex, screenx, sweetbox, 3d">
    <meta name="description" content="CGV Indonesia - Evolving beyond Movies">
    <meta name="author" content="CGV">
    <meta name="copyright" content="2015 CJ CGV All Right Reserved">
    <title>CGV Cinemas</title>
    <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="./assets/images/apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="./assets/css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="./assets/css/flexslider.css" media="all">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap2.css" media="all">
    <link rel="stylesheet" type="text/css" href="./assets/css/seat.css" media="all">
    <script type="text/javascript" src="./assets/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-77119444-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }
        (window,
            document, 'script', '');
        fbq('init', '380888722260575'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <style>
        .cover_cinema {
            position: relative;
            height: 654px;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        }

        .price_section {
            background-color: black;
            position: absolute;
            bottom: 0;
            width: 96%;
            color: white;
            font-size: 12px;
            font-weight: bold;
            padding: 10px 20px;
        }

        .price_audi {
            padding: 0 10px;
            display: flex;
            align-items: center;
        }

        .audi-features-text {
            /* font-size: 1rem; */
            margin-right: 10px;
            margin-left: -10px;
        }

        .audi_image {
            float: left;
            padding: 0 5px;
        }

        .audi_image img {
            width: 65px;
            padding-right: 5px;
        }

        .audi_image img.sport-hall {
            width: 50px !important;
        }

        .price_section .price_group {
            padding: 0 10px;
        }

        .price_section .price_group .sub_group_price {
            margin-top: 10px;
        }

        table.table_price {
            line-height: 1.3;
        }

        table.table_price td {
            border: none !important;
            padding: 0px;
            color: white;
            font-weight: normal;
        }

        .column {
            float: left;
            width: 33%;
            padding-bottom: 10px;
        }

        .col-prices-cinema-sch {
            float: left;
            width: 70%;
        }

        .col-info-cinema-sch {
            float: left;
            width: 30%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .title-price-info {
            color: #ebeb85;
            font-weight: bold;
        }

        .double-dot-padding {
            padding: 0px 5px !important;
        }

        .legend-list {
            display: flex;
            align-items: center;
        }

        .seattype {
            display: inline-block;
        }

        h4.seat-legend-title {
            text-align: left;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .seat-legend-name {
            display: inline;
        }

        /* Accordion styles */
		.tabs {
			/* border-radius: 8px; */
			overflow: hidden;
			/* box-shadow: 0 4px 4px -2px rgba(0, 0, 0, 0.5); */
			padding-right: 5px;
			font-size: 16px;
		}

		.tab {
			width: 100%;
			/* color: white; */
			overflow: hidden;
			border-radius: 10px;
			margin-bottom: 10px;
			border: .5px solid #ababab;
		}

		.tab.active {
			border: .5px solid #e83f33!important;
		}

		.tab-label {
			display: flex;
			justify-content: space-between;
			padding: 1em;
			/* background: #333333; */
			font-weight: bold;
			cursor: pointer;
			/* Icon */
		}

		/* .tab-label:hover {
			background: #e83f33;
		} */

		.tab-label::after {
			content: "❯";
			width: 1em;
			height: 1em;
			text-align: center;
			transition: all 0.2s;
		}

		.tab-content {
			max-height: 0;
			padding: 0 1em;
			color: #333;
			background: transparent;
			transition: all 0.2s;
			text-align: left;
		}

		.tab-close,
		.tab-open {
			display: flex;
			justify-content: flex-end;
			padding: 1em;
			font-size: 0.75em;
			/* background: #e83f33; */
			cursor: pointer;
		}

		input:checked+.tab-label::after {
			transform: rotate(90deg);
		}

		input:checked~.tab-content {
			max-height: 100vh;
			padding: 1em;
		}

		.toggle-label {
			color: #000000;
		}

		.payment-options-check {
			position: absolute;
			opacity: 0;
			z-index: -1;
		}

		.list-decimal {
			list-style-type: decimal;
			font-size: 16px;
			padding-left: 30px;
			line-height: 30px;
		}

		.table-benefit {
			border-collapse: collapse;
  			width: 100%;
			font-size: 16px;
			color: #333;
		}

		.table-benefit td, .table-benefit th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		.table-benefit tr:nth-child(even){background-color: #f2f2f2;}

		.table-benefit tr:hover {background-color: #ddd;}

		.table-benefit th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #afafaf;
			color: black;
		}

		.section-title-crm {
			font-size: 35px;
			padding: 30px 10px;
			color: white;
			font-weight: 650;
		}

		#section-1 .section_1_content {
			background-image: url('./assets/images/CRM-Page-BG section 1.svg');
			background-repeat: no-repeat;
			background-size: cover;
			text-align: center;
			padding: 20px;
		}

		#section-1 .section_1_content .page_headline {
			margin-top: 10px;
		}
		#section-1 .section_1_content .pacowhell {
			margin-left: 30px;
		}
		#section-1 .section_1_content .wording {
			padding: 5px 150px;
			font-size: 25px;
			font-weight: 500;
			color: #2372b9;
		}
		#section-1 .section_1_content .button-action {
			padding: 10px 30px;
		}
		#section-1 .section_1_content .button-action button {
			padding: 20px 40px;
			font-size: 20px;
			border: none;
			border-radius: 40px;
			background-color: #e94154;
			color: white;
			box-shadow: 6px 6px 13px 0px #951422;
		}
		#section-1 .section_1_content .button-action button:hover {
			background-color: #b33141;
		}
		#section-1 .btn-download-app-section {
			padding: 10px 200px;
			margin-top: 20px;
			margin-bottom: 30px;
		}
		#section-1 .btn-download-app {
			padding: 0px 20px;
		}
		#section-2 .section_2_content {
			background-image: url('./assets/images/CRM-Page-BG section 2.png');
			background-repeat: no-repeat;
			background-size: cover;
			text-align: center;
			padding: 20px;
		}
		#section-2 .image-paconnie-section-2 img{
			height: 200px;
		}
		#section-2 .desc-paconnie-section-2 {
			font-size: 18px;
			font-weight: 500;
			color: white;
		}
		#section-2 .desc-paconnie-section-2 a{
			color: #2372b9;
		}
		#section-3 .section_3_content {
			background-image: url('./assets/images/CRM-Page-BG section3.png');
			background-repeat: no-repeat;
			background-size: cover;
			text-align: center;
			padding: 20px;
		}
		#section-3 .section-title-crm {
			color: #2372b9;
		}
		#section-4 .section_4_content {
			background-image: url('./assets/images/CRM-Page-BG section4.svg');
			background-repeat: no-repeat;
			background-size: cover;
			text-align: center;
			padding: 20px;
		}
		#section-4 .section-title-crm {
			color: #2372b9;
		}

		 .grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-gap: 2px;
            counter-reset: div;
        }

        /* spanning cols, complete values missing */

        .col-1 {
            grid-column: auto/span 1;
        }

        .col-2 {
            grid-column: auto/span 2;
        }

        .col-3 {
            grid-column: auto/span 3;
        }

        .col-4 {
            grid-column: auto/span 4;
        }

        .col-5 {
            grid-column: auto/span 5;
        }

        .col-6 {
            grid-column: auto/span 6;
        }

        .col-7 {
            grid-column: auto/span 7;
        }

        .col-8 {
            grid-column: auto/span 8;
        }

        .col-9 {
            grid-column: auto/span 9;
        }

        .col-10 {
            grid-column: auto/span 10;
        }

        .col-11 {
            grid-column: auto/span 11;
        }

        .col-12 {
            grid-column: auto/span 12;
        }
    </style>
</head>

<body>
    <div id="fb-root" class="fb_reset">
        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
        </div>
    </div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=670242266377326";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="main-container">
        <div class="main-wrapper">
            <?php
            // memasukkan navbar dan isi halaman
            include "inc/header.php";
            include "inc/main.php";
            include "inc/footer.php";
            ?>
        </div>
    </div>
    <script>
        <?php
            if($_GET){
                if(isset($_GET['cinema_id']) and isset($_GET['date'])){
                    echo"document.getElementById('schedule').scrollIntoView()";
                }else if(isset($_GET['cinema_id'])){
                    echo"document.getElementById('cinema').scrollIntoView()";
                }
            }
        ?>
    </script>
    <script type="text/javascript" src="./assets/js/jquery.lazy.min.js"></script>
    <script type='text/javascript'>
        $(".seat-conce").on("click", "#conceCheck", function() {
            if ($("#conceCheck").is(':checked'))
                $("form input[name=conce]").val("1");
            else
                $("form input[name=conce]").val("0");
        });

        $(".seat-next").on("click", function() {
            if (seats.length == 0) {
                alert("Please select your seat.");
                return false;
            }
        });

        var seats = [];

        const MOVIE_CD = '23009000';
        const MOVIE_CD_SPECIAL = '22000100'; // Movie code BTS

        function selectSeat(code) {
            var seatSelector = $("a[attr-code='" + code + "']");
            var seatGroupCode = seatSelector.attr("attr-grp-code");
            if (!seatSelector.hasClass('chosen')) {
                if (MOVIE_CD == MOVIE_CD_SPECIAL) { // For Movie BTS only
                    if (seats.length < 2) {
                        if (seatGroupCode != "") { // MULTIPLE SEATS
                            $("a[attr-grp-code='" + seatGroupCode + "']").each(function() {
                                var chosenSelector = $(this);
                                chosenSelector.addClass('chosen');
                                chosenSelector.attr("onclick", "removeSeat('" + chosenSelector.attr("attr-code") + "');");
                                seats.push({
                                    'id': chosenSelector.attr("id")
                                });
                                updatePrice(chosenSelector.attr("attr-price"), 'add');
                            });
                        } else {
                            /*REGULAR*/
                            seatSelector.addClass("chosen");
                            seatSelector.attr("onclick", "removeSeat('" + code + "')");
                            seats.push({
                                'id': seatSelector.attr("id")
                            });
                            updatePrice(seatSelector.attr("attr-price"), "add");
                        }
                    } else {
                        alert('Maximum 2 tickets per transaction');
                    }
                } else {
                    if (seats.length < 6) {
                        if (seatGroupCode != "") { // MULTIPLE SEATS
                            $("a[attr-grp-code='" + seatGroupCode + "']").each(function() {
                                var chosenSelector = $(this);
                                chosenSelector.addClass('chosen');
                                chosenSelector.attr("onclick", "removeSeat('" + chosenSelector.attr("attr-code") + "');");
                                seats.push({
                                    'id': chosenSelector.attr("id")
                                });
                                updatePrice(chosenSelector.attr("attr-price"), 'add');
                            });
                        } else {
                            /*REGULAR*/
                            seatSelector.addClass("chosen");
                            seatSelector.attr("onclick", "removeSeat('" + code + "')");
                            seats.push({
                                'id': seatSelector.attr("id")
                            });
                            updatePrice(seatSelector.attr("attr-price"), "add");
                        }
                    } else {
                        alert('You can choose maximum 6 seats.');
                    }
                }
            }

            $(".seats-count").html(seats.length);
            updateSeatsList(seats);

        }

        function removeSeat(code) {
            var seatSelector = $("a[attr-code='" + code + "']");
            var seatGroupCode = seatSelector.attr("attr-grp-code");
            if (seatSelector.hasClass('chosen')) {
                if (seatGroupCode != "") { // MULTIPLE SEATS
                    $("a[attr-grp-code='" + seatGroupCode + "']").each(function() {
                        var chosenSelector = $(this);
                        chosenSelector.removeClass('chosen');
                        chosenSelector.attr("onclick", "selectSeat('" + chosenSelector.attr("attr-code") + "');");
                        $.each(seats, function(index, value) {
                            for (key in value) {
                                if (value.hasOwnProperty(key) && value[key] == seatSelector.attr("id")) {
                                    seats.splice(index, 1);
                                } else if (value.hasOwnProperty(key) && value[key] == chosenSelector.attr("id")) {
                                    seats.splice(index, 1);
                                }
                            }
                        });
                        updatePrice(chosenSelector.attr("attr-price"), 'min');
                    });
                } else {
                    /*REGULAR*/
                    seatSelector.removeClass('chosen');
                    seatSelector.attr('onclick', "selectSeat('" + code + "')");
                    $.each(seats, function(index, value) {
                        for (key in value) {
                            if (value.hasOwnProperty(key) && value[key] == seatSelector.attr("id")) {
                                seats.splice(index, 1);
                            }
                        }
                    });
                    updatePrice(seatSelector.attr("attr-price"), 'min');
                }
            }

            $(".seats-count").html(seats.length);
            updateSeatsList(seats);
        }

        function updateSeatsList(seatList) {
            var labelList = [];
            if (seatList.length > 0) {
                $.each(seatList, function(key, val) {
                    labelList.push($("a#" + val.id).text());
                });

                $(".seats-list").html(labelList.join(";"));
            } else {
                $(".seats-list").html("-");
            }
        }

        function updatePrice(price, action) {
            var totalPrice = Number($(".seats-cost").html().replace(/[^0-9\.]+/g, ""));
            var unitPrice = parseInt(price);

            if (action == 'min')
                $(".seats-cost").html(accounting.formatMoney(totalPrice - unitPrice, " ", 0));
            else
                $(".seats-cost").html(accounting.formatMoney(totalPrice + unitPrice, " ", 0));

            $("input[name='seats']").val(JSON.stringify(seats));
            $("input[name='total']").val(totalPrice);
        }
    </script>
    <script>
        function playTrailer(videoId) {
            $(".trailer-section").html('<iframe width="560" height="315" src="' + videoId + '?autoplay=1" frameborder="0" gesture="media" allowfullscreen></iframe>');
        }

        $("a.active").on("click", function() {
            $("form").attr("action", "");
            $("form input[type='submit']").removeAttr('disabled');
            $("form input[name='schedule_time_id']").val($(this).attr("id"));
            $(".showtime-lists li").removeClass('on');
            $(this).parent().addClass('on');
            $("#sum-showtime").html($(this).html());
            $("#sum-suite").html($(this).attr("attr-fmt"));
            $("#sum-movie").html($(this).attr("attr-mov"));
            $("#sum-location").html($(this).attr("attr-that"));
            $('html, body').animate({
                scrollTop: $(".showtimes-sum").offset().top - 300
            }, 1000);
        });
    </script>
    <script type="text/javascript" src="./assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="./assets/js/accounting.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./assets/js/script2.js"></script>
</body>

</html>