<head>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/detail_kamar.css">
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/daftar-kamar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white 1.png">
    <title><?php echo $data['judul']; ?></title>
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
            <p><i class="ri-home-8-fill"></i>Home > Kost Marno > Daftar Kamar</p>
        </div>
        <div id="kumpulan-foto-kamar">
            <img class="main-foto" src="http://localhost/PHP-MVC/public/image/kamar/kamar-hotel.jpg" alt="">
            <div class="right-foto-kamar">
                <img src="http://localhost/PHP-MVC/public/image/kamar/kamar-hotel.jpg" alt="">
                <img src="http://localhost/PHP-MVC/public/image/kamar/kamar-hotel.jpg" alt="">
            </div>
        </div>
        <div id="maps-kost">
            <?php if (!empty($data['kost'])) : ?>
                <iframe src="https://maps.google.com/maps?q=<?= $data['kost']['latitude'] ?>,<?= $data['kost']['longitude'] ?>&hl=es;z=14&amp;output=embed" width="100%" height="350" style="border:0; margin-top:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            <?php else : ?>
                <p>No kost data available.</p>
            <?php endif; ?>
        </div>

        <div id="content-kamar">
            <h1>Daftar Kamar</h1>
            <div id="kumpulan_kamar">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                ?>
                    <a href="http://localhost/PHP-MVC/public/landing_page/detail_kamar?id=<?php echo $i ?>" class="card-kamar">
                        <div class="foto-kamar">
                            <img class="gambar-kost" src="http://localhost/PHP-MVC/public/image/kamar/kamar1.jpg" alt="">
                        </div>
                        <div class="content-card-kamar">
                            <p class="nama-kost">Kamar <?php echo $i + 1 ?></p>
                            <!-- <p class="ukuran-kost"><i class="ri-pencil-ruler-2-fill"></i>3 x 3 m</p> -->
                            <div class="fasilitas">
                                <i class="ri-router-line"></i>
                                <i class="ri-hotel-bed-fill"></i>
                                <i class="ri-battery-2-charge-fill"></i>
                                <i class="ri-router-line"></i>
                                <i class="ri-router-line"></i>
                            </div>
                            <div class="harga">
                                <p>Rp 300,000<span>/ Bulan</span></p>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>
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
</body>

</html>