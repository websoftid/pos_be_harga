<?php
use yii\helpers\Html;
$this->title = 'Tentang ' . Yii::$app->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Aplikasi ini adalah sebuah <em>Proof of Concept</em> dalam pengembangan
       perangkat lunak menggunakan PHP dengan Framework Yii.</p>
    <p>Diawali dengan pengembangan <em>Back-end</em> yang memfasilitasi
       pemutakhiran data secara terpusat diharapkan dapat memotivasi kami untuk
       mengembangkan <em>peritilan</em> perangkat yang merupakan bagian tak
       terpisahkan dalam sebuah sistem yang lebih besar dan kompleks.</p>
    <p>Dengan tidak menutup kemungkinan pengembangan, kami hanya menulis kode
       yang mencakup fitur utama. Sehingga perangkat dapat berjalan tanpa
       banyak perubahan kode untuk berfungsi. Bila ada kebutuhan umum yang
       dibutuhkan dan tidak tersedia silakan buka tiket melalui <b>Github
       issues</b>.</p>
    <p>Silakan menuju <a href="https://github.com/websoftid/pos_be_harga">Laman
       Github Pengembangan</a> untuk informasi lebih lanjut.</p>
    <p>Selamat beraktivitas!</p>
</div>
