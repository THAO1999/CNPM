<?php
use frontend\models\Students;
use yii\widgets\ActiveForm;
?>
</div>
<hr>

<div class="">
    <div class="row">
        <div class="col-lg-3 " style="border-right:solid 2px black;height:200px; height: 600px;
        overflow-x: hidden;
        overflow-y: auto;
        text-align: center;
        padding: 10px;">
            <input type="hidden" id="txtUserFromID" value="<?php echo Yii::$app->user->identity->id ?>" />
            <?php foreach ($students as $student): ?>
            <div class="row mb-4"
                onclick="showDetailMessage('<?=$student->name?>',<?=Yii::$app->user->identity->id?>,<?=$student->id?>) "
                style="margin-bottom:10px">
                <a href="#" class="detail-message">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-10" style="padding-bottom:15px">
                        <h3><?=$student->name?></h3>
                        <input type="hidden" id="txtUserToID" value=" <?=$student->id?>" />
                    </div>
                </a>
            </div>

            <?php endforeach;?>

        </div>

        <div class="col-lg-9">
            <div class="row" style="margin-bottom:10px;border-bottom:solid 2px black;">
                <div class="col-lg-2">
                    <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                        style="width:50px; height:50px;border-radius:50%">
                </div>
                <div class="col-lg-10" style="padding-bottom:15px">
                    <h3 id="user-name-detail-message"><?=$student->name?></h3>
                </div>

            </div>
            <div>
                <div class="row content-message">
                    <div class="col-lg-12" style="height: 480px;
        overflow-x: hidden;
        overflow-y: auto;
        width:1060px;
        text-align: center;
        padding: 10px;">
                        <div class=" row ">
                            <div class=" col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-lg-3">
                                <img src="<?=Students::getImageStudent($student->id)?>" alt="Avatar"
                                    style="width:50px; height:50px;border-radius:50%">
                            </div>
                            <div class="col-lg-6">
                                <p>xin chào tất cả mọi người</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class="col-lg-8">
                        <input type="text" id="txtMessage" />
                        <input type="hidden" id="txtUserToIDHidden" />
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-success" id="btnMessage" onclick="sendMessage() ">send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>