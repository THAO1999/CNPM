<?php
use common\widgets\Alert;
use frontend\assets\AppAsset;
/* @var $this \yii\web\View */
/* @var $content string */
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use \yii\web\View;
AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">

<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>

<body>
    <?php $this->beginBody()?>

    <div class="wrap">

        <?php
NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);
$menuItems = [
    ['label' => 'Home', 'url' => ['/home/index']],
    ['label' => 'Create', 'url' => ['/home/create']],
    ['label' => 'Recruitment',
        'items' => [
            ['label' => 'Confirm', 'url' => ['organization-request/index?status=10']],
            ['label' => 'UnConfirm', 'url' => ['organization-request/index?status=9']],
            ['label' => 'Cancel', 'url' => ['organization-request/index?status=0']],
        ]],

];
$menuItems[] = ['label' => Yii::$app->user->identity->username,
    'items' => [
        ['label' => 'My Profile', 'url' => ['/profile-enterprise/index']],
        ['label' => 'Logout', 'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']]]];

echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);
NavBar::end();
?>

   <div class="container">
            <?=Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])?>
            <?=Alert::widget()?>
            <?=$content?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; <?=Html::encode(Yii::$app->name)?> <?=date('Y')?></p>

            <p class="pull-right"><?=Yii::powered()?></p>
        </div>
    </footer>

    <?php $this->endBody()?>
</body>

</html>
<?php $this->endPage()?>