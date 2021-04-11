<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách sinh viên đăng kí ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-registration-index">

    <h1><?=Html::encode($this->title)?></h1>

    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'student.name',
        'organizationRequest.subject',
        'enterprise.name',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]);
?>
    <p style="margin-left:700px">
        <?=Html::a(' Quay lại', ['organization-request/view?id=' . $request_id], ['class' => 'btn btn-success'])?>
    </p>

</div>