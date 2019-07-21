<?php
use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'Tambah Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-sm-4">
    <div class="kategori-create">
      <h1><?= Html::encode($this->title) ?></h1>
      <?= $this->render('_form', [
        'model' => $model,
        ]) ?>
    </div>
  </div>
  <div class="col-sm-8">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'kategori',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  </div>
</div>
