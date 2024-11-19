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
    <?php if (!defined('_EYOOM_')) {
        exit;
    }
    ?>

<div class="header">
    <div class="logo">
        <?php if ($logo == 'image') {?>
            <a href="<?php echo G5_SHOP_URL; ?>"><img src="<?php echo EYOOM_THEME_URL; ?>/image/logo-colored.png" alt="로고"></a>
        <?php } else {?>
            <?php echo $config['cf_title']; ?>
        <?php }?>
    </div>
    <a href="#" class="mobile-link">P2U소개</a>
    <div class="menu">
        <?php if ($is_member) {?>
            <a href="#"><?php echo $member['mb_nick']; ?>님 <?php echo number_format($member['mb_point']); ?> P2U</a>
            <a href="<?php echo G5_SHOP_URL; ?>/cart.php">장바구니</a>
            <a href="<?php echo G5_URL; ?>/mypage/">마이페이지</a>
            <a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a>
        <?php } else {?>
            <a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a>
            <a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>
        <?php }?>
        <div class="search-bar">
            <input type="text" placeholder="상품명 검색">
        </div>
    </div>
</div>

<div class="nav-bar">
    <?php if (isset($menu) && is_array($menu)) {?>
        <?php foreach ($menu as $key => $menu_1) {?>
            <div class="nav-item">
                <a href="<?php echo $menu_1['me_link']; ?>" target="_<?php echo $menu_1['me_target']; ?>">
                    <?php if ($key === 0) {?>
                        <span>
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33334 4.50001C1.33334 4.13182 1.63181 3.83334 2 3.83334H14C14.3682 3.83334 14.6667 4.13182 14.6667 4.50001C14.6667 4.8682 14.3682 5.16668 14 5.16668H2C1.63181 5.16668 1.33334 4.8682 1.33334 4.50001ZM1.33334 8.50001C1.33334 8.13182 1.63181 7.83334 2 7.83334H14C14.3682 7.83334 14.6667 8.13182 14.6667 8.50001C14.6667 8.8682 14.3682 9.16668 14 9.16668H2C1.63181 9.16668 1.33334 8.8682 1.33334 8.50001ZM1.33334 12.5C1.33334 12.1318 1.63181 11.8333 2 11.8333H14C14.3682 11.8333 14.6667 12.1318 14.6667 12.5C14.6667 12.8682 14.3682 13.1667 14 13.1667H2C1.63181 13.1667 1.33334 12.8682 1.33334 12.5Z" fill="#A445DE"/>
                            </svg>
                        </span>
                    <?php }?>
                    <?php echo $menu_1['me_name']; ?>
                </a>
                <?php if (isset($menu_1['submenu']) && is_array($menu_1['submenu'])) {?>
                    <div class="dropdown">
                        <ul>
                            <?php foreach ($menu_1['submenu'] as $menu_2) {?>
                                <li>
                                    <a href="<?php echo $menu_2['me_link']; ?>" target="_<?php echo $menu_2['me_target']; ?>">
                                        <?php echo $menu_2['me_name']; ?>
                                        <?php if (isset($menu_2['subsub'])) {?>
                                            <span class="icon">></span>
                                        <?php }?>
                                    </a>
                                    <?php if (isset($menu_2['subsub']) && is_array($menu_2['subsub'])) {?>
                                        <div class="nested-dropdown">
                                            <ul>
                                                <?php foreach ($menu_2['subsub'] as $menu_3) {?>
                                                    <li>
                                                        <a href="<?php echo $menu_3['me_link']; ?>" target="_<?php echo $menu_3['me_target']; ?>">
                                                            <?php echo $menu_3['me_name']; ?>
                                                        </a>
                                                    </li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                    <?php }?>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    <?php }?>
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