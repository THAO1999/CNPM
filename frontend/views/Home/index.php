<?php
use common\models\Enterprise;
?>
    <h1 class="slogan">
    1,317 Việc Làm IT Chất Cho Sinh Viên
    </h1>
    <div class="search-form-wrapper clearfix">
    <form id="search_form" class="search-form" action="/viec-lam-it" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
    <div class="search_section_wrapper no_header">
    <div class="search_text_wrapper">
    <!-- <div class="fas fa-search"></div> -->
    
    <div class="search_field_wrapper">
    <input type="text" name="query" id="search_text" value="" class="" style="display: none;">
    <ul class="tagit ui-widget ui-widget-content ui-corner-all">
      <li class="tagit-new">
        <input type="text" class="ui-widget-content ui-autocomplete-input" placeholder="Tìm kiếm theo kỹ năng, chức vụ, công ty" autocomplete="off">
        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
      </li>
    </ul>
    </div>
    </div>
    </div>
    
    <div class="search_button_wrapper">
    <input type="submit" name="commit" value="Tìm Kiếm" class="search_button button-red left" data-disable-with="Tìm Kiếm">
    </div>
    </form>
    
    </div>
    
    
    <div class="visible-xs">
    
    
    </div>
    <div class="page-header__tag-list hidden-xs">
    <?php foreach ($capacity as $value): ?>
    <a class="head no-border ilabel popular-keyword" data-controller="utm-tracking" href="#"><?=$value->ability_name?></a>
    <?php endforeach; ?>
    </div>

    </div>
    <div class="hidden-xs" id="scrolltop" style="display: block;">
    <div class="top-arrow"></div>
    </div>
    
    <div class="top-companies">
    <div class="title">Nhà Tuyển Dụng</div>
    <div class="row">
    <!-- Last updated: "2020-10-05 15:09:37 +0700"-->

    <?php foreach ($organization_requests as $value): ?>
    <div class="col-md-4 col-xs-12">
    <!-- Last updated: "2020-10-05 14:41:51 +0700"-->
    <a class="top-company" data-controller="utm-tracking" rel="nofollow" data-method="put" href="#">
      <div class="top-company__logo text-center">
      <img alt="Toshiba Software Development (Viet Nam) Co, Ltd Vietnam Small Logo" class=" ls-is-cached lazyloaded" data-src="" src="<?=   Enterprise::getImageEnterprise($value->id)?>">
    </div>
    <div class="top-company__name text-center"><?=$value->subject?> </div>
  
    <footer class="top-company__footer text-center">
    <span class="top-company__footer-jobs">
    <span class="red link">
        <?=$value->amount?> Slots
    </span>
    <span>&nbsp;-&nbsp;</span>
    </span>
    <span class="top-company__footer-city">Ha Noi</span>
    </footer>
    </a></div>
    <?php endforeach; ?>
    
    </div>
    </div>
    
    <div class="clearfix"></div>
    <div class="blog-list">
    <div class="blog-list__header">
    <h3 class="blog-list__title">Bài viết mới</h3>
    <div class="blog-list__header-right">
    <a target="_blank" class="more-link more-link--dotted" href="#">Xem tất cả
    <i class="fa fa-caret-right"></i>
    </a></div>
    </div>
    <div class="blog-list__content">
    <!-- Last updated: "2020-09-16 08:38:32 +0700"-->
    <div class="blog">
    <a class="blog__image-link" href="#"><img class=" ls-is-cached lazyloaded" data-src="img/react-native.png" width="100%" src="<?= yii\helpers\Url::base(true). '/../../uploads/react-native.png'?>"
    </a><div class="blog__description">
    <h4 class="blog__description-title">
    <a target="_blank" href="#">React Native là gì? 20+ Tài liệu học React Native từ cơ bản đến nâng cao</a>
    </h4>
    <div class="blog__description-content">
    React Native là một framework được tạo bởi Facebook, cho phép developer xây dựng các ứng dụng di động trên cả Android và iOS chỉ với một ngôn ngữ lập trình duy nhất: JavaScript.&nbsp; Học React Native vừa nhanh chóng, vừa mang lại cho bạn nhiều cơ hội chuyển đổi nghề nghiệp cũng như một […]
    </div>
    <div class="blog__read-more">
    <a target="_blank" class="more-link more-link--dotted" href="#">Read more
    <i class="fa fa-caret-right"></i>
    </a></div>
    </div>
    </div>
    <!-- Last updated: "2020-08-20 18:28:32 +0700"-->
    <div class="blog">
    <a class="blog__image-link" href="#"><img class=" ls-is-cached lazyloaded" data-src="img/user.png" width="100%" src="<?= yii\helpers\Url::base(true). '/../../uploads/user.png' ?>"
    </a><div class="blog__description">
    <h4 class="blog__description-title">
    <a target="_blank" href="#">Docker là gì? Vì sao DevOps Engineer nên biết?</a>
    </h4>
    <div class="blog__description-content">
    Docker là platform đứng thứ #1 trong danh sách bảng xếp hạng các platform mà Developer muốn sử dụng nhiều nhất khi phát triển ứng dụng, theo khảo sát của Stack Overflow 2019. Nó cũng đồng thời là cái tên sở hữu vị trí thứ #2 về mức độ yêu thích. Docker thực chất là […]
    </div>
    <div class="blog__read-more">
    <a target="_blank" class="more-link more-link--dotted" href="#">Read more
    <i class="fa fa-caret-right"></i>
    </a></div>
    </div>
    </div>
    
    </div>
    </div>
    