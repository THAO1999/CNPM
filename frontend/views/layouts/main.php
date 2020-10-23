<?php

/* @var $this \yii\web\View */
/* @var $content string */
<<<<<<< HEAD
use frontend\models\Students;
=======

>>>>>>> 2b2978d2b75114ae7f98b2249b1ce28a922f3586
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
<<<<<<< HEAD
use common\models\Enterprise;
=======
>>>>>>> 2b2978d2b75114ae7f98b2249b1ce28a922f3586
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="vi-VN" xml:lang="vi-VN" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      .preload_image { display: none; }
    </style>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<<<<<<< HEAD
    <body class="jobs_index" data-controller="" data-env="production" >
=======


    <body class="jobs_index" data-controller="" data-env="production" >

>>>>>>> 2b2978d2b75114ae7f98b2249b1ce28a922f3586
    <div id="container">
    <div class="pageHeader shrink">
    <div class="page-header__inner">
    <nav class="pageMenu default-navbar">
      <div class="container-fluid">
        <div class="pageMenu__header">
<<<<<<< HEAD
        
          <a class="pageMenu__logo" data-controller="utm-tracking" href="#">
              <img class="logo-itviec" alt="itviec" src="<?= yii\helpers\Url::base(true). '/../../uploads/logo.png'?>"width="108" height="42">
=======
          <button class="pageMenu__toggle" data-target="#pageMenuToggle" data-toggle="collapse" type="button">
          <div class="pageMenu__toggleContent">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </div>
          </button>
          <a class="pageMenu__logo" data-controller="utm-tracking" href="#">
              <img class="logo-itviec" alt="itviec" src="img/logo.jpg" width="108" height="42">
>>>>>>> 2b2978d2b75114ae7f98b2249b1ce28a922f3586
          </a>
    
        </div>
    <div class="pageMenu__body collapse" id="pageMenuToggle">
      
    <ul class="pageMenu__itemList pageMenu__itemList--right pageMenu__not_signed_in">
<<<<<<< HEAD
    <li class="pageMenu__item">
<a href="<?php echo Url::home() . "home" ?>">Home</a>
</li>
=======
>>>>>>> 2b2978d2b75114ae7f98b2249b1ce28a922f3586
        <li class="dropdown hidden-xs" id="user-dropdown">
<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="" role="button">
<span class="dropdown-toggle__text"><?php echo Yii::$app->user->identity->username ?></span>
<span class="caret"></span>
<<<<<<< HEAD
<div class="sign-in-user-avatar"><img class="user-avatar" src="<?= Students::getImageStudent(Yii::$app->user->identity->id)?>"></div>
</a>
<ul class="dropdown-menu" role="menu" style="display: none;">
<li class="dropdown-menu__item--desktop">
<a class="dropdown-menu__link--desktop" data-controller="utm-tracking" href="<?php echo Url::home() . "profile-student" ?>"><span class="dropdown-menu__icon">
=======
<div class="sign-in-user-avatar"><img class="user-avatar" src="https://lh5.googleusercontent.com/-NEqiGPoAAVM/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnEZAkLbXKAlBavRoKCwMzncgmfAg/s96-c/photo.jpg"></div>
</a>
<ul class="dropdown-menu" role="menu" style="display: none;">
<li class="dropdown-menu__item--desktop">
<a class="dropdown-menu__link--desktop" data-controller="utm-tracking" href="/profile"><span class="dropdown-menu__icon">
>>>>>>> 2b2978d2b75114ae7f98b2249b1ce28a922f3586
<div class="dropdown-menu__icon-user"></div>
</span>
<span>My Account</span>
</a></li>
<li class="dropdown-menu__item--desktop">
<<<<<<< HEAD
<a class="dropdown-menu__link--desktop" data-controller="utm-tracking" href="<?php echo Url::home() . "profile-student" ?>"><span class="dropdown-menu__icon">
=======
<a class="dropdown-menu__link--desktop" data-controller="utm-tracking" href="/myjr"><span class="dropdown-menu__icon">
>>>>>>> 2b2978d2b75114ae7f98b2249b1ce28a922f3586
<div class="dropdown-menu__icon-my-jr"></div>
</span>
<span>My Job Robot</span>
</a></li>
<li class="dropdown-menu__item--desktop">
<a class="dropdown-menu__link--desktop" data-controller="utm-tracking" href="/saved_jobs"><span class="dropdown-menu__icon">
<div class="dropdown-menu__icon-saved"></div>
</span>
<span>Saved Jobs</span>
</a></li>
<li class="dropdown-menu__item--desktop">
<a class="dropdown-menu__link--desktop" data-controller="utm-tracking" href="/users/job_applications"><span class="dropdown-menu__icon">
<div class="dropdown-menu__icon-tick"></div>
</span>
<span>Applied Jobs</span>
</a></li>
<li class="dropdown-menu__item--desktop">
<a class="dropdown-menu__link--desktop" href="<?=Url::toRoute('site/logout')?>"rel="nofollow" data-method="delete" href="/sign_out"><span class="dropdown-menu__icon">
<div class="dropdown-menu__icon-sign-out"></div>
</span>
<span>Sign Out</span>
</a></li>

