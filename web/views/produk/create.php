<?php
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Kategori;

$kategori_text = Kategori::findOne($kategori)->kategori;
$this->title = Yii::t('app', 'Kategori: ' . $kategori_text);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Atur Produk'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-sm-4">
    <div class="produk-create">
      <h1><?= Html::encode($this->title) ?></h1>
      <?= $this->render('_form', [
        'model' => $model,
        'kategori' => $kategori
        ]) ?>
    </div>
  </div>
  <div class="col-sm-8">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'idkategori',
            'kode', 'produk',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  </div>
</div>
