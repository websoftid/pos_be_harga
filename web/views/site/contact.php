<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Kontak';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <div class="alert alert-success">
            Terima kasih. Akan kami respon secepatnya.
        </div>
    <?php else: ?>
      <p>Bila Anda memiliki permintaan dan pertanyaan selain mengenai saran
         masukan terhadap perangkat, misal: dukungan teknis. Silakan gunakan
         formulir di bawah.</p>
      <p>Terima kasih.</p>
      <div class="row">
        <div class="col-lg-5">
          <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
          <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
          <?= $form->field($model, 'email') ?>
          <?= $form->field($model, 'subject') ?>
          <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
          <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
              ]) ?>
          <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
          </div>
          <?php ActiveForm::end(); ?>
        </div>
      </div>
    <?php endif; ?>
</div>