</ul>
</li>
<<<<<<< HEAD
    </ul>  
    </div>
    </div>
    </nav>  
    </div>
=======
    </ul>
    
    </div>
    </div>
    </nav>
    
    </div>
    <!-- End header -->
>>>>>>> 2b2978d2b75114ae7f98b2249b1ce28a922f3586
    <?=Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])?>
                    <?=Alert::widget()?>
                    <?=$content?>
<<<<<<< HEAD
                    <div id="footer">
<div class="content">
<div class="bottom" style="margin-top:20px">
<div class="footer-contact hidden-xs">
<div class="footer-link">
<h4>Want to post a job? Contact us at Ho Chi Minh: (+84) 977 460 519 - Ha Noi: (+84) 981 448 474 - Email: love@itviec.com<h4>
</div>
</div>
<div class="footer-links hidden-xs">
<div class="col-md-3 footer-links__col">
<a class="footer-link" data-controller="utm-tracking" href="/">Home</a>
<a class="footer-link" data-controller="utm-tracking" href="/it-jobs">All Jobs</a>
<a target="_blank" class="footer-link" rel="canonical" data-controller="utm-tracking" href="/about-us">About Us</a>
<a target="_blank" class="footer-link" rel="canonical" data-controller="utm-tracking" href="/contact-us">Contact Us</a>
<a target="_blank" class="footer-link" rel="canonical" href="https://itviec.com/blog/press/">Press</a>
</div>
<div class="col-md-3 footer-links__col">
<a target="_blank" class="footer-link" href="https://itviec.com/blog/chinh-sach-bao-mat/">Privacy Policy</a>
<a target="_blank" class="footer-link" href="https://itviec.com/blog/terms-and-conditions/">Term &amp; Conditions</a>
<a target="_blank" class="footer-link" href="https://itviec.com/blog/chinh-sach-giai-quyet-khieu-nai/">Complaint Handling Policy</a>
<a target="_blank" class="footer-link" href="https://itviec.com/blog/quy-che-hoat-dong-cua-itviec/">Operating Regulation</a>
<a target="_blank" class="footer-link" rel="canonical" href="https://itviec.com/blog/faq-cac-cau-hoi-thuong-gap/">FAQ</a>
</div>
<div class="col-md-6 footer-links__col">
<span class="footer-link">Copyright © IT VIEC JSC</span>
<span class="footer-link">Tax code: 0312192258</span>
<span class="footer-link">Phone: 028.66811397</span>
<span class="footer-link">Address: 60 Nguyen Van Thu, Dakao Ward, District 1, HCMC</span>

</div>
</div>
<div class="footer-links visible-xs">
<a class="footer-link" data-controller="utm-tracking" href="/">Home</a>
<a class="footer-link" data-controller="utm-tracking" href="/it-jobs">All Jobs</a>
<a target="_blank" class="footer-link" rel="canonical" data-controller="utm-tracking" href="/about-us">About Us</a>
<a target="_blank" class="footer-link" rel="canonical" data-controller="utm-tracking" href="/contact-us">Contact Us</a>
<a target="_blank" class="footer-link" href="https://itviec.com/blog/chinh-sach-bao-mat/">Privacy Policy</a>
<a target="_blank" class="footer-link" href="https://itviec.com/blog/terms-and-conditions/">Term &amp; Conditions</a>
<a target="_blank" class="footer-link" href="https://itviec.com/blog/quy-che-hoat-dong-cua-itviec/">Operating Regulation</a>
<a target="_blank" class="footer-link" href="https://itviec.com/blog/chinh-sach-giai-quyet-khieu-nai/">Complaint Handling Policy</a>
<span class="footer-link">Copyright © IT VIEC JSC</span>
<span class="footer-link">Tax code: 0312192258</span>
<span class="footer-link">Phone: 028.66811397</span>
<span class="footer-link">Address: 60 Nguyen Van Thu, Dakao Ward, District 1, HCMC</span>

