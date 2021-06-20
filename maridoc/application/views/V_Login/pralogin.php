<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <!-- MY CSS -->

        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

        <title><?php echo $judul ?></title>
        <link rel="icon" href="<?= base_url(); ?>/images/logo.png" type="image/ico">
        <style></style>
    </head>

    <body class="">
        <div class="container my-3">
            <div class="row">
                <div class="col-8">
                    <div class="text-uppercase text-white px-3 pt-2 pb-1 mb-3 text-center" style="background-color:#8DC53E">
                        <h6>apa itu?</h6>
                    </div>
                    <div class="media">
                        <img class="align-self-center mr-3" src="<?= base_url();?>/images/logo.png">
                        <div class="media-body text-justify">
                            <p>Aplikasi kesehatan berbasis web MariDoc meluncurkan layanan teranyar, solusi yang memudahkan pasien menghemat waktu dalam menebus resep obat di rumah sakit, baik racikan maupun non racikan.</p>
                            <p>Permasalahan lama yang selama ini dihadapi rumah sakit dalam memberikan pelayanan yang prima adalah memangkas durasi waktu tunggu pasien pasca membayar resep dokter. Kebanyakan rumah sakit tidak memiliki ruang tunggu dengan kapasitas terbatas.</p>
                            <p>Alhasil pasien harus menunggu waktu dari pendaftaran konsultasi ke dokter dari sebelum matahari terbit, belum lagi harus antri saat menebus resep dokter. Mereka bisa seharian menghabiskan waktunya di rumah sakit.</p>
                            <p>Layanan ini hadir karena keresahan pasien untuk durasi tunggu yang terlampau lama saat menebus resep dokter. Lamanya durasi tersebut tentunya mengganggu rumah sakit dalam memberikan pelayanan yang prima. Hal ini diklaim juga berdampak pada penuhnya ruang tunggu yang kapasitasnya terbatas, sampai lahan parkir yang tidak produktif karena pasien yang terlampau lama di rumah sakit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 text-center">
                    <div class="text-uppercase text-white px-3 pt-2 pb-1 mb-3" style="background-color:#8DC53E">
                        <h6>masuk sebagai</h6>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <a href="<?= base_url(); ?>C_Home/login_d"  class="btn btn-outline-secondary"><img src="<?= base_url(); ?>/images/doctor.png" width="100"  class="rounded-circle"></a>
                            <h5 >Dokter</h5>
                        </div>
                        <div class="col-6">
                            <a href="<?= base_url(); ?>C_Home/login_p" class="btn btn-outline-secondary"><img src="<?= base_url(); ?>/images/patient.png" width="100" height="" alt="" class="rounded-circle"></a>
                            <h5>Pasien</h5>
                        </div>
                    </div>

                </div>
            </div>
    </body>
</html>