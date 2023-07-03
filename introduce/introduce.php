<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP 프로그래밍 입문</title>
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/css/common.css?v=<?= date('Ymdhis') ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/image_board/css/board.css?v=<?= date('Ymdhis') ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/css/slide.css?v=<?= date('Ymdhis') ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/css/header.css?v=<?= date('Ymdhis') ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/css/toggle.css?v=<?= date('Ymdhis') ?>">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/introduce/css/introduce.css?v=<?= date('Ymdhis') ?>">
    <script src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/khs/js/slide.js' ?>" defer></script>
    <script src="http://<?= $_SERVER['HTTP_HOST']  ?>/php_source/khs/common/js/toggle.js?v=<?= date('Ymdhis') ?>"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/board/js/board.js?v=<?= date('Ymdhis') ?>"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/php_source/khs/board/js/board_excel.js?v=<?= date('Ymdhis') ?>"></script>
    <!-- 부트스트랩 CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- 부트스트랩 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/khs/common/header.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . "/php_source/khs/common/db_connect.php";
        ?>
    </header>
    <section>
        <div id="introduce_main">
            <b>안녕하세요</b><br>
            <b>미술관 VENUS입니다.</b>
            <div id="introduce">
                <img id="img1" src="../img/introduce_img.jpg" alt="image">
                <b>첫번째 소개</b>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam delectus saepe amet! Aliquid odio quia provident suscipit culpa,eaque enim labore possimus deleniti quos expedita laudantium, obcaecati ad cumque voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.quis aliquid quam sequi odit voluptates pariatur saepe eligendi minus!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio doloremque laborum consequatur ducimus ad similique aut voluptate earum voluptas nam inventore labore repudiandae asperiores perspiciatis quo quis quia pariatur assumenda quas autem, odit cum nisi expedita? Exercitationem numquam iste
                </p>
            </div><br>
            <div id="introduce1">
                <img id="img2" src="../img/introduce_img2.jpg" alt="image">
                <b>두번째 소개</b>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam delectus saepe amet! Aliquid odio quia provident suscipit culpa,eaque enim labore possimus deleniti quos expedita laudantium, obcaecati ad cumque voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.quis aliquid quam sequi odit voluptates pariatur saepe eligendi minus!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio doloremque laborum consequatur ducimus ad similique aut voluptate earum voluptas nam inventore labore repudiandae asperiores perspiciatis quo quis quia pariatur assumenda quas autem, odit cum nisi expedita? Exercitationem numquam iste
                </p>
            </div><br>
            <div id="introduce3">
                <img id="img3" src="../img/introduce_img3.jpg" alt="image">
                <b>세번째 소개</b>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam delectus saepe amet! Aliquid odio quia provident suscipit culpa,eaque enim labore possimus deleniti quos expedita laudantium, obcaecati ad cumque voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.quis aliquid quam sequi odit voluptates pariatur saepe eligendi minus!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio doloremque laborum consequatur ducimus ad similique aut voluptate earum voluptas nam inventore labore repudiandae asperiores perspiciatis quo quis quia pariatur assumenda quas autem, odit cum nisi expedita? Exercitationem numquam iste
                </p>
            </div>
        </div>
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/php_source/khs/common/footer.php"; ?>
    </footer>
</body>

</html>