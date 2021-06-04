<!-- Awal Tag PHP -->
<?php

//Array
$dokumen = ["Maulid Simthud Durror", "Wisata Religi", "Lomba LCC"];

//Constructor
class data
{
    public $home;
    function __construct($home)
    {
        $this->home = $home;
    }
    function get_home()
    {
        return $this->home;
    }
}

$Data1 = new data("Wakaf Tanah KGS");
$Data2 = new data("Tentang KGS");
$Data3 = new data("Pondok Pesantren Kiai Galang Sewu");
$Data4 = new data("Wakaf Sekarang");
?>
<!-- Akhir Tag PHP -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title><?= $Data1->get_home() ?></title>
</head>

<body id="home" style="background-image: url(img/bg.jpg);">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color:lightseagreen">
        <div class="container pb-0">
            <a class="navbar-brand" href="#"><?= $Data1->get_home() ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang KGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kegiatan">Kegiatan KGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wakaf">Wakaf Sekarang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->


    <!-- Jumbotron -->
    <section class="jumbotron text-center p-5" style="background-image: url(img/bg.jpg);">
        <br><br>
        <img src="img/images.jpg" alt="Ponpes KGS" width="150" class="rounded-circle" />
        <h1 class="display-4"><?= $Data3->get_home() ?></h1>
        <p class="lead">Wakaf tanah untuk para tahfidz Al-qur'an, kami membuka kesempatan bagi Anda untuk turut begabung dan beramal jariyah <br>
            "Apabila manusia meninggal dunia maka terputuslah segala amalnya kecuali tiga: yaitu sedekah jariyah, <br>
            ilmu yang bermanfaat atau anak sholeh yang mendoakan kepadanya."
            <br> Mari berwakaf untuk para tahfidz
        </p>
    </section>
    <!-- Akhir jumbotron -->


    <!-- Tentang -->
    <section id="tentang">
        <div class="container p-5 ">
            <div class="row text-center p-5">
                <div class="row">
                    <h2><?= $Data2->get_home() ?></h2>
                </div>
            </div>
            <div class="clearfix">
                <img src="img/santri.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 ps-3 " alt="...">
                <p>
                    <?= $Data3->get_home() ?> adalah pondok pesantren mahasiswa yang berlokasi di Tembalang, Semarang.
                    <?= $Data3->get_home() ?> resmi didirikan pada tanggal 16 Agustus 1999 atas rintisan KH. M. Sam’ani Khoiruddin. S.Ag.
                </p>
                <p>
                    Seiring berkembanganya zaman semakin banyaknya mahasiswa, dan ada juga yang fokus nyantri ingin menimba ilmu di pondok pesantren ini.
                    Setiap tahun, jumlah santri baik putra maupun putri terus mengalami peningkatan
                    Saat ini, minat masyarakat untuk belajar Al Quran & Menghafalnya begitu tinggi, sehingga diperlukan perluasan pembangunan
                    <?= $Data3->get_home() ?> serta pembangunan kompek tahfidz yang bernama Komplek "Qurro’ wal Huffadh Sam’aniyyah" <?= $Data3->get_home() ?>u.
                </p>
                <p>
                    Saat ini kami sedang mengupayakan pembebasan Tanah seluas 300 m2 seharga 7jt/m untuk memfasilitasi lebih banyak
                    lagi para santri yang ingin belajar agama & menghafal alqur'an di <?= $Data3->get_home() ?>.
                    <br> Keistimewaan Wakaf Pembebasan Tanah Pesantren:
                <ul>
                    <li>Wakaf tanah itu sendiri sudah bernilai jariyah.</li>
                    <li>Diatasnya akan dibangun pesantren dimana ilmu itu diajarkan dan kita tahu bahwa pewarisan ilmu juga termasuk jariyah.</li>
                </ul>
                </p>
            </div>
        </div>
    </section>
    <!-- Akhir Tentang -->



    <!-- Dokumentasi Kegiatan -->
    <section id="kegiatan">
        <div class="container p-5">
            <div class="row text-center p-5">
                <div class="col">
                    <h2>Kegiatan KGS</h2>
                </div>
            </div>
            <div class="row">
                <!-- Perulangan For -->
                <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <div class="col-4 text-center">
                        <div class="card">
                            <img src="<?= "img/kegiatan/" . "kegiatan" . $i ?>.jpeg" class="card-img-top" alt="<?= "kegiatanke" . $i ?>">
                            <div class="card-body">
                                <p class="card-text"><?= $dokumen[$i - 1] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                <!-- Akhir Perulangan For -->
            </div>
        </div>
    </section>
    <!-- Akhir Dokumentasi Kegiatan -->


    <!-- Program -->
    <section id="wakaf">
        <div class="container p-5">
            <div class="row text-center">
                <div class="col">
                    <h2><?= $Data4->get_home() ?></h2>
                    <form method="post" action="hasil.php">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input name="nama" type="text" required class="form-control" id="nama" aria-describedby="nama" />
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">No Telepon</label>
                            <input name="telepon" type="number" class="form-control" id="telepon" aria-describedby="telepon" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="email" required />
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="nominal">Nominal Wakaf</label>
                            <select name="nominal" class="form-select" id="nominal">
                                <option selected>Pilih Nominal</option>
                                <option value="Rp.50.000">Rp.50.000</option>
                                <option value="Rp.75.000">Rp.75.000</option>
                                <option value="Rp.100.000">Rp.100.000</option>
                                <option value="Rp.250.000">Rp.250.000</option>
                                <option value="Rp.500.000">Rp.500.000</option>
                                <option value="Rp.1000.000">Rp.1000.000</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="pembayaran">Metode Pembayaran</label>
                            <select name="pembayaran" class="form-select" id="pembayaran">
                                <option selected>Pilih Metode Pembayaran</option>
                                <option value="Transfer BRI">Transfer BRI</option>
                                <option value="Transfer BCA">Transfer BCA</option>
                                <option value="Transfer BNI">Transfer BNI</option>
                                <option value="Transfer Mandiri">Transfer Mandiri</option>
                                <option value="Transfer BTN">Transfer BTN</option>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Program -->

    <!-- Footer -->
    <footer class="text-white text-center p-3" style="background-color:lightseagreen">
        <p>Fitriya Nur Saidah | Tugas Akhir Praktikum DKP</p>
    </footer>
    <!-- Akhir Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>