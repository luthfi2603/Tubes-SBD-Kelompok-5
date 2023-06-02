<?php
    $data = tampilkan("SELECT * FROM movies");
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Movies</h1>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Title</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Sensor Rating</th>
                <th scope="col">Bahasa</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Durasi</th>
                <th scope="col">Trailer</th>
                <th scope="col">Starring</th>
                <th scope="col">Director</th>
                <th scope="col">Genre</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($data as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="../assets/images/<?= $row['poster'] ?>" width="110px"></td>
                    <td><?= $row['title'] ?></td>
                    <td style="text-align: justify;">
                        <div style="height: 100px;overflow: hidden;">
                            <?= $row['description'] ?>
                        </div>
                    </td>
                    <td><?= $row['censor_rating'] ?></td>
                    <td><?= $row['language'] ?></td>
                    <td><?= $row['subtitle'] ?></td>
                    <td><?= $row['duration'] ?></td>
                    <td><img src="../assets/images/<?= $row['trailer'] ?>" width="110px"></td>
                    <td><?= $row['starring'] ?></td>
                    <td><?= $row['director'] ?></td>
                    <td><?= $row['genre'] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div>