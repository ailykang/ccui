<?php
$pgr_id = "2";
$g5_1depth = "기독문화통일연구원";
$g5_ti = "임원";
include_once('../common.php');
include_once(G5_PATH.'/head.php');

?>
<style>
.sub_navi_2 li:nth-child(3){background:#666;}
.sub_navi_2 li:nth-child(3) a{color:#fff; font-family:WOFF_4;}
</style>

<h3 class="wow fadeInDown" data-wow-delay="0.6s">임원</h3>

<h4 class="wow fadeInDown" data-wow-delay="0.7s">

</h4>
<?php
echo latest('theme/team2', 'executives', 10, 150);
?>
<?php
include_once(G5_PATH.'/tail.php');