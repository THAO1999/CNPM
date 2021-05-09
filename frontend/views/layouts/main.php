<?php

/* @var $this \yii\web\View */
/* @var $content string */
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="vi-VN" xml:lang="vi-VN" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/
4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3
+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" type="text/css" href="https://www.topcv.vn/packages/cvo/base/reset.css?v=2.0">
    <link rel="stylesheet" type="text/css" href="https://www.topcv.vn/packages/cvo/base/style.css?v=2.5">

    <link rel="stylesheet" type="text/css" href="https://www.topcv.vn/packages/cvo/cropper/style.css?v=2.1">
    <link rel="stylesheet" type="text/css" href="https://www.topcv.vn/packages/cvo/cvoPrompt/cvoPrompt.css?v=2.0">

    <link rel="stylesheet" type="text/css"
        href="https://www.topcv.vn/packages/cvo/templates//onepage_impressive_2/cv.css">


    <link rel="stylesheet" type="text/css" href="Test.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <style>
    .container {
        border: 2px solid #dedede;
        background-color: #f1f1f1;
        border-radius: 5px;
        margin: 10px 0;
        width: 350px !important;
    }

    .darker {
        border-color: #ccc;
        background-color: #ddd;
    }

    .container::after {
        content: "";
        clear: both;
        display: table;
    }

    .container img {
        float: left;
        max-width: 45px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
    }

    .content-chat-From {
        padding-right: 25px;
        width: 200px;
        height: auto;
        background: #E4E6EB;
        border-radius: 5px 50px 50px 0px;
        margin-bottom: 10px
    }

    .content-chat-To {
        padding-left: 20px;
        width: 200px;
        height: auto;
        background: #fac;
        border-radius: 50px 0px 0px 50px;
        margin-left: 55px;
        margin-bottom: 10px
    }

    .container img.right {
        float: right;
        margin-left: 20px;
        margin-right: 0px;
        border-radius: 50% !important;
    }

    .time-right {
        float: right;
        color: #aaa;
    }

    .time-left {
        float: left;
        color: #999;
    }

    .icon-chatBot {
        top: 840px;
        left: 1950px;
        position: fixed;
        width: 70px;
        height: 70px;
        border-radius: 50% !important;
    }

    .content-body {
        background-color: #FFFFFF;
        top: 330px;
        left: 280px;
        position: fixed;
        height: 425px;
        width: 300px;
        margin-top: 100px;
        border: solid 3px #dedede;
        padding: 0px 3px;
        margin-left: 1300px;
    }

    .inMessage {
        width: 280px !important;
        padding: 0px 0px;
        margin: 1px 10px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;

        box-sizing: border-box;
    }

    .btnMessage {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 12px 20px;
        text-align: center;
        text-decoration: none;
        flex: left;
        border-radius: 4px;
        font-size: 16px;
        height: 35px;
    }

    .content-message {
        display: flex;
        margin-bottom: 20px;
    }

    div.scroll {

        height: 300px;
        overflow-x: hidden;
        overflow-y: auto;
        text-align: center;
        padding: 10px;
    }

    .preload_image {
        display: none;
    }

    /* list user */
    .list-user {
        background: #ffffff;
        width: 300px;
        height: auto;
        top: 40px;
        left: 1570px;
        position: fixed;
    }

    .content-messenger {
        width: 100%;
        height: 50px;
    }

    .content-messenger:hover {
        background: #f0f2f5
    }

    .name-user {
        margin-top: 10px
    }
    </style>

    <?php $this->registerCsrfMetaTags()?>
    <?=Html::csrfMetaTags();
$this->registerCssFile('css/custom.css');
?>
    <title><?=Html::encode($this->title)?></title>

    <?php $this->head()?>
</head>

