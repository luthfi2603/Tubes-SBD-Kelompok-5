<?php
    $data = tampilkan("SELECT * FROM news");
    // echo"<pre>";
    // var_dump($data); die;
    // echo"</pre>";
?>
<div class="main-body-container">
    <div class="body-wrapper">
        <div class="promo-list-wrapper">
            <?php foreach($data as $row) : ?>
                <div class="promo-section">
                    <a href="/cgv?p=detail-news&id=<?= $row['news_id'] ?>">
                        <img src="assets/images/<?= $row['news_img'] ?>">
                        <div class="promo-body">
                            <h2><?= $row['news_title'] ?></h2>
                            <div class="promo-more">
                                Read More
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>