<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HistoricoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Historicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Historico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'qnt_coins',
            'type',
            'data_cadastro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
