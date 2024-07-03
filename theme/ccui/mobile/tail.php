<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>


<div id="ft">

  


    <div class="ft_wr">
        <div id="ft_copy">
<p>사단법인 기독문화통일연구원 | 대표:황인규 | 주소: 서울특별시 구로구 경인로 53길 90, 615호(구로동, 에스티엑스더블유타워)</p>
<p>고유번호 : 193-80-01642 | TEL : 070-4949-3038 | E-MAIL : admin@ccui.org</p>
<p>Copyright (C) 사단법인 기독문화통일연구원 All Rights Reserved.</p>
        </div>


    </div>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>

<link rel="stylesheet" href="/css/animate.css">
<script src="/js/wow.min.js"></script>
<script>
new WOW().init();
</script>

<script>
jQuery(function($) {

    $( document ).ready( function() {

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        
 
        if ($('#top_btn').length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#top_btn').addClass('show');
                    } else {
                        $('#top_btn').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#top_btn').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>