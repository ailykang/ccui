<?php
$pgr_id = "2";
$g5_1depth = "기독문화통일연구원";
$g5_ti = "연구위원장";
include_once('../common.php');
include_once(G5_PATH.'/head.php');

?>
<style>
.sub_navi_2 li:nth-child(4){background:#666;}
.sub_navi_2 li:nth-child(4) a{color:#fff; font-family:WOFF_4;}
</style>

<h3 class="wow fadeInDown" data-wow-delay="0.6s">연구위원장</h3>

<h4 class="wow fadeInDown" data-wow-delay="0.7s">

</h4>
<?php
echo latest_multi('theme/team2', 'research_chairperson', 60, 150, 0, "wr_2_asc");
?>
<?php
include_once(G5_PATH.'/tail.php');