<body>
    <?php $this->beginBody()?>

    <body class="jobs_index" data-controller="" data-env="production">
        <div id="container">
            <div class="pageHeader shrink">
                <div class="page-header__inner">
                    <nav class="pageMenu default-navbar">
                        <div class="container-fluid">
                            <div class="pageMenu__header">

                                <a class="pageMenu__logo" data-controller="utm-tracking" href="#">
                                    <img class="logo-itviec" alt="itviec"
                                        src="<?=yii\helpers\Url::base(true) . '/../img/itviec.png'?>" width="108"
                                        height="42">
                                </a>

                            </div>
                            <div class="pageMenu__body collapse" id="pageMenuToggle">

                                <ul class="pageMenu__itemList pageMenu__itemList--right pageMenu__not_signed_in">


                                    <li class="pageMenu__item">
                                        <a href="<?php echo Url::home() . "home/" ?>">Trang chủ</a>
                                    </li>
                                    <li class="pageMenu__item">
                                        <a href="#" onclick="showUsersName()">Tin nhắn</a>
                                    </li>
                                    <li class="dropdown hidden-xs" id="user-dropdown">
                                        <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href=""
                                            role="button">
                                            <span
                                                class="dropdown-toggle__text"><?php echo Yii::$app->user->identity->name ?></span>
                                            <span class="caret"></span>
                                            <div class="sign-in-user-avatar"><img class="user-avatar"
                                                    src="https://lh5.googleusercontent.com/-NEqiGPoAAVM/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnEZAkLbXKAlBavRoKCwMzncgmfAg/s96-c/photo.jpg">
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" role="menu" style="display: none;">
                                            <li class="dropdown-menu__item--desktop">
                                                <a class="dropdown-menu__link--desktop" data-controller="utm-tracking"
                                                    href="<?php echo Url::home() . "profile-student" ?>"><span
                                                        class="dropdown-menu__icon">
                                                        <div class="dropdown-menu__icon-user"></div>
                                                    </span>
                                                    <span>My Account</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu__item--desktop">
                                                <a class="dropdown-menu__link--desktop" data-controller="utm-tracking"
                                                    href="<?php echo Url::home() . "assigned-table/index?student_id=" . Yii::$app->user->identity->id ?>"><span
                                                        class="dropdown-menu__icon">
                                                        <div class="dropdown-menu__icon-my-jr"></div>
                                                    </span>
                                                    <span>My Job </span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu__item--desktop">
                                                <a class="dropdown-menu__link--desktop" data-controller="utm-tracking"
                                                    href="/saved_jobs"><span class="dropdown-menu__icon">
                                                        <div class="dropdown-menu__icon-saved"></div>
                                                    </span>
                                                    <span>Update CV</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu__item--desktop">
                                                <a class="dropdown-menu__link--desktop" data-controller="utm-tracking"
                                                    href="<?php echo Url::home() . "cv-student" ?>"><span
                                                        class="dropdown-menu__icon">
                                                        <div class="dropdown-menu__icon-tick"></div>
                                                    </span>
                                                    <span>CV</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu__item--desktop">
                                                <a class="dropdown-menu__link--desktop"
                                                    href="<?php echo Url::home() . "registered-jobs/index?student_id=" . Yii::$app->user->identity->id ?>"
                                                    rel="nofollow" data-method="delete" href="/sign_out"><span
                                                        class="dropdown-menu__icon">
                                                        <div class="dropdown-menu__icon-sign-out"></div>
                                                    </span>
                                                    <span>Registered</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu__item--desktop">
                                                <a class="dropdown-menu__link--desktop"
                                                    href="<?=Url::toRoute('site/logout')?>" rel="nofollow"
                                                    data-method="delete" href="/sign_out"><span
                                                        class="dropdown-menu__icon">
                                                        <div class="dropdown-menu__icon-sign-out"></div>
                                                    </span>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <?=Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])?>
                <?=Alert::widget()?>

                <?=$content?>


                <div id="footer">

                    <div class="content thembackground">

                        <div class="bottom" style="margin-top:20px">
                            <div class="footer-contact hidden-xs">

                                <div class="footer-link">
                                    <h4>Want to post a job? Contact us at Ha Noi: (+84) 977 460 519 - Ha Noi: (+84)
                                        981
                                        448 474 - Email: love@hus.com<h4>
                                </div>
                            </div>
                            <div class="footer-links hidden-xs">
                                <div class="col-md-3 footer-links__col">
                                    <a class="footer-link" data-controller="utm-tracking" href="/">Home</a>
                                    <a class="footer-link" data-controller="utm-tracking" href="/it-jobs">All
                                        Jobs</a>
                                    <a target="_blank" class="footer-link" rel="canonical"
                                        data-controller="utm-tracking" href="/about-us">About Us</a>
                                    <a target="_blank" class="footer-link" rel="canonical"
                                        data-controller="utm-tracking" href="/contact-us">Contact Us</a>
                                    <a target="_blank" class="footer-link" rel="canonical"
                                        href="https://itviec.com/blog/press/">Press</a>
                                </div>
                                <div class="col-md-3 footer-links__col">
                                    <a target="_blank" class="footer-link"
                                        href="https://itviec.com/blog/chinh-sach-bao-mat/">Privacy Policy</a>
                                    <a target="_blank" class="footer-link"
                                        href="https://itviec.com/blog/terms-and-conditions/">Term &amp;
                                        Conditions</a>
                                    <a target="_blank" class="footer-link"
                                        href="https://itviec.com/blog/chinh-sach-giai-quyet-khieu-nai/">Complaint
                                        Handling Policy</a>
                                    <a target="_blank" class="footer-link"
                                        href="https://itviec.com/blog/quy-che-hoat-dong-cua-itviec/">Operating
                                        Regulation</a>
                                    <a target="_blank" class="footer-link" rel="canonical"
                                        href="https://itviec.com/blog/faq-cac-cau-hoi-thuong-gap/">FAQ</a>
                                </div>
                                <div class="col-md-6 footer-links__col">
                                    <span class="footer-link">Founded by Team K62 MT&KHTT HUS</span>
                                    <span class="footer-link">Tax code: 0312192258</span>
                                    <span class="footer-link">Phone: 028.66811397</span>
                                    <span class="footer-link">Address: 334 Nguyen Trai- Thanh Xuan- Ha Noi</span>
                                </div>


                            </div>
                            <div class="footer-links visible-xs">
                                <a class="footer-link" data-controller="utm-tracking" href="/">Home</a>
                                <a class="footer-link" data-controller="utm-tracking" href="/it-jobs">All Jobs</a>
                                <a target="_blank" class="footer-link" rel="canonical" data-controller="utm-tracking"
                                    href="/about-us">About Us</a>
                                <a target="_blank" class="footer-link" rel="canonical" data-controller="utm-tracking"
                                    href="/contact-us">Contact Us</a>
                                <a target="_blank" class="footer-link"
                                    href="https://itviec.com/blog/chinh-sach-bao-mat/">Privacy Policy</a>
                                <a target="_blank" class="footer-link"
                                    href="https://itviec.com/blog/terms-and-conditions/">Term &amp; Conditions</a>
                                <a target="_blank" class="footer-link"
                                    href="https://itviec.com/blog/quy-che-hoat-dong-cua-itviec/">Operating
                                    Regulation</a>
                                <a target="_blank" class="footer-link"
                                    href="https://itviec.com/blog/chinh-sach-giai-quyet-khieu-nai/">Complaint
                                    Handling
                                    Policy</a>
                                <span class="footer-link">Founded by Team K62 MT&KHTT HUS</span>
                                <span class="footer-link">Tax code: 0312192258</span>
                                <span class="footer-link">Phone: 028.66811397</span>
                                <span class="footer-link">Address: 334 Nguyen Trai- Thanh Xuan- Ha Noi</span>

                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="txtUserFromID" value="<?php echo Yii::$app->user->identity->id ?>" />
                <input type="hidden" id="txtUserToID" value="" />
                <input type="hidden" id="txtUserToAdminID" value="2" />
                <div class="list-user" style="border: 2px solid #ccc;">
                    <h2 style="text-align: center;margin-top:15px">Messenger</h2>
                    <hr style="border: 1px solid #ccc;">
                    <div class="content-chat scroll list-user-content">

                    </div>
                </div>


                <div class="content-body">
                    <h2 style="text-align: center; margin-top:15px" id="user-name">Admin</h2>
                    <hr style="border: 1px solid #ccc;">
                    <div class="content-chat scroll ">

                    </div>
                    <div class="content-message">
                        <input class="inMessage" id="txtMessage" type="text" />
                        <button class="btnMessage" id="btnMessage">send</button>
                    </div>
                </div>
                <div>
                    <img src="<?=yii\helpers\Url::base(true) . '/../../uploads/chatbot.jpg'?>" alt="Avatar"
                        class="icon-chatBot" onclick="showChatBot('2')"
                        style="width:50px; height:50px;border-radius:50%;margin-left:-120px">
                </div>

                <?php $this->endBody()?>
    </body>

</html>
<?php $this->endPage()?>