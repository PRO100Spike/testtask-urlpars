<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Link</label>: <?= Html::encode($model->link) ?></li>
</ul>
<?= var_dump($model->urlStructure) ?>
<a href="<?=  Url::to(['/site']) ?>"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
