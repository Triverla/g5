<?php
/**
 * theme file : /theme/THEME_NAME/tail.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<?php if (!$wmode) { ?>
			<?php if ($side_layout['use'] == 'yes') { ?>
					</main>
				<?php
				if ($side_layout['pos'] == 'right') {
					/* 사이드영역 시작 */
					include_once(EYOOM_THEME_PATH . '/side.html.php');
					/* 사이드영역 끝 */
				}
				?>
				</div><?php /* End .main-wrap */ ?>
			<?php } else { ?>
					</main>
				</div><?php /* End .main-wrap */ ?>
			<?php } ?>

		</div><?php /* End .container */ ?>
	</div><?php /* End .basic-body */ ?>

	<?php /*----- footer 시작 -----*/ ?>
	<footer class="footer">
  <div class="footer-top">
    <div class="footer-logo">
      <img src="<?php echo EYOOM_THEME_URL; ?>/image/logo.png" alt="로고">
    </div>
    <div class="footer-menu">
      <a href="#">카카오톡 채널추가</a>
      <a href="#">상품후기</a>
      <a href="#">1:1문의</a>
      <a href="#">FAQ</a>
      <a href="#">공지사항</a>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="footer-contact">
      <p class="footer-title">CS CENTER 1522-2041 | 평일 10:00 ~ 17:00 (점심 12:00 ~ 13:00)</p>
      <p>soo@p2u.kr | 토요일, 일요일, 공휴일은 휴무입니다. 근무시간 이후 문의는 1:1 문의를 이용해주세요.</p>
    </div>
    <div class="footer-company">
      <p class="footer-title">주식회사 포인투유 | 대표: 최병호</p>
      <p>사업자 등록번호: 443-86-024-22 | 통신판매업: 제2024-서울금천-0326호 | 주소: 08502 서울 금천구 가산디지털1로 212 202-52호 (가산동, 코오롱디지털타워애스턴)</p>
    </div>

	<div class="footer-copyright">
      <p>Copyright © P2U :: 포인투유. All Rights Reserved</p>
    </div>
	
    <div class="footer-links">
      <a href="#">이용약관</a>
      <span></span>
      <a href="#">개인정보처리방침</a>
      <span></span>
      <a href="#">이메일무단수집거부</a>
    </div>
  </div>
</footer>

	<?php /*----- footer 끝 -----*/ ?>
</div>
<?php /*----- wrapper 끝 -----*/ ?>

<?php /*----- 전체 검색 입력창 시작 -----*/ ?>
<div class="search-full">
	<div class="search-close-btn"></div>
	<fieldset class="search-field">
		<legend>게시판 전체검색</legend>
		<form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
		<input type="hidden" name="sfl" value="wr_subject||wr_content">
		<input type="hidden" name="sop" value="and">
		<label for="search_input" class="sound_only">검색어 입력 필수</label>
		<input type="text" name="stx" id="search_input" maxlength="20" placeholder="검색어 입력 [ 전체 게시판 검색 ]">
		<button type="submit" class="search-btn" value="검색"><i class="fas fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
		</form>
		<script>
		function fsearchbox_submit(f)
		{
			var stx = f.stx.value.trim();
			if (stx.length < 2) {
				alert("검색어는 두글자 이상 입력하십시오.");
				f.stx.select();
				f.stx.focus();
				return false;
			}

			// 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
			var cnt = 0;
			for (var i = 0; i < stx.length; i++) {
				if (stx.charAt(i) == ' ')
					cnt++;
			}

			if (cnt > 1) {
				alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
				f.stx.select();
				f.stx.focus();
				return false;
			}
			f.stx.value = stx;

			return true;
		}
		</script>
	</fieldset>
</div>
<?php /*----- 전체 검색 입력창 끝 -----*/ ?>

<?php /* 상담 신청 버튼 */ ?>
<?php if ($config['cf_use_counsel'] == '1') { ?>
<a <?php if ( !G5_IS_MOBILE ) { ?>href="javascript:void(0);" onclick="counsel_modal();"<?php } else { ?>href="<?php echo G5_URL; ?>/page/?pid=counsel"<?php } ?> class="counsel-btn"><i class="fas fa-headset"></i><span class="sound-only">상담신청</span></a>
<?php } ?>

<?php /* 사이드바 회원 버튼 */ ?>
<button type="button" class="sidebar-user-trigger sidebar-user-btn mo-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUserRight" aria-controls="offcanvasUserRight"><i class="fas fa-user-alt"></i><span class="sound-only">회원 사이드바</span></button>

<?php /* Side Nav Mobile Toggler */ ?>
<button type="button" class="navbar-mobile-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"><i class="fas fa-bars"></i><span class="sound-only">메뉴 사이드바</span></button>

<?php /* Back To Top */ ?>
<div class="eb-backtotop">
	<svg class="backtotop-progress" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		<span class="progress-count"></span>
	</svg>
</div>
<?php } // !$wmode ?>

<?php
include_once(EYOOM_THEME_PATH . '/misc.html.php');
?>

<?php
if ($is_member && $eyoomer['onoff_push'] == 'on') {
    include_once(EYOOM_THEME_PATH . '/skin/push/basic/push.skin.html.php');
}
?>

<script src="<?php echo EYOOM_THEME_URL; ?>/js/app.js?ver=<?php echo G5_JS_VER; ?>"></script>
<?php if ($is_admin == 'super') { ?>
<script>
$(document).ready(function() {
    var edit_mode = "<?php echo $eyoom_default['edit_mode']; ?>";
    if (edit_mode == 'on') {
        $(".btn-edit-mode").show();
    } else {
        $(".btn-edit-mode").hide();
    }

    $("#btn_edit_mode").click(function() {
        var edit_mode = $("#edit_mode").val();
        if (edit_mode == 'on') {
            $(".btn-edit-mode").hide();
            $("#edit_mode").val('');
        } else {
            $(".btn-edit-mode").show();
            $("#edit_mode").val('on');
        }

        $.post("<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=theme_editmode&smode=1", { edit_mode: edit_mode });
    });
});
</script>
<?php } ?>

<?php
if ( $config['cf_analytics'] ) echo $config['cf_analytics'];
?>