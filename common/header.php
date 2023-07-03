<?php
//로그인을 하면 session에 정보를 저장하고 각 페이지들에서 모두 사용하고자 함.
//로그인에 띠라 화면구성이 다르기에 세션에 저장되어 있는 회원정보 중 id, name, level 값 읽어오기
//회원등급 : 1~9등급 [1등급:관리자, 9등급:신규회원]
//세션을 저장하든 읽어오든 사용하고자 하면 이 함수로 시작
session_start();
$num       = (isset($_SESSION['num']) && $_SESSION['num'] != "") ? $_SESSION['num'] : "";
$userid    = (isset($_SESSION['userid']) && $_SESSION['userid'] != "") ? $_SESSION['userid'] : "";
$username  = (isset($_SESSION['username']) && $_SESSION['username'] != "") ? $_SESSION['username'] : "";
$userlevel = (isset($_SESSION['userlevel']) && $_SESSION['userlevel'] != "") ? $_SESSION['userlevel'] : "";
$userpoint = (isset($_SESSION['userpoint']) && $_SESSION['userpoint'] != "") ? $_SESSION['userpoint'] : "";
?>

<!-- 헤더 영역의 로고와 회원가입/로그인 표시 영역 -->

<div class="img_logo">
  <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/index.php" id="title">
    <img src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/img/logo2.png' ?>" alt="로고" id="icon">
  </a>
</div>
<div id="top">
  <!-- 1. 로고영역 -->
  <div class="logo">
    <nav role="navigation ">
      <div id="menuToggle">
        <input type="checkbox" name="checkbox" id="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu" style="display:none">
          <li>
            <b>MENU</b>
          </li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/index.php' ?>">HOME</a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/introduce/introduce.php' ?>">미술관 소개</a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/image_board/board_list.php' ?>">미술작품</a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/board/board_list.php' ?>">게시판</a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/notice/notice_list.php' ?>">공지사항</a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/map/map.php' ?>">오시는길</a></li>
          <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/message/message_form.php' ?>">고객의 소리</a></li>
        </ul>
      </div>
    </nav>
  </div>


  <!-- 2. 회원가입/로그인 버튼 표시 영역 -->
  <ul id="top_menu">
    <!-- 로그인 안되었을 때 -->
    <?php if (!$userid) {  ?>
      <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/member/member_form.php' ?>">회원가입</a></li>
      <li> | </li>
      <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/login/login_form.php' ?>">로그인</a></li>
    <?php } else { ?>
      <?= $username . "님" ?>
      <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/login/logout.php' ?>">로그아웃</a></li>
      <li> | </li>
      <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/member/member_update_form.php' ?>">회원수정</a></li>
    <?php } ?>

    <!-- 관리자모드로 로그인되었을 때 추가로.. -->
    <?php if ($userlevel == 1) { ?>
      <li> | </li>
      <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/admin/admin.php' ?>">관리자모드</a></li>
      <li> | </li>
      <li><a href="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/member/member_list.php' ?>">회원리스트</a></li>
    <?php } ?>
  </ul>
</div>