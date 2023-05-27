<?php
    // memasukkan file fungsi
    require "includes/functions.php";
    if(isset($_SESSION['level'])){
        if($_SESSION['level'] == 1){
            header('location: /cgv/admin');
        }
    }
    // var_dump($_SESSION);
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
    <link rel="apple-touch-icon" href="https://www.cgv.id/apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.cgv.id/assets/css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.cgv.id/assets/global/plugins/font-awesome/css/font-awesome.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.cgv.id/assets/css/style.css?v=0.0.68" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.cgv.id/assets/css/plugins/flexslider.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.cgv.id/assets/css/bootstrap.css?v=0.0.1" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.cgv.id/assets/css/seat.css?v=0.0.3" media="all">
    <!-- <link rel="stylesheet" href="./assets/css/bootstrap.css"> -->
    <script type="text/javascript" async src="https://ssl.google-analytics.com/ga.js"></script>
    <script type="text/javascript" src="https://cdn.cgv.id/assets/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': 'UU3iQ308T0Yx23sAYEbb3NAsM42QKcitojKJcpCX'
            }
        });
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-77119444-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
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
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '380888722260575'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript>
        "<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=380888722260575&ev=PageView&noscript=1" />"
    </noscript>
    <script data-ad-client="ca-pub-1505511952227201" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" data-checked-head="true"></script>
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(setCookie, showError);
            }
        }

        function setCookie(position) {
            var exdays = 15;
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = "locationlat=" + position.coords.latitude + ";" + expires + ";path=/";
            document.cookie = "locationlong=" + position.coords.longitude + ";" + expires + ";path=/";

        }

        function unsetCookie() {
            document.cookie = "locationlat=; expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
            document.cookie = "locationlong=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }

        function showError(error) {
            if (error.code == error.PERMISSION_DENIED || error.code == error.POSITION_UNAVAILABLE || error.code == error.TIMEOUT || error.code == error.UNKNOWN_ERROR) {
                unsetCookie();
            }
        }
        getLocation();
    </script>
    <script type="text/javascript" async src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/852877016/?random=1681526073796&cv=9&fst=1681526073796&num=1&guid=ON&resp=GooglemKTybQhCsO&eid=375603260%2C466465925%2C512247838&u_h=900&u_w=1440&u_ah=852&u_aw=1440&u_cd=24&u_his=3&u_tz=420&u_java=false&u_nplug=5&u_nmime=2&sendb=1&ig=1&frm=0&url=https%3A%2F%2Fwww.cgv.id%2Fen%2Fmovies%2Fnow_playing&ref=https%3A%2F%2Fwww.cgv.id%2Fen%2Fuser%2Flogin&tiba=Movies%20-%20CGV%20Cinemas&hn=www.googleadservices.com&rfmt=3&fmt=4">
    </script>
    <link rel="preload" href="https://adservice.google.co.id/adsid/integrator.js?domain=www.cgv.id" as="script">
    <script type="text/javascript" src="https://adservice.google.co.id/adsid/integrator.js?domain=www.cgv.id"></script>
    <link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.cgv.id" as="script">
    <script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.cgv.id"></script>
    <style>
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
            border: .5px solid #e83f33 !important;
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

        /* .tab-content {
            max-height: 0;
            padding: 0 1em;
            color: #333;
            background: transparent;
            transition: all 0.2s;
        } */

        .tab-close,
        .tab-open {
            display: flex;
            justify-content: flex-end;
            padding: 1em;
            font-size: 0.75em;
            /* background: #e83f33; */
            cursor: pointer;
        }

        /* .tab-close:hover {
			background: #1a252f;
		} */

        /* input:checked+.tab {
			border: .5px solid #e83f33!important;
		} */

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

        .table-benefit td,
        .table-benefit th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table-benefit tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-benefit tr:hover {
            background-color: #ddd;
        }

        .table-benefit th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #afafaf;
            color: black;
        }

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
    <script type="text/javascript" src="https://cdn.cgv.id/assets/js/plugins/jquery.lazy.min.js"></script>
    <script>
        $(function() {
            $.ajax({
                type: 'POST',
                url: 'https://www.cgv.id/en/loader/home_movie_list',
                success: function(data) {
                    $('.movie-list-body').html(data.now_playing);
                    $('.comingsoon-movie-list-body').html(data.comingsoon);

                    $('.lazy').lazy({
                        threshold: 0,
                        onError: function(element) {
                            console.log('error loading poster movie');
                        }
                    });
                }
            });
        });
    </script>
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
        }
    </script>
    <script>
        function playTrailer(videoId) {
            $(".trailer-section").html('<iframe width="560" height="315" src="' + videoId + '?autoplay=1" frameborder="0" gesture="media" allowfullscreen></iframe>');
        }

        $("a.active").on("click", function() {
            $("form").attr("action", "https://www.cgv.id/en/schedule/view_seat_layout" + "/" + $(this).attr("id"));
            $("form input[type='submit']").removeAttr('disabled');
            $("form input[name='cinema']").val($(this).attr("attr-that-cd"));
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
    <script type="text/javascript" src="https://cdn.cgv.id/assets/js/plugins/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="https://cdn.cgv.id/assets/js/plugins/accounting.js"></script>
    <script type="text/javascript" src="https://cdn.cgv.id/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.cgv.id/assets/js/script.js?v=0.0.19"></script>
    <ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;" data-ad-status="unfilled">
        <div id="aswift_0_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;">
            <iframe id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="./Movies - CGV Cinemas_files/ads(4).html" data-google-container-id="a!1" data-load-complete="true"></iframe>
        </div>
    </ins>
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 852877016;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        goog_snippet_vars = function() {
            var w = window;
            w.google_conversion_id = 852877016;
            w.google_conversion_label = "ute7CPmUnHMQ2L3XlgM";
            w.google_remarketing_only = false;
        }
        // DO NOT CHANGE THE CODE BELOW.
        goog_report_conversion = function(url) {
            goog_snippet_vars();
            window.google_conversion_format = "3";
            var opt = new Object();
            opt.onload_callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            }
            var conv_handler = window['google_trackConversion'];
            if (typeof(conv_handler) == 'function') {
                conv_handler(opt);
            }
        }
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js"></script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/852877016/?guid=ON&amp;script=0" />
        </div>
    </noscript>
    <iframe src="./Movies - CGV Cinemas_files/aframe.html" width="0" height="0" style="display: none;"></iframe>
</body>
<iframe id="google_esf" name="google_esf" src="./Movies - CGV Cinemas_files/zrt_lookup.html" style="display: none;"></iframe>

</html>