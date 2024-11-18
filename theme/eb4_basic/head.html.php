<?php
/**
 * theme file : /theme/THEME_NAME/head.html.php
 */
if (!defined('_EYOOM_')) {
    exit;
}

add_stylesheet('<link rel="stylesheet" href="' . EYOOM_THEME_URL . '/css/style.css?ver=' . G5_CSS_VER . '">', 0);
add_stylesheet('<link rel="stylesheet" href="' . EYOOM_THEME_URL . '/css/custom.css?ver=' . G5_CSS_VER . '">', 0);

/**
 * 로고 타입 : 'image' || 'text'
 */
$logo = 'image';

/**
 * 메뉴바 전체 메뉴 출력 : 'yes' || 'no'
 */
$is_megamenu = 'yes';
?>

<?php if (!$wmode) {?>
<?php /*----- wrapper 시작 -----*/?>
<div class="wrapper">
    <h1 id="hd-h1"><?php echo $g5['title'] ?></h1>
    <div class="to-content"><a href="#container">본문 바로가기</a></div>
    <?php
// 팝업창
    if (defined('_INDEX_') && $newwin_contents) { // index에서만 실행
        echo $newwin_contents;
    }
    ?>

    <?php /*----- header 시작 -----*/?>
    <div class="header">
    <div class="logo"> <img src="<?php echo EYOOM_THEME_URL; ?>/image/logo-colored.png" alt="로고"></div>
    <a href="#" class="mobile-link">P2U소개</a>
    <div class="menu">
    <a href="#">홍길동님 11,181,887 P2U</a>
      <a href="#">장바구니</a>
      <a href="#">마이페이지</a>
      <a href="#">로그아웃</a>
      <div class="search-bar">
        <input type="text" placeholder="상품명 검색">
      </div>
    </div>
  </div>

  <div class="nav-bar">
    <div class="nav-item">
      <a href="#"><span><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.33334 4.50001C1.33334 4.13182 1.63181 3.83334 2 3.83334H14C14.3682 3.83334 14.6667 4.13182 14.6667 4.50001C14.6667 4.8682 14.3682 5.16668 14 5.16668H2C1.63181 5.16668 1.33334 4.8682 1.33334 4.50001ZM1.33334 8.50001C1.33334 8.13182 1.63181 7.83334 2 7.83334H14C14.3682 7.83334 14.6667 8.13182 14.6667 8.50001C14.6667 8.8682 14.3682 9.16668 14 9.16668H2C1.63181 9.16668 1.33334 8.8682 1.33334 8.50001ZM1.33334 12.5C1.33334 12.1318 1.63181 11.8333 2 11.8333H14C14.3682 11.8333 14.6667 12.1318 14.6667 12.5C14.6667 12.8682 14.3682 13.1667 14 13.1667H2C1.63181 13.1667 1.33334 12.8682 1.33334 12.5Z" fill="#A445DE"/>
</svg>
</span> 전체상품</a>
      <div class="dropdown">
        <ul>
          <li>
            <a href="#">뷰티/피부 <span class="icon">></span></a>
            <div class="nested-dropdown">
              <ul>
                <li><a href="#">스킨케어</a></li>
                <li><a href="#">클렌징</a></li>
                <li><a href="#">메이크업</a></li>
                <li><a href="#">로션/미스트</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#">신선푸드 <span class="icon">></span></a></li>
          <li><a href="#">가공푸드 <span class="icon">></span></a></li>
          <li>
            <a href="#">패션잡화 <span class="icon">></span></a>
            <div class="nested-dropdown">
              <ul>
                <li><a href="#">가방</a></li>
                <li><a href="#">신발</a></li>
                <li><a href="#">액세서리</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#">디지털 가전 <span class="icon">></span></a></li>
        </ul>
      </div>
    </div>
    <div class="nav-item">
      <a href="#">P2U소개</a>
    </div>
    <div class="nav-item">
      <a href="#">히트상품</a>
    </div>
    <div class="nav-item">
      <a href="#">브랜드관</a>
      <div class="dropdown">
        <ul>
          <li><a href="#">스킨케어 <span class="icon">></span></a></li>
          <li><a href="#">메이크업 <span class="icon">></span></a></li>
          <li><a href="#">헤어/바디 <span class="icon">></span></a></li>
          <li><a href="#">남성전용 화장품 <span class="icon">></span></a></li>
          <li><a href="#">뷰티기기/소품 <span class="icon">></span></a></li>
        </ul>
      </div>
    </div>
    <div class="nav-item">
      <a href="#">추천선물</a>
    </div>
    <div class="nav-item">
      <a href="#">이벤트</a>
    </div>
    <div class="nav-item">
      <a href="#">공모전</a>
    </div>
  </div>
    <?php /*----- header 끝 -----*/?>

    <?php if (!defined('_INDEX_')) { // 메인이 아닐때 ?>
    <?php /*----- page title 시작 -----*/?>
    <div class="page-title-wrap">
        <div class="container">
        <?php if (!defined('_EYOOM_MYPAGE_')) {?>
            <h2>
                <?php if (!$it_id) {?>
                <i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?>
                <?php } else {?>
                <span class="f-s-14r"><i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?></span>
                <?php }?>
            </h2>
            <?php if (!$it_id) {?>
            <div class="sub-breadcrumb-wrap">
                <ul class="sub-breadcrumb hidden-xs">
                    <?php echo $subinfo['path']; ?>
                </ul>
            </div>
            <?php }?>
        <?php } else {?>
            <h2><i class="fas fa-arrow-alt-circle-right"></i> 마이페이지</h2>
        <?php }?>
        </div>
    </div>
    <?php /*----- page title 끝 -----*/?>
    <?php }?>

    <div class="basic-body <?php if (!defined('_INDEX_')) {?>page-body<?php }?>">
        <?php if (defined('_INDEX_')) {?>
        <div class="main-slider-top">
            <?php /* EB슬라이더 - basic */?>
            <?php echo eb_slider('1516512257'); ?>
        </div>
        <?php }?>
        <div class="container">
            <?php if ($side_layout['use'] == 'yes') {?>
            <div class="main-wrap">
                <?php
if ($side_layout['pos'] == 'left') {
        /* 사이드영역 시작 */
        include_once EYOOM_THEME_PATH . '/side.html.php';
        /* 사이드영역 끝 */
    }
        ?>
                <main class="basic-body-main <?php if ($side_layout['pos'] == 'left') {echo 'right';} else {echo 'left';}?>-main">
            <?php } else {?>
            <div class="main-wrap">
                <main class="basic-body-main">
            <?php }?>
<?php } // !$wmode ?>