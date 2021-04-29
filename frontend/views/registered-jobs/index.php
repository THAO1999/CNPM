<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách phiếu tuyển dụng bạn đã đăng kí';
?>
</div>
<div class="student-skill-profile-index" style="margin-top:30px">

    <h1><?=Html::encode($this->title)?></h1>
    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'organizationRequest.subject',
        'enterprise.name',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{delete} {view} ',
            'urlCreator' => function ($action, $dataProvider) {
                if ($action === 'delete') {
                    return Url::to(['registered-jobs/delete', 'request_id' => $dataProvider->request_id, 'student_id' => $dataProvider->student_id]);
                } else {
                    return Url::to(['registered-jobs/view', 'request_id' => $dataProvider->request_id, 'student_id' => $dataProvider->student_id]);
                }

            },
        ],
    ],
]);?>


</div>