</div>
</div>
</div>
</div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
=======
   
    <!-- Last updated: "2020-09-29 09:33:41 +0700"-->
    <div id="footer">
    <div class="content show-extras">
    <div class="tags hidden-xs">
    <div class="col-sm-3">
    <h3 class="no-margin job-list-title">Việc làm IT theo kỹ năng</h3>
    <ul>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Java</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">PHP</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">.NET</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Tester</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Android</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">iOS</a></li>
    </ul>
    <a class="link-primary link-primary--underlined" data-controller="utm-tracking" href="#">Xem tất cả
    </a></div>
    <div class="col-sm-3">
    <h3 class="no-margin job-list-title">Việc làm IT theo cấp bậc</h3>
    <ul>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Lập trình viên Back End</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Lập trình viên PHP</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Lập trình viên NodeJS</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Lập trình viên iOS</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Lập trình viên Android</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Lập trình viên Ruby on rails</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Lập trình viên Java</a></li>
    </ul>
    <a class="link-primary link-primary--underlined" data-controller="utm-tracking" href="#">Xem tất cả
    </a></div>
    <div class="col-sm-3">
    <h3 class="no-margin job-list-title">Việc làm IT theo công ty</h3>
    <ul>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Techcombank</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">FPT Software</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">DatVietVAC</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">NFQ Asia (8bit Rockstars)</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Robert Bosch Engineering And Business Solutions</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Dirox</a></li>
    </ul>
    <a class="link-primary link-primary--underlined" data-controller="utm-tracking" href="#">Xem tất cả
    </a></div>
    <div class="col-sm-3">
    <h3 class="no-margin job-list-title">Việc làm IT theo thành phố</h3>
    <ul>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Ho Chi Minh</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Ha Noi</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Da Nang</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="#">Others</a></li>
    </ul>
    </div>
    <div class="clearfix"></div>
    
    </div>
    <div class="mobile-tags visible-xs">
    <div class="mobile-tags__skill less">
    <div class="mobile-tags__skill--title">
    <h3 class="no-margin job-list-title">Việc làm IT theo kỹ năng</h3>
    <span>+</span>
    </div>
    <ul class="mobile-tags__skill--list">
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/java">Java</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/php">PHP</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/.net">.NET</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/tester">Tester</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/android">Android</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/ios">iOS</a></li>
    <a class="link-primary link-primary--underlined" data-controller="utm-tracking" href="/tim-viec-lam-it">Xem tất cả
    </a></ul>
    </div>
    <div class="mobile-tags__title less">
    <div class="mobile-tags__title--title">
    <h3 class="no-margin job-list-title">Việc làm IT theo cấp bậc</h3>
    <span>+</span>
    </div>
    <ul class="mobile-tags__title--list">
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/lap-trinh-vien-back-end">Lập trình viên Back End</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/lap-trinh-vien-php">Lập trình viên PHP</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/lap-trinh-vien-nodejs">Lập trình viên NodeJS</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/lap-trinh-vien-ios">Lập trình viên iOS</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/lap-trinh-vien-android">Lập trình viên Android</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/lap-trinh-vien-ruby-on-rails">Lập trình viên Ruby on rails</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/lap-trinh-vien-java">Lập trình viên Java</a></li>
    <a class="link-primary link-primary--underlined" data-controller="utm-tracking" href="/viec-lam-it-theo-cap-bac">Xem tất cả
    </a></ul>
    </div>
    <div class="mobile-tags__company less">
    <div class="mobile-tags__company--title">
    <h3 class="no-margin job-list-title">Việc làm IT theo công ty</h3>
    <span>+</span>
    </div>
    <ul class="mobile-tags__company--list">
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/nha-tuyen-dung/techcombank">Techcombank</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/nha-tuyen-dung/fpt-software">FPT Software</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/nha-tuyen-dung/datvietvac">DatVietVAC</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/nha-tuyen-dung/nfq-asia-8bit-rockstars">NFQ Asia (8bit Rockstars)</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/nha-tuyen-dung/robert-bosch-engineering-and-business-solutions">Robert Bosch Engineering And Business Solutions</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/nha-tuyen-dung/dirox">Dirox</a></li>
    <a class="link-primary link-primary--underlined" data-controller="utm-tracking" href="/viec-lam-it-theo-ten-cong-ty">Xem tất cả
    </a></ul>
    </div>
    <div class="mobile-tags__city less">
    <div class="mobile-tags__city--title">
    <h3 class="no-margin job-list-title">Việc làm IT theo thành phố</h3>
    <span>+</span>
    </div>
    <ul class="mobile-tags__city--list">
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/ho-chi-minh-hcm">Ho Chi Minh</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/ha-noi">Ha Noi</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/da-nang">Da Nang</a></li>
    <li class="tag"><a class="mkt-track skill-tag__link" data-controller="utm-tracking" href="/viec-lam-it/others">Others</a></li>
    </ul>
    </div>
    
    <div class="mobile-tags__footer less">
    <div class="mobile-tags__footer--title">
    <h3 class="no-margin job-list-title">Về ITviec</h3>
    <span>+</span>
    </div>
    <ul class="mobile-tags__footer--list">
    <li class="tag"><a target="_blank" data-controller="utm-tracking" href="/ve-itviec">Về ITviec.com</a></li>
    <li class="tag"><a target="_blank" data-controller="utm-tracking" href="/lien-he">Liên Hệ</a></li>
    <li class="tag"><a target="_blank" href="https://itviec.com/blog/chinh-sach-bao-mat/">Quy định bảo mật</a></li>
    <li class="tag"><a target="_blank" href="https://itviec.com/blog/terms-and-conditions/">Thoả thuận sử dụng</a></li>
    <li class="tag"><a target="_blank" href="https://itviec.com/blog/quy-che-hoat-dong-cua-itviec/">Quy chế hoạt động</a></li>
    <li class="tag"><a target="_blank" href="https://itviec.com/blog/chinh-sach-giai-quyet-khieu-nai/">Chính sách giải quyết khiếu nại</a></li>
    <li class="tag"><a target="_blank" href="https://itviec.com/blog/press/">Thông cáo báo chí</a></li>
    <li class="tag"><a target="_blank" href="https://itviec.com/blog/faq-cac-cau-hoi-thuong-gap/">Câu hỏi thường gặp</a></li>
    </ul>
    </div>
    
    </div>
    </div>

    <!-- Start footer -->
    <div class="content">
    <div class="bottom">
    <div class="footer-contact hidden-xs">
    <div class="footer-link">
    Liên hệ để đăng tin tuyển dụng tại Hồ Chí Minh: (+84) 977 460 519 - Hà Nội: (+84) 981 448 474 - Email: love@itviec.com
    </div>
    </div>
    <div class="footer-links hidden-xs">
    <div class="col-md-3 footer-links__col">
    <a class="footer-link" data-controller="utm-tracking" href="/vi">Trang Chủ</a>
    <a class="footer-link" data-controller="utm-tracking" href="/viec-lam-it">Việc Làm IT</a>
    <a target="_blank" class="footer-link" rel="canonical" data-controller="utm-tracking" href="/ve-itviec">Về ITviec.com</a>
    <a target="_blank" class="footer-link" rel="canonical" data-controller="utm-tracking" href="/lien-he">Liên Hệ</a>
    <a target="_blank" class="footer-link" rel="canonical" href="https://itviec.com/blog/press/">Thông cáo báo chí</a>
    </div>
    <div class="col-md-3 footer-links__col">
    <a target="_blank" class="footer-link" href="https://itviec.com/blog/chinh-sach-bao-mat/">Quy định bảo mật</a>
    <a target="_blank" class="footer-link" href="https://itviec.com/blog/terms-and-conditions/">Thoả thuận sử dụng</a>
    <a target="_blank" class="footer-link" href="https://itviec.com/blog/chinh-sach-giai-quyet-khieu-nai/">Chính sách giải quyết khiếu nại</a>
    <a target="_blank" class="footer-link" href="https://itviec.com/blog/quy-che-hoat-dong-cua-itviec/">Quy chế hoạt động</a>
    <a target="_blank" class="footer-link" rel="canonical" href="https://itviec.com/blog/faq-cac-cau-hoi-thuong-gap/">Câu hỏi thường gặp</a>
    </div>
    <div class="col-md-6 footer-links__col">
    <!-- <span class="footer-link">Copyright © IT VIEC JSC</span> -->
    <span class="footer-link">MST: 0312192258</span>
    <span class="footer-link">Điện thoại: 028.66811397</span>
    <span class="footer-link">Địa chỉ: 60 Nguyễn Văn Thủ, Phường Đa Kao, Quận 1, Tp.HCM</span>
    
    </div>
    </div>
    <div class="footer-links visible-xs">
    <a class="footer-link" data-controller="utm-tracking" href="/vi">Trang Chủ</a>
    <a class="footer-link" data-controller="utm-tracking" href="/viec-lam-it">Việc Làm IT</a>
    <!-- <span class="footer-link">Copyright © IT VIEC JSC</span> -->
    <span class="footer-link">MST: 0312192258</span>
    <span class="footer-link">Điện thoại: 028.66811397</span>
    <span class="footer-link">Địa chỉ: 60 Nguyễn Văn Thủ, Phường Đa Kao, Quận 1, Tp.HCM</span>
    
    </div>
    </div>
    </div>
    </div>

    </body>
    </html>,
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
>>>>>>> 2b2978d2b75114ae7f98b2249b1ce28a922f3586
