<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="kategori-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'kategori')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
