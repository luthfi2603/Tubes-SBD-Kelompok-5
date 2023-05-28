<?php
    $id = $_GET['id'];
    $data = tampilkan("SELECT * FROM news WHERE news_id = $id")[0];
    // var_dump($id); die;
?>
<div class="main-body-container">
    <div class="body-wrapper">
        <div class="promo-list-wrapper">
            <div class="promo-section">
                <img class="banner-image" src="assets/images/<?= $data['news_img'] ?>">
                <div class="promo-body">
                    <h2><?= $data['news_title'] ?></h2>
                    <div class="promo-content" style="text-align: justify;font-size: large;line-height: 1.5;">
                        <?php if($data['news_id'] == 4) : ?>
                            <img src="assets/images/<?= $data['news_content'] ?>" alt="">
                        <?php else : ?>
                            <?= $data['news_content'] ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>