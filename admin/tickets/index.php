<?php
    $data = tampilkan("
        SELECT *
        FROM tickets a
        INNER JOIN users b ON a.user_id = b.id
        INNER JOIN seats c ON a.seat_id = c.seat_id
        INNER JOIN schedule_times d ON a.schedule_time_id = d.schedule_time_id
        INNER JOIN schedule_locations e ON d.schedule_location_id = e.schedule_location_id
        INNER JOIN schedules f ON e.schedule_id = f.schedule_id
        INNER JOIN cinemas g ON f.cinema_id = g.cinema_id
        INNER JOIN cinema_auditoriums h ON e.cinema_auditorium_id = h.cinema_auditorium_id
        ORDER BY a.ticket_id DESC
    ");
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tickets</h1>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Cinema</th>
                <th scope="col">Auditorium</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Seat Code</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $item) : ?>
                <tr>
                    <td><?= $item['ticket_id'] ?></td>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['cinema_name'] ?></td>
                    <td><?= $item['cinema_auditorium_name'] ?></td>
                    <td><?= $item['date'] ?></td>
                    <td><?= $item['seat_code'] ?></td>
                    <td>Rp <?= number_format($item['total'], 0, '.', '.') ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>