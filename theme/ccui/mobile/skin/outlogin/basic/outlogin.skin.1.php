<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<li class="right clear"><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
<li class="right"><a href="<?php echo G5_BBS_URL ?>/login.php"> 로그인</a></li>
<li><a href="https://m78.mailplug.com/member/login?host_domain=ccui.org">메일</a></li>
