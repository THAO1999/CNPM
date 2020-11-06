<?php
use enterprise\models\Capacity;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\CapacityDictionary */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="capacity-dictionary-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>


    <?=$form->field($model, 'subject')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'amount')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'short_description')->textarea(['maxlength' => true, 'rows' => 4])?>

    <?=$form->field($model, 'date_submitted')->widget(\yii\jui\DatePicker::classname(), [
    //'language' => 'ru',
    'dateFormat' => 'yyyy-MM-dd',
])?>
    <?=$form->field($model, 'imageFile')->fileInput()?>

  <?=$form->field($capacity, 'ability_name')->checkboxList(ArrayHelper::map(Capacity::find()->all(), 'id', 'ability_name'))
?>
 <div class="form-group">
        <?=Html::submitButton('Save', ['class' => 'btn btn-success '])?>
    </div  >

    <?php ActiveForm::end();?>

</div>
