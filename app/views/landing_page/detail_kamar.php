<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/detail_kamar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white 1.png">
    <title>Halaman Kamar</title>
</head>

<body>
    <nav>
        <div class="title-navbar">
            <img src="http://localhost/PHP-MVC/public/image/logo-jkost.png" alt="">
        </div>
        <div class="link-navbar">
            <ul>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Testimoni</a>
                <a href="">Cari Kost</a>
                <a href="" class="link-login">Masuk</a>
            </ul>
        </div>
    </nav>

    <section id="detail_kamar">
        <div class="halaman">
            <p><i class="ri-home-8-fill"></i>Home > Kost Marno > Kamar 3</p>
        </div>
        <div id="kumpulan-foto-kamar">
            <img class="main-foto" src="http://localhost/PHP-MVC/public/image/kamar/kamar-hotel.jpg" alt="">
            <div class="right-foto-kamar">
                <img src="http://localhost/PHP-MVC/public/image/kamar/kamar-hotel.jpg" alt="">
                <img src="http://localhost/PHP-MVC/public/image/kamar/kamar-hotel.jpg" alt="">
            </div>
        </div>
        <div id="content-kamar">
            <div class="right-content-kamar">
                <div class="judul-kost">
                    <?php if (isset($_GET['id'])) : ?>
                        <h2>Kost Marno Kamar <?php echo $_GET['id']; ?></h2>
                    <?php endif; ?>
                    <p><i class="ri-map-pin-2-fill"></i> <?php echo $data['kamar']['alamat']; ?></p>
                </div>
                <div class="pengelola-kost">
                    <h5>Dikelola Oleh: <?php echo $data['kamar']['id_user']; ?> </h5>
                </div>
                <div class="fasilitas-kamar">
                    <p class="judul-fasilitas">Fasilitas Kamar</p>
                    <div class="kumpulan-fasilitas">
                        <p><i class="ri-hotel-bed-fill"></i><?php echo $data['kamar']['fasilitas']; ?></p>
                    </div>
                </div>

                <div class="spesifikasi-kamar">
                    <p class="judul-fasilitas">Spesifikasi Kamar</p>
                    <div class="kumpulan-fasilitas">
                        <p><i class="ri-hotel-bed-fill"></i><?php echo $data['kamar']['ukuran']; ?></p>
                    </div>
                </div>

                <div class="peraturan-kost">
                    <p class="judul-fasilitas">Peraturan Kost</p>
                    <div class="kumpulan-fasilitas">
                        <p><i class="ri-hotel-bed-fill"></i><?php echo $data['kamar']['peraturan_kost']; ?></p>
                    </div>
                </div>
            </div>
            <div class="left-content-kamar">
                <div class="harga-kost">
                    <p>Diskon 100rb <span>Rp 1.350.000</span></p>
                    <h2 id="harga-display">Rp <?php echo $data['kamar']['harga_bulanan']; ?> <span>(Per Bulan)</span></h2>
                    <div class="input-rentang-kost">
                        <select id="pilihan-harga">
                            <option value="harian">Harian</option>
                            <option value="bulanan">1 Bulan</option>
                            <option value="3bulan">3 Bulan</option>
                            <option value="tahunan">1 Tahun</option>
                        </select>
                        <p> - </p>
                        <input type="date" name="tanggal_masuk" id="input-harga-akhir">
                    </div>
                    <a href="http://localhost/PHP-MVC/public/landing_page/pemesanan">Pesan Sekarang</a>
                </div>
                <!-- <div class="review-kost">
                    <p class="grand-review"><i class="ri-star-fill"></i> 4.5 (8 Review)</p>
                    <div class="sub-review">
                        <p>Kebersihan</p>
                        <div class="star-sub-review">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <p>5.0</p>
                        </div>
                    </div>
                    <div class="sub-review">
                        <p>Kenyamanan</p>
                        <div class="star-sub-review">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <p>5.0</p>
                        </div>
                    </div>
                    <div class="sub-review">
                        <p>Keamananan</p>
                        <div class="star-sub-review">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <p>5.0</p>
                        </div>
                    </div>
                    <div class="sub-review">
                        <p>Fasilitas</p>
                        <div class="star-sub-review">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <p>5.0</p>
                        </div>
                    </div>
                </div> -->
                <div class="maps-kost">
                    <?php if (!empty($data['kamar'])) : ?>
                        <iframe src="https://maps.google.com/maps?q=<?= $data['kamar']['latitude'] ?>,<?= $data['kamar']['longitude'] ?>&hl=es;z=14&amp;output=embed" width="100%" height="350" style="border:0; margin-top:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    <?php else : ?>
                        <p>No kost data available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="top-footer">
            <div class="left-footer">
                <img src="http://localhost/PHP-MVC/public/image/logo-jkost.png" alt="">
                <p>Our vision is to provide convenience and help increase your sales business.</p>
                <div class="kumpulan-medsos">
                    <i class="ri-facebook-circle-fill"></i>
                    <i class="ri-facebook-circle-fill"></i>
                    <i class="ri-facebook-circle-fill"></i>
                </div>
            </div>
            <div class="right-footer">
                <div class="content-right-footer">
                    <p class="judul-right-footer">About</p>
                    <p>How it works</p>
                    <p>Featured</p>
                    <p>Partnership</p>
                    <p>Bussiness Relation</p>
                </div>
                <div class="content-right-footer">
                    <p class="judul-right-footer">Comunity</p>
                    <p>Event</p>
                    <p>Blog</p>
                    <p>Partnership</p>
                    <p>Bussiness Relation</p>
                </div>
                <div class="content-right-footer">
                    <p class="judul-right-footer">Sosial</p>
                    <p>How it works</p>
                    <p>Featured</p>
                    <p>Partnership</p>
                    <p>Bussiness Relation</p>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>©2023 J-Kost. All rights reserved</p>
            <div class="right-bottom-footer">
                <p>Privacy & Policy</p>
                <p>Terms & Condition</p>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('pilihan-harga').addEventListener('change', function() {
            updateHarga();
        });

        function updateHarga() {
            var pilihanHarga = document.getElementById('pilihan-harga').value;
            var hargaBulanan = <?php echo $data['kamar']['harga_bulanan']; ?>;
            var hargaHarian = <?php echo $data['kamar']['harga_harian']; ?>;
            var harga3Bulan = <?php echo $data['kamar']['harga_3bulan']; ?>;
            var hargaTahunan = <?php echo $data['kamar']['harga_tahunan']; ?>;

            var hargaDisplay = document.getElementById('harga-display');

            switch (pilihanHarga) {
                case 'harian':
                    hargaDisplay.innerText = 'Rp ' + hargaHarian + ' (Per Hari)';
                    break;
                case 'bulanan':
                    hargaDisplay.innerText = 'Rp ' + hargaBulanan + ' (Per Bulan)';
                    break;
                case '3bulan':
                    hargaDisplay.innerText = 'Rp ' + harga3Bulan + ' (Untuk 3 Bulan)';
                    break;
                case 'tahunan':
                    hargaDisplay.innerText = 'Rp ' + hargaTahunan + ' (Per Tahun)';
                    break;
            }
        }
    </script>
</body>

</html>