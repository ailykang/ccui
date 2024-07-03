<?php
$pgr_id = "1";
$g5_1depth = "소개";
$g5_ti = "찾아오시는 길";
include_once('../common.php');
include_once(G5_PATH.'/head.php');

?>
<style>
.sub_navi_1 li:nth-child(6){background:#666;}
.sub_navi_1 li:nth-child(6) a{color:#fff; font-family:WOFF_4;}
</style>

<h3 class="wow fadeInDown" data-wow-delay="0.6s">찾아오시는 길</h3>

<h4 class="wow fadeInDown" data-wow-delay="0.7s">

</h4>

<!--
	* 카카오맵 - 약도서비스
	* 한 페이지 내에 약도를 2개 이상 넣을 경우에는
	* 약도의 수 만큼 소스를 새로 생성, 삽입해야 합니다.
-->
<!-- 1. 약도 노드 -->
<div id="daumRoughmapContainer1683977012121" class="root_daum_roughmap root_daum_roughmap_landing wow fadeInDown" data-wow-delay="0.75s" style="width:100%;"></div>

</div>


<!-- 2. 설치 스크립트 -->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1683977012121",
		"key" : "2erda",
		"mapHeight" : "360"
	}).render();
</script>
<?php
include_once(G5_PATH.'/tail.php');