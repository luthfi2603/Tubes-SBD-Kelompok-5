<?php
    $data = tampilkan("SELECT * FROM movies LIMIT 0, 5");
    $data2 = tampilkan("SELECT * FROM movies");
?>
<div class="main-body-container skin">
    <div class="body-wrapper">
        <div class="slider-wrapper">
            <section class="slider">
                <div class="slideshow" style="height:450px;">
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1000%; margin-left: -1460px;">
                            <?php $i = 1; ?>
                            <?php foreach($data as $row) : ?>
                                <li style="width: 730px; float: left; display: block;">
                                    <a href="/cgv?p=detail-movie&id=<?= $row['movie_id'] ?>" onclick="_gaq.push(['_trackEvent', 'slider', 'click', 'Slider 0'.<?= $i ?>.'']);" target="_blank">
                                        <img class="lazy" onload="_gaq.push(['_trackEvent', 'slider', 'impression', 'Slider 01']);" height="450" draggable="false" src="assets/images/<?= $row['trailer'] ?>" style="display: block;">
                                    </a>
                                </li>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <ul class="flex-direction-nav">
                        <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                        <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                    </ul>
                    <div class="flex-pauseplay"><a class="flex-pause">Pause</a></div>
                </div>
                <div class="slideshow-controls">
                    <ol class="flex-control-nav">
                        <li class=""></li>
                        <li class=""></li>
                        <li class="flex-active"></li>
                        <li class=""></li>
                        <li class=""></li>
                    </ol>
                </div>
            </section>
            <div class="slider-banner">
                <ul>
                    <li>
                        <a href="/cgv?p=detail-special&id=18" style="display: block; height: 140px; width: 240px; background-image: url('https://cdn.cgv.id/uploads/marketing/2210/BN202210241521524025.jpg');"></a>
                    </li>
                    <li>
                        <a href="/cgv?p=detail-special&id=17" style="display: block; height: 140px; width: 240px; background-image: url('https://cdn.cgv.id/uploads/marketing/2301/BN202301131030571731.jpg');"></a>
                    </li>
                    <li>
                        <a href="/cgv?p=detail-special&id=22" style="display: block; height: 152px; width: 240px; background-image: url('https://cdn.cgv.id/uploads/marketing/2211/BN202211151605207322.jpg');"></a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="movie-selection-wrapper">
            <div class="movie-selection-header">
                <h2>movie selection</h2>
            </div>
            <div class="movie-selection-body">
                <div class="carousel sel-body">
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 2400%; transition-duration: 0s; transform: translate3d(-1999px, 0px, 0px);">
                            <?php foreach($data2 as $row) : ?>
                                <li style="width: 240px; float: left; display: block;">
                                    <a href="/cgv?p=detail-movie&id=<?= $row['movie_id'] ?>">
                                        <img src="./assets/images/<?= $row['poster'] ?>" draggable="false">
                                    </a>
                                </li>
                            <?php endforeach ?>
                            <!-- <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/23011200"><img src="https://cdn.cgv.id/uploads/movie/compressed/23011200.jpg" draggable="false"></a></li>
                            <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/23009000"><img src="https://cdn.cgv.id/uploads/movie/compressed/23009000.jpg" draggable="false"></a></li>
                            <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/23009700"><img src="https://cdn.cgv.id/uploads/movie/compressed/23009700.jpg" draggable="false"></a></li>
                            <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/23010100"><img src="https://cdn.cgv.id/uploads/movie/compressed/23010100.jpg" draggable="false"></a></li>
                            <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/23007700"><img src="https://cdn.cgv.id/uploads/movie/compressed/23007700.jpg" draggable="false"></a></li>
                            <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/23008800"><img src="https://cdn.cgv.id/uploads/movie/compressed/23008800.jpg" draggable="false"></a></li>
                            <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/22012800"><img src="https://cdn.cgv.id/uploads/movie/compressed/22012800.jpg" draggable="false"></a></li>
                            <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/23006200"><img src="https://cdn.cgv.id/uploads/movie/compressed/23006200.jpg" draggable="false"></a></li>
                            <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/23010200"><img src="https://cdn.cgv.id/uploads/movie/compressed/23010200.jpg" draggable="false"></a></li>
                            <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/23010900"><img src="https://cdn.cgv.id/uploads/movie/compressed/23010900.jpg" draggable="false"></a></li>
                            <li style="width: 240px; float: left; display: block;"><a href="https://www.cgv.id/en/movies/info/23011000"><img src="https://cdn.cgv.id/uploads/movie/compressed/23011000.jpg" draggable="false"></a></li> -->
                        </ul>
                    </div>
                    <ol class="flex-control-nav flex-control-paging">
                        <li><a class="">1</a></li>
                        <li><a class="">2</a></li>
                        <li><a class="flex-active">3</a></li>
                    </ol>
                    <ul class="flex-direction-nav">
                        <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                        <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                    </ul>
                </div>
                <div class="carousel-nav">
                    <a href="" class="new-flex-next">n</a>
                    <a href="" class="new-flex-prev">p</a>
                </div>
            </div>
        </div>
    </div>
</div>