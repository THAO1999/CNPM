<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách sinh viên ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?=Html::encode($this->title)?></h1>


    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'name',
        'email:email',
        'class_name',
        'status',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{update} ',
            'urlCreator' => function ($action, $dataProvider, $key, $index) use ($request_id) {
                return Url::to(['additional-student/update', 'request_id' => $request_id, 'student_id' => $dataProvider->id]);
            },

        ],
    ],
]);?>

</div>
<p style="margin-left:700px">
    <?=Html::a(' Quay lại', ['assigned-table/index?id=' . $request_id], ['class' => 'btn btn-success'])?>
</p>