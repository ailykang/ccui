<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

?>

<header id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div class="to_content"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
    } ?>


    

    <div id="tnb" class="pc_view">

        <ul>
            <?php echo outlogin('theme/basic'); // 외부 로그인 ?>


        </ul>
  
    </div>


    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/m_logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <button type="button" id="gnb_open"><i class="fa fa-bars" ></i><span class="sound_only"> 메뉴열기</span></button>
        <button type="button" class="hd_sch_btn"><i class="fa fa-search"></i><span class="sound_only">검색열기</span></button>

        <div id="hd_sch">
            <div class="sch_wr">
                <h2 class="sound_only">사이트 내 전체검색</h2>
                <form name="fsearchbox" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);" method="get">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <input type="text" name="stx" id="sch_stx" placeholder="검색어(필수)" required maxlength="20">
                <button type="submit" value="검색" id="sch_submit"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </form>

                <script>
                function fsearchbox_submit(f)
                {
                    if (f.stx.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i=0; i<f.stx.value.length; i++) {
                        if (f.stx.value.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    return true;
                }
                </script>
                <button type="button" class="btn_close"><i class="fa fa-times-circle"></i><span class="sound_only">검색</span></button>
            </div>
        </div>

        <div id="gnb" class="pc_view">
            <ul id="gnb_1dul">
            <?php
            $menu_datas = get_menu_db(1, true);
			$i = 0;
			foreach( $menu_datas as $row ){
				if( empty($row) ) continue;
            ?>
                <li class="gnb_1dli">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){
						if( empty($row2) ) continue;
                        if($k == 0)
                            echo '<ul class="gnb_2dul">'.PHP_EOL;
                    ?>
                        <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><span></span><?php echo $row2['me_name'] ?></a></li>
                    <?php
					$k++;
                    }	//end foreach $row2

                    if($k > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>
                </li>
            <?php
			$i++;
            }	//end foreach $row

            if ($i == 0) {  ?>
                <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하세요.<?php } ?></li>
            <?php } ?>
            </ul>

        </div>

        <div id="gnb2">
            <button type="button" class="btn_close"><i class="fa fa-times"></i></button>
            <ul class="gnb_tnb">
                <?php if ($is_member) {  ?>

                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <li><a href="https://m78.mailplug.com/member/login?host_domain=ccui.org">메일</a></li>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                <li><a href="https://m78.mailplug.com/member/login?host_domain=ccui.org">메일</a></li>
                <?php }  ?>

            </ul>
            <ul id="gnb2_1dul">
            <?php
            $menu_datas = get_menu_db(1, true);
			$i = 0;
			foreach( $menu_datas as $row ){
				if( empty($row) ) continue;
            ?>
                <li class="gnb2_1dli">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb2_1da"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){
						if( empty($row2) ) continue;

                        if($k == 0)
                            echo '<button type="button" class="btn_gnb_op">하위분류</button><ul class="gnb2_2dul">'.PHP_EOL;
                    ?>
                        <li class="gnb2_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb2_2da"><span></span><?php echo $row2['me_name'] ?></a></li>
                    <?php
					$k++;
                    }	//end foreach $row2

                    if($k > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>
                </li>
            <?php
			$i++;
            }	//end foreach $row

            if ($i == 0) {  ?>
                <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하세요.<?php } ?></li>
            <?php } ?>
            </ul>

        </div>     
        <script>
        $(function () {
            //폰트 크기 조정 위치 지정
            var font_resize_class = get_cookie("ck_font_resize_add_class");
            if( font_resize_class == 'ts_up' ){
                $("#text_size button").removeClass("select");
                $("#size_def").addClass("select");
            } else if (font_resize_class == 'ts_up2') {
                $("#text_size button").removeClass("select");
                $("#size_up").addClass("select");
            }

            $(".hd_opener").on("click", function() {
                var $this = $(this);
                var $hd_layer = $this.next(".hd_div");

                if($hd_layer.is(":visible")) {
                    $hd_layer.hide();
                    $this.find("span").text("열기");
                } else {
                    var $hd_layer2 = $(".hd_div:visible");
                    $hd_layer2.prev(".hd_opener").find("span").text("열기");
                    $hd_layer2.hide();

                    $hd_layer.show();
                    $this.find("span").text("닫기");
                }
            });


            $(".btn_gnb_op").click(function(){
                $(this).toggleClass("btn_gnb_cl").next(".gnb2_2dul").slideToggle(300);
                
            });

            $(".hd_closer").on("click", function() {
                var idx = $(".hd_closer").index($(this));
                $(".hd_div:visible").hide();
                $(".hd_opener:eq("+idx+")").find("span").text("열기");
            });

            $(".hd_sch_btn").on("click", function() {
                $("#hd_sch").show();
            });

            $("#hd_sch .btn_close").on("click", function() {
                $("#hd_sch").hide();
            });

            
            $("#gnb_open").on("click", function() {
                $("#gnb2").show();
            });

            $("#gnb2 .btn_close").on("click", function() {
                $("#gnb2").hide();
            });

 
        });

        //상단고정
        if( $("#hd").length ){
            var jbOffset = $("#hd").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( 'body' ).addClass( 'fixed' );
                }
                else {
                    $( 'body' ).removeClass( 'fixed' );
                }
            });
        }
        </script>
        
    </div>
   
</header>



<div id="wrapper">

    <div id="container">
        <?php if (!defined("_INDEX_")) { ?>
		<h2 id="container_title"><span class="wow fadeInDown" data-wow-delay="0.1s" title="<?php echo get_text($g5_ti); ?>"><?php echo get_head_title($g5_ti); ?></span><p class="wow fadeInDown" data-wow-delay="0.2s"><a style="color:#fff" href="/">HOME</a> >
		<?php if ($gr_id == "community") { ?>
		소식 및 자료
		<? } else if ($gr_id == "movie") {?>
		영상
		<? } else {?> 
		<?php echo get_head_title($g5_1depth); ?>
		<?}?>
		> <?php echo get_head_title($g5_ti); ?></p></h2>
			<div class="wrap">	
			<?php include_once(G5_THEME_PATH.'/mobile/navigation.php');?>




		
		<?php } ?>
