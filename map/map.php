<!DOCTYPE html>
<html lang="en">

<<head>
    <meta charset="utf-8">
    <title>PHP 프로그래밍 입문</title>
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/css/common.css?v=<?= date('Ymdhis') ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/css/header.css?v=<?= date('Ymdhis') ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/map/css/map.css?v=<?= date('Ymdhis') ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/css/toggle.css?v=<?= date('Ymdhis') ?>">
    <script src="http://<?= $_SERVER['HTTP_HOST']  ?>/php_source/khs/common/js/toggle.js?v=<?= date('Ymdhis') ?>"></script>
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/css/slide.css?v=<?= date('Ymdhis') ?>">
    <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/js/slide.js' ?>" defer></script>
    </head>

    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/khs/common/header.php";

            include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/khs/common/db_connect.php";
            ?>
        </header>
        <section>
            <div id="text_main">
                <b>오시는길 안내</b>
                <p>서울 성동구 왕십리로 315 한동타워 8층, 16층 미래아이티캠퍼스</p>
            </div>
            <div id="map_main">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1686566373276" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                <!--2. 설치 스크립트 * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.-->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp": "1686566373276",
                        "key": "2f53p",
                        "mapWidth": "1200",
                        "mapHeight": "600"
                    }).render();
                </script>
            </div>
        </section>

    </body>

</html>