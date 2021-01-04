<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Harga */

$this->title = Yii::t('app', 'Create Harga');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hargas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="harga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
