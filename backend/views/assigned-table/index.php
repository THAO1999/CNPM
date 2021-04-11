<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bảng phân công';
$this->params['breadcrumbs'][] = $this->title;
?>
<p>
    <?=Html::a('Thêm sinh viên', ['./additional-student/?request_id=' . $request_id], ['class' => 'btn btn-success'])?>
</p>
<div class="assigned-table-index">

    <h1><?=Html::encode($this->title)?></h1>
    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'organizationRequest.subject',
        'student.name',
        'start_date',
        'end_date',
        //'status',
        //'create_date',

        // ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>


</div>