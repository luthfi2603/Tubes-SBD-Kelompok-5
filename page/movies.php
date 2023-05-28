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
    </div>
</div>