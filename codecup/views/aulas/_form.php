<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\user;
use wbraganca\tagsinput\TagsinputWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Aulas */
/* @var $form yii\widgets\ActiveForm */
$user_id = Yii::$app->user->id;
?>

<div class="aulas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->hiddenInput(
            ['value' => $user_id]
        ) ->label(false)
    ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true])->hint('Digite um título.') ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6])->hint('Fale mais sobre a aula.') ?>

    <?= $form->field($model, 'tags')->widget(TagsinputWidget::classname(), [
            'clientOptions' => [
                'trimValue' => true,
                'allowDuplicates' => false
            ]
        ])
    ?>

    <?= $form->field($model, 'disponibilidade')->hiddenInput(
            ['value' => true]
        )->label(false) // tem ';' ??
     ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
