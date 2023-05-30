<?php
    $jumlahDataPerHalaman = 5;
    $jumlahSemuaData = count(tampilkan("SELECT * FROM promotion"));
    $jumlahHalaman = ceil($jumlahSemuaData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["hal"])) ? $_GET["hal"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    $data = tampilkan("SELECT * FROM promotion LIMIT $awalData, $jumlahDataPerHalaman");
?>
<div class="main-body-container">
    <div class="body-wrapper">
        <div class="promo-list-wrapper">
            <?php foreach($data as $row) : ?>
                <div class="promo-section">
                    <a href="/cgv?p=detail-promotion&id=<?= $row['promotion_id'] ?>">
                        <img src="assets/images/<?= $row['promotion_img'] ?>">
                        <div class="promo-body">
                            <h2><?= $row['promotion_title'] ?></h2>
                            <div class="promo-more"> Read More</div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
            <nav aria-label="Page navigation" class="pull-right">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="
                            <?php
                                if($halamanAktif == 1){
                                    echo"javscript:void(0);";
                                }else{
                                    echo"?p=promotion&hal=".($halamanAktif - 1)."";
                                }
                            ?>
                        "><< Previous</a>
                    </li>
                    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                        <?php if($i == $halamanAktif) : ?>
                            <li class="page-item active">
                                <a href="javscript:void(0);"><?= $i ?></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item">
                                <a href="?p=promotion&hal=<?= $i ?>" class="page-link" rel="next"><?= $i ?></a>
                            </li>
                        <?php endif ?>
                    <?php endfor ?>
                    <li class="page-item">
                        <a href="
                            <?php
                                if($halamanAktif == $jumlahHalaman){
                                    echo"javscript:void(0);";
                                }else{
                                    echo"?p=promotion&hal=".($halamanAktif + 1)."";
                                }
                            ?>
                        " class="page-link">Next >></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>