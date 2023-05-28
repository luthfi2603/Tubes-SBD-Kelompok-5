<?php
    $data = tampilkan("SELECT * FROM movies");
?>
<div class="main-body-container skin">
    <div class="body-wrapper">
        <div class="movie-list-body">
            <ul>
                <?php foreach($data as $row) : ?>
                    <li><a href="/cgv?p=detail-movie&id=<?= $row['id'] ?>"><img class="lazy" src="assets/images/<?= $row['poster'] ?>" style="display: inline-block;"></a></li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="comingsoon-movie-list-body">
            <div class="comingsoon-movie-selection-header">
                <h2>comingsoon movie selection</h2>
            </div>
            <ul>
                <li><a href="https://www.cgv.id/en/movies/info/23010800"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23010800.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23011100"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23011100.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23011300"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23011300.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23011500"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23011500.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23011600"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23011600.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23011800/2023-05-31"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23011800.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23011900"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23011900.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23012300"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23012300.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23012400"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23012400.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23012500"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23012500.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23012600"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23012600.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23012800/2023-06-03"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23012800.jpg" style="display: inline-block;"></a></li>
                <li><a href="https://www.cgv.id/en/movies/info/23012900/2023-06-01"><img class="lazy" src="https://cdn.cgv.id/uploads/movie/compressed/23012900.jpg" style="display: inline-block;"></a></li>
            </ul>
        </div>
    </div>
</div>