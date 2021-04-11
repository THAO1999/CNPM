<?php
use backend\assets\AppAsset;
AppAsset::register($this);
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách kĩ năng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="capacity-dictionary-index">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a('Tạo mới kĩ năng', ['create'], ['class' => 'btn btn-success'])?>
    </p>


    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'ability_name',
        'aibility_type',
        'ability_note',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>


</div>