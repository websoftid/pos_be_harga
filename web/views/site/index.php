<?php
/* @var $this yii\web\View */
$this->title = 'Beranda';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>App: <?= Yii::$app->name ?></h1>
        <p class="lead">Perangkat Lunak Manajemen Harga Produk</p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Manajemen Kategori</h2>
                <p>Kategori akan mengelompokkan produk berdasarkan kesamaan
                   jenis produk. Dengan pengelompokkan akan memudahkan
                   penyaringan dengan kriteria tertentu.</p>
            </div>
            <div class="col-lg-4">
                <h2>Manajemen Produk</h2>
                <p>Produk akan memiliki kode yang dapat digunakan sesuai
                   kebutuhan, misal: penggunaan barcode. Sehingga integrasi
                   dengan PoS berbasis barcode dapat dimungkinkan.</p>
            </div>
            <div class="col-lg-4">
                <h2>Manajemen Harga</h2>
                <p>Metode yang digunakan adalah menambahkan harga, sehingga
                   informasi riwayat perubahan masih tersimpan.</p>
            </div>
        </div>

    </div>
</div>
