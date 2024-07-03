<?php
$pgr_id = "1";
$g5_1depth = "소개";
$g5_ti = "개요";
include_once('../common.php');
include_once(G5_PATH.'/head.php');

?>
<style>
.sub_navi_1 li:nth-child(3){background:#666;}
.sub_navi_1 li:nth-child(3) a{color:#fff; font-family:WOFF_4;}
</style>

<h3 class="wow fadeInDown" data-wow-delay="0.6s">개요</h3>

<h4 class="pc_view wow fadeInDown" data-wow-delay="0.65s">내가 사람의 방언과 천사의 말을 할지라도 사랑이 없으면 소리나는 구리와 울리는 꽹과리가 되고<br>내가 예언하는 능이 있어 모든 비밀과 모든 지식을 알고<br>또 산을 옮길만한 모든 믿음이 있을지라도 사랑이 없으면 내가 아무 것도 아니요<br>(고전 13:1-2)
</h4>
<h4 class="m_view wow fadeInDown" data-wow-delay="0.65s">내가 사람의 방언과 천사의 말을 할지라도 사랑이 없으면<br>소리나는 구리와 울리는 꽹과리가 되고<br>내가 예언하는 능이 있어 모든 비밀과 모든 지식을 알고<br>또 산을 옮길만한 모든 믿음이 있을지라도 사랑이 없으면<br>내가 아무 것도 아니요<br>(고전 13:1-2)
</h4>

<div class="container_tab wow fadeInDown" data-wow-delay="0.65s">
  <ul class="tab_title">
    <li class="on">취지문</li>
	<li>본 연구원 공통과제</li>
    <li>基督文化 生活비전</li>
  </ul>
  <div class="tab_cont">
    <div class="on">
	<img style="margin-bottom:20px; border:1px solid #dfdfdf; padding:20px;" class="wow fadeInDown" data-wow-delay="0.7s" src="/img/info_.png"><br>
<p class="wow fadeInDown" data-wow-delay="0.7s">1. 本 硏究院 共通課題 : 빛 暉宣</p>
<p class="wow fadeInDown" data-wow-delay="0.7s">2. 博愛精神과 十字架 恩惠 所望者</p>
<p class="wow fadeInDown" data-wow-delay="0.7s">3. 統一原理와 理念 定立 史觀 確立</p>
<p class="wow fadeInDown" data-wow-delay="0.7s">4. 近現代史 特別 세미나</p>
<p class="wow fadeInDown" data-wow-delay="0.7s">5. 救贖史的 聖經 세미나</p>
<p class="wow fadeInDown" data-wow-delay="0.7s">6. 閃光의 時代史 從時俗</p>
    </div>
    <div>
	<img style="margin-bottom:20px; border:1px solid #dfdfdf; padding:20px;" class="wow fadeInDown" data-wow-delay="0.7s" src="/img/info_.png"><br>
<p class="wow fadeInDown" data-wow-delay="0.7s">1. 本 硏究院 共通課題 : 빛 暉宣</p>
<p class="wow fadeInDown" data-wow-delay="0.7s">2. 博愛精神과 十字架 恩惠 所望者</p>
<p class="wow fadeInDown" data-wow-delay="0.7s">3. 統一原理와 理念 定立 史觀 確立</p>
<p class="wow fadeInDown" data-wow-delay="0.7s">4. 近現代史 特別 세미나</p>
<p class="wow fadeInDown" data-wow-delay="0.7s">5. 救贖史的 聖經 세미나</p>
<p class="wow fadeInDown" data-wow-delay="0.7s">6. 閃光의 時代史 從時俗</p>
    </div>
    <div>
	<img style="margin-bottom:20px; border:1px solid #dfdfdf; padding:20px;" class="wow fadeInDown" data-wow-delay="0.7s" src="/img/info_.png"><br>
<h4 class="wow fadeInDown" data-wow-delay="0.7s">農道 創造, 生命 硏究團地</h4>
<p class="wow fadeInDown" data-wow-delay="0.75s">1. 農學生命 食品硏究開發</p>
<p class="wow fadeInDown" data-wow-delay="0.75s">2. 體型 創造 食品生産 販促</p>
<p class="wow fadeInDown" data-wow-delay="0.75s">3. 聖化마을 造成</p>
<p class="wow fadeInDown" data-wow-delay="0.75s">4. 靈化로운 生活定着</p>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
  $(".tab_title li").click(function() {
    var idx = $(this).index();
    $(".tab_title li").removeClass("on");
    $(".tab_title li").eq(idx).addClass("on");
    $(".tab_cont > div").hide();
    $(".tab_cont > div").eq(idx).show();
  })
});
 </script>
<?php
include_once(G5_PATH.'/tail.php');