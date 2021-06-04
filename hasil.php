<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Program Wakaf Tanah</title>
</head>

<!-- Awal Function Date -->
<?php
function tanggal()
{
    return date(" H:i, d M Y", time() + 104400);
}
?>
<!-- Akhir Function Date -->

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color:lightseagreen">
        <div class="container pb-0">
            <a class="navbar-brand" href="#">Wakaf Tanah KGS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="donasi.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donasi.php#tentang">Tentang Wakaf KGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donasi.php#kegiatan">Kegiatan KGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donasi.php#wakaf">Wakaf Sekarang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Setter-Getter -->
    <?php
    class User
    {
        public $nama;
        public $telepon;
        public $email;
        public $nominal;
        public $pembayaran;

        function setNama($nama)
        {
            $this->nama = $nama;
        }
        function setTelepon($telepon)
        {
            $this->telepon = $telepon;
        }
        function setEmail($email)
        {
            $this->email = $email;
        }
        function setNominal($nominal)
        {
            $this->nominal = $nominal;
        }
        function setPembayaran($pembayaran)
        {
            $this->pembayaran = $pembayaran;
        }

        function getNama()
        {
            return $this->nama;
        }
        function getTelepon()
        {
            return $this->telepon;
        }
        function getEmail()
        {
            return $this->email;
        }
        function getNominal()
        {
            return $this->nominal;
        }
        function getPembayaran()
        {
            return $this->pembayaran;
        }
    }

    $Data = new User();
    $Data->setNama($_POST["nama"]);
    $Data->setTelepon($_POST["telepon"]);
    $Data->setEmail($_POST["email"]);
    $Data->setNominal($_POST["nominal"]);
    $Data->setPembayaran($_POST["pembayaran"]);
    ?>
    <!-- Akhir Setter-Getter -->

    <!-- Awal Konfirmasi Data -->
    <section id="wakaf">
        <div class="container p-5">
            <div class="row text-center p-5">
                <div class="col">
                    <h2>
                        <?php
                        $konfirm = "Konfirmasi Data Donatur";
                        echo $konfirm;
                        ?>
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= (isset($_POST['nama'])) ? $Data->getNama() : ""; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="telepon">No Telepon</label>
                            <input type="number" class="form-control" id="telepon" name="telepon" value="<?= (isset($_POST['telepon'])) ? $Data->getTelepon() : ""; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= (isset($_POST['email'])) ? $Data->getEmail() : ""; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nominal">Nominal Wakaf</label>
                            <input type="text" class="form-control" id="nominal" name="nominal" value="<?= (isset($_POST['nominal'])) ? $Data->getNominal() : ""; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pembayaran">Metode Pembayaran</label>
                            <input type="text" class="form-control" id="pembayaran" name="pembayaran" value="<?= (isset($_POST['pembayaran'])) ? $Data->getPembayaran() : ""; ?>" readonly>
                        </div><br>
                        <a class="btn btn-danger" name="benar" href="donasi.php" role="button">Salah</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Benar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Konfirmasi Data -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="row text-center">
                            <P> Jazakumullah, Terima kasih <?= $Data->getNama(); ?>,<br>
                                Mohon lakukan pembayaran wakaf sejumlah <?= $Data->getNominal(); ?> sebelum tenggat waktu besok jam<?= tanggal(); ?> <br>
                            <p>
                                <?php
                                // Array 
                                $bank = [
                                    (object) [
                                        'bank' => 'BRI',
                                        'no_rekening' => '0173-01-063480-50-5',
                                        'nasabah' => 'Fahmi Afif Alauddin'
                                    ],
                                    (object) [
                                        'bank' => 'BCA',
                                        'no_rekening' => '8030425279',
                                        'nasabah' => 'Muhammad Saiqul Haq'
                                    ],
                                    (object)[
                                        'bank' => 'BNI',
                                        'no_rekening' => '0803709311',
                                        'nasabah' => 'Fathurrozi'
                                    ],
                                    (object)[
                                        'bank' => 'Mandiri',
                                        'no_rekening' => '135-00-1318486-4',
                                        'nasabah' => 'Mohammad Mukhlisin'
                                    ],
                                    (object)[
                                        'bank' => 'BTN',
                                        'no_rekening' => '00512-01-61-000250-4',
                                        'nasabah' => 'Isman Nasik'
                                    ],
                                ];

                                // Pengkondisian
                                if ($_POST["pembayaran"] == "Transfer BRI") {
                                    echo "Silahkan transfer ke " . "<br>";
                                    echo "Bank: " . $bank[0]->bank . "<br>";
                                    echo "No Rekening: " . $bank[0]->no_rekening . "<br>";
                                    echo "Atas Nama: " . $bank[0]->nasabah . "<br>";
                                } else if ($_POST["pembayaran"] == "Transfer BCA") {
                                    echo "Silahkan transfer ke " . "<br>";
                                    echo "Bank: " . $bank[1]->bank . "<br>";
                                    echo "No Rekening: " . $bank[1]->no_rekening . "<br>";
                                    echo "Atas Nama: " . $bank[1]->nasabah . "<br>";
                                } else if ($_POST["pembayaran"] == "Transfer BNI") {
                                    echo "Silahkan transfer ke " . "<br>";
                                    echo "Bank: " . $bank[2]->bank . "<br>";
                                    echo "No Rekening: " . $bank[2]->no_rekening . "<br>";
                                    echo "Atas Nama: " . $bank[2]->nasabah  . "<br>";
                                } else if ($_POST["pembayaran"] == "Transfer Mandiri") {
                                    echo "Silahkan transfer ke " . "<br>";
                                    echo "Bank: " . $bank[3]->bank . "<br>";
                                    echo "No Rekening: " . $bank[3]->no_rekening . "<br>";
                                    echo "Atas Nama: " . $bank[3]->nasabah  . "<br>";
                                } else if ($_POST["pembayaran"] == "Transfer BTN") {
                                    echo "Silahkan transfer ke " . "<br>";
                                    echo "Bank: " . $bank[4]->bank . "<br>";
                                    echo "No Rekening: " . $bank[4]->no_rekening . "<br>";
                                    echo "Atas Nama: " . $bank[4]->nasabah  . "<br>";
                                } else {
                                    echo "Mohon Pilih Metode Pembayaran Terlebih Dahulu";
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Oke</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-white text-center p-3" style="background-color:lightseagreen">
        <p>Fitriya Nur Saidah | Tugas Akhir Praktikum DKP</p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>