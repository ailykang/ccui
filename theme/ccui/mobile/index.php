<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<!-- 배너 최신글 -->
<?php
echo latest('theme/banner', 'banner', 4, 150);
?>
<div id="location_icon">
	<ul>
		<h2>바로가기 메뉴</h2>
		<li><a href="/cont/0101.php"><i class="fa fa-info-circle" aria-hidden="true"></i> 소개</a></li>
		<li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i> 후원하기</a></li>
		<li><a href="/bbs/board.php?bo_table=free"><i class="fa fa-file-text" aria-hidden="true"></i> 소식 및 자료</a></li>
		<li><a href="/cont/0106.php"><i class="fa fa-map-marker" aria-hidden="true"></i> 찾아오시는 길</a></li>
	</ul>
</div>
<div id="index">

  <div class="ft_info">
        <?php
        echo latest('theme/basic', 'notice', 3, 33);
        ?>
        <div id="ft_contact">
        <?php
        echo latest('theme/faq', 'free', 4, 33);
        ?>
        </div>
    </div>
<div class="lt_review" style="background:#f2f2f2;">
<!-- 갤러리 최신글 -->
<?php
echo latest('theme/service', 'gallery', 3, 33);
?>
</div>

<?php
echo latest('theme/movie_push', 'worship', 1, 33);
?>


<?php
echo latest('theme/about', 'sub_banner', 1, 33);
?>
</div>
<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>