<?php
use backend\models\Enterprises;
use backend\models\OrganizationRequest;
use common\models\CapacityDictionary;
use common\models\OrganizationRequestAbilities;
use yii\helpers\Url;
$this->registerCssFile("@web/css/css/styleDetail.css");
?>
<hr>
<hr>
<hr>

<!-- start body -->
<div class="hidden-xs" id="scrolltop" style="display: none;">
<div class="top-arrow"></div>
</div>

<div class="company-content">
<div class="company-page">
<!-- Headline Photo -->

<!-- Header Information -->
<div class="headers hidden-xs">
<div class="logo-container">
<div class="has-overtime logo">
<img alt="Home Credit Vietnam  Vietnam Big Logo" class=" ls-is-cached lazyloaded" data-src="https://cdn.itviec.com/employers/home-credit-vietnam/logo/w170/dFAsZ8oiQpLPyUr8Yi5jUWdj/home-credit-vietnam-ppf-logo.png" src="<?=Enterprises::getImageEnterpriseView($enterprise->id)?>">
</div>
</div>
<div class="name-and-info">
<h1 class="title">
<?=$organization_requests->subject?>
</h1>
<span>
<i class="fa fa-map-marker"></i>
Trạng Thái: <?=OrganizationRequest::checkStatus($organization_requests->status)?>
</span>
<!-- Last updated: "2020-10-14 21:37:42 +0700"-->

<div class="working-date">
<i class="fa fa-calendar"></i>
<span>
Hạn Đăng ki: <?=$organization_requests->date_submitted?>
</span>
</div>

<div class="working-date">
<i class="fa fa-calendar"></i>
<span>
Cần Tuyển: <?=$organization_requests->amount?> Sinh Viên
</span>
</div>
<div class="overtime">
<i class="fa fa-clock-o"></i>
<span>
 Sinh Viên Đã Đăng ki: 10 Sinh Viên?
</span>
</div>

</div>

<div class="headers__actions text-right">
<?php if (OrganizationRequest::checkS($organization_requests->status)): ?>
<a href="<?=Url::home() . 'organization-request/confirm?id=' . $organization_requests->id?>  "><button class="btn btn-success "> Chấp Nhận</button></a>
<a href="<?=Url::home() . 'organization-request/create?id=' . $organization_requests->id?>  "><button class="btn btn-danger "> Hủy</button></a>
                    <?php endif;?>

</div>
</div>

<div class="row company-container">
<div class="col-md-8 col-left">
<!-- Navigation -->
<ul class="navigation">
<li class="active navigation__item">
<a data-controller="utm-tracking" href="#">Chi Tiết Phiếu</a>
<div class="corner-bottom-right-overlay"></div>
<div class="corner-bottom-right-curve"></div>
</li>


<li class="text social-icon navigation__item navigation__item--right hidden-sm hidden-xs">
<a target="_blank" title="" rel="nofollow" data-controller="utils--tooltip" href="https://www.facebook.com/homecreditvn" data-original-title="Đến Facebook"><i class="fa fa-facebook"></i>
</a></li>
<li class="text social-icon navigation__item navigation__item--right hidden-sm hidden-xs">
<a target="_blank" title="" rel="nofollow" data-controller="utils--tooltip" href="https://www.facebook.com/homecreditvn" data-original-title="Đến Facebook"><i class="fa fa-instagram"></i>
</a></li>

</ul>

<!-- Description - Tech stack -->
<!-- Last updated: "2020-10-14 21:37:42 +0700"-->
<div class="panel panel-default">


<div class="panel-body">
<div class="paragraph">
<h3 style="color:red;margin-bottom:10px">
</h3>
<p><?=$enterprise->description?></p>
</div>
<h3 class="panel-title"></h3>
<ul class="employer-skills">
<?php foreach ($lisSkill as $skill): ?>

<li class="employer-skills__item"><a  data-controller="utm-tracking" href="#"><?=CapacityDictionary::getCapacity($skill)?></a></li>
<?php endforeach;?>
</ul>
<div class="paragraph">
<p></p>
</div>
</div>
</div>
<!-- Jobs -->

<!-- Last Updated at: 2020-10-14 21:37:43 +0700 -->
<div class="panel panel-default">


</div>
<!-- Our People -->
<!-- Location -->


</div>
<div class="col-md-4 col-right">

<!-- Have you worked? -->
<div class="panel panel-default company-ratings">
<div class="panel-heading">
<h2 class="panel-title">Jobs</h2>
</div>
<div class="panel-body">
<!-- Last updated: "2020-10-22 14:42:31 +0700"-->
<div class="job-list">
<!-- Last updated: "2020-10-21 10:28:38 +0700"-->
<?php foreach ($listOrganization_requests as $rq): ?>

<div class="job">
<h2 class="name">
<a data-controller="utm-tracking" href="<?php echo Url::home() . "detail-request-enterprise " ?>  "><?=$rq->subject?></a>
</h2>
<div class="salary">
<span class="salary-icon-stack">
<i class="ion-ios-circle-outline"></i>
<i class="ion-social-usd"></i>
</span>

<span class="salary-text">
You'll love it
</span>
</div>
<div class="address" style="margin-bottom:5px">
Deadline:<?=$rq->date_submitted?>

</div>
<div class="tag-list">
<?php $lisSkill = OrganizationRequestAbilities::getSkill($rq);?>

<?php foreach ($lisSkill as $skill): ?>
</a><a class=" ilabel mkt-track" data-controller="utm-tracking" href="#"><span>
<?=CapacityDictionary::getCapacity($skill)?>
</span>
</a>
<?php endforeach;?>
</div>
</div>
<hr>
<?php endforeach;?>
<a class="button ibutton full-width ibutton-red big add-review-when-not-sign-in" rel="nofollow" data-add-review="true" data-toggle="modal" data-target="#sign-in-modal" href="">Viết review</a>
</div>
</div>
</div>
</div>

</div>
</div>

</div>

</div>
</div>


</div>
</div>

</body>

