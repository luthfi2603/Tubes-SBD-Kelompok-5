<?php
    $id = $_GET['id'];
    $data = tampilkan("SELECT * FROM promotion WHERE promotion_id = $id")[0];
?>
<div class="main-body-container">
    <div class="body-wrapper">
        <div class="promo-list-wrapper">
            <div class="promo-section">
                <img class="banner-image" src="assets/images/<?= $data['promotion_img'] ?>">
                <div class="promo-body">
                    <h2><?= $data['promotion_title'] ?></h2>
                    <div class="promo-content">
                        <?= $data['promotion_content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>