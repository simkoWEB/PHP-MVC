<!-- <div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <?php
            ini_set('display_errors', 1);
            $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
            echo "<h3>Hallo, Selamat Datang $username </h3><br>";
            ?>  
            <h5>Daftar Penghuni</h5>
            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formodal">
                Tambah
            </button>
            <a href="http://localhost/phpmvc/public/login/" class="btn btn-danger">
                Keluar
            </a><br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Penghuni</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Foto</th>
                        <th>AKsi</th>
                    </tr>
                </thead>
                <tbody> -->
<!-- <?php foreach ($data['penghuni'] as $png) : ?> -->
<!-- <tr>
                            <td><?php echo $png['nama_penghuni']; ?></td>
                            <td><?php echo $png['alamat']; ?></td>
                            <td><?php echo $png['jenis_kelamin']; ?></td>
                            <td><?php echo $png['agama']; ?></td>
                            <td><img src="http://localhost/phpmvc/public/public/image/<?php echo $png['foto']; ?>" alt="Foto Penghuni"></td>
                            <td>
                                <form method="POST" action="http://localhost/phpmvc/public/penghuni/deletePenghuni/<?php echo $png['id_Penghuni']; ?>">
                                    <button type="submit" onclick="return confirm('apakah ingin dihapus')" class="btn btn-danger">Hapus</button>
                                </form>
                                <a href="http://localhost/phpmvc/public/penghuni/editPenghuni/<?php echo $png['id_Penghuni']; ?>" class="btn btn-success">Edit</a>
                            </td>
                        </tr> -->
<!-- <?php endforeach; ?>  -->
<!-- </tbody>
        </div>
    </div> -->
<!-- Modal -->
<!-- <div class="modal fade" id="formodal" tabindex="-1" role="dialog" aria-labelledby="formodal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Penghuni</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="http://localhost/phpmvc/public/penghuni/addPenghuni" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_penghuni">Nama Penghuni</label>
                            <input type="text" class="form-control" id="nama_penghuni" name="nama_penghuni" placeholder="Masukkan Nama">
                        </div> -->
<!-- <div class="form-group">
                            <label for="nama">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggallhr" name="txtTglLahir">
                        </div> -->
<!-- <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                        </div>
                        <div class="form-check">
                            <label for="jenisKelmain">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdJK" id="jenisKelamin1" value="Laki-Laki">
                                <label class="form-check-label" for="jenisKelamin1">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdJK" id="jenisKelamin1" value="Laki-Laki">
                                <label class="form-check-label" for="jenisKelamin1">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Agama</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Khatolik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Foto</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section id="home" class="content">
        <div class="col-md-8e p-5">
            <div class="card-body bg-white p-4" style="border-radius: 18px;">
                <table class="table table-hover small" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kamar</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($data['penghuni'] as $d) :
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $d['nama_lengkap'] ?></td>
                                <td><?= $d['id_kamar'] ?></td>
                                <td><?= $d['jenis_kelamin'] ?></td>
                                <td><?= $d['no_hp'] ?></td>
                                <td><?= $d['alamat'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $d['id_user'] ?>"><i class="fa-solid fa-circle-info"></i></button>
                                    <form method="POST" action="http://localhost/PHP-MVC/public/penghuni/deletePenghuni/<?= $d['id_user']; ?>" style="display:inline;">
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus penghuni?')"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            include "modal.php";
                            $i++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>