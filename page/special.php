<?php
    $data = tampilkan("SELECT * FROM special");
?>
<div class="main-body-container">
    <div class="body-wrapper">
        <div class="content">
            <section>
                <div>
                    <?php foreach($data as $row) : ?>
                        <div class="special-audi-section">
                            <a href="/cgv?p=detail-special&id=<?= $row['special_id'] ?>">
                                <img src="assets/images/<?= $row['cover_img'] ?>">
                            </a>
                        </div>
                        <div class="special-audi-body">
                            <a href="/cgv?p=detail-special&id=<?= $row['special_id'] ?>">
                                <h4><?= $row['special_title'] ?></h4>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
        </div>
    </div>
</div>