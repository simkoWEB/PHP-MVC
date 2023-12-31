<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/laporan.css">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white 1.png">
    <style>
        .lunas-text {
            border: 1px solid #28a745;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            color: #28a745;
            font-weight: bold;
        }
    </style>
    <title><?php echo $data['judul']; ?></title>
</head>

<body>
    <section id="laporan" class="content">
        <div class="col-md-8e p-5">
            <div class="card-body bg-white p-4" style="border-radius: 18px;">


                <div class="cari-tanggal">
                    <form class="d-flex " action="http://localhost/PHP-MVC/public/Laporan/cariByTanggal" method="post">
                        <div class="label-input-group date1">
                            <label for="tanggal_awal">Tanggal Awal</label>
                            <input type="date" name="tanggal_awal" id="tanggal_awal">
                        </div>
                        <div class="label-input-group date2">
                            <label for="tanggal_akhir">Tanggal Akhir</label>
                            <input type="date" name="tanggal_akhir" id="tanggal_akhir">
                        </div>
                        <div class="label-input-group">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </form>

                </div>
                <table class="table table-hover small" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">No Transaksi</th>
                            <th scope="col">Nama Penghuni</th>
                            <th scope="col">Harga Kamar</th>
                            <th scope="col">Bayar</th>
                            <th scope="col">Tanggal Bayar</th>
                            <th scope="col">Bukti TF</th>
                            <!-- <th scope="col">Status</th> -->
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['laporan'] as $lprn) : ?>
                            <tr>
                                <td><?= $lprn['id_transaksi'] ?></td>
                                <td><?= $lprn['nama_lengkap'] ?></td>
                                <td><?= $lprn['harga'] ?></td>
                                <td><?= $lprn['bayar'] ?></td>
                                <td><?= $lprn['tggl_transaksi'] ?></td>
                                <td>
                                    <img src="bukti_transfer/<?= $lprn['foto_bukti_bayar']; ?>" style="width: 100px;">
                                </td>
                                <!-- <td><?= $lprn['status'] ?></td> -->
                                <td>
                                    <?php if ($lprn['status'] !== 'Lunas') : ?>
                                        <a class="btn_terima btn btn-success" href="<?php echo BASEURL; ?>Laporan/terima/<?php echo $lprn['id_transaksi']; ?>">
                                            <i class="ri-check-line"></i>
                                        </a>
                                    <?php else : ?>
                                        <p class="lunas-text">Lunas</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>