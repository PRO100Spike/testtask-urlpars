<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Test Task';
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'link') ?>


    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>