<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bảng phân công';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="assigned-table-index">

    <h1><?=Html::encode($this->title)?></h1>
    <p>
        <?=Html::a('Thêm sinh viên', ['./additional-student/?request_id=' . $request_id], ['class' => 'btn btn-success'])?>
    </p>
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

        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{delete} ',
            'urlCreator' => function ($action, $dataProvider, $key, $index) use ($request_id) {
                return Url::to(['assigned-table/delete', 'request_id' => $request_id, 'student_id' => $dataProvider->student_id]);
            },

        ],
    ],
]);?>
    <p style="margin-left:700px">
        <?=Html::a(' Quay lại', ['organization-request/view?id=' . $request_id], ['class' => 'btn btn-success'])?>
    </p>


</div>