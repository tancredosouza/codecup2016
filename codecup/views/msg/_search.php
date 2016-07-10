<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MsgSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="msg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_send') ?>

    <?= $form->field($model, 'id_rec') ?>

    <?= $form->field($model, 'msg') ?>

    <?= $form->field($model, 'anexo') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'data_msg') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
