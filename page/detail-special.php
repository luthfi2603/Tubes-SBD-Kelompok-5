<?php
    $id = $_GET['id'];
    $data = tampilkan("SELECT * FROM special WHERE special_id = $id")[0];
?>
<div class="main-body-container">
    <div class="body-wrapper">
        <div class="promo-list-wrapper">
            <div class="promo-section">
                <a href="#" class="href" target="__blank">
                    <img src="assets/images/<?= $data['content_img'] ?>" style="width:100%;">
                </a>
            </div>
        </div>
    </div>
</div>