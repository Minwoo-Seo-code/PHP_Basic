<!doctype html>
    <html>
    <body>
    <!-- url = url_parameter.php?name=egoing 이면 웹 페이지의 내용이 바뀐다. -->
    <?php
    echo "안녕하세요". $_GET['name']."님";
    ?>
    <?php
    echo "안녕하세요". $_GET['address']."님";
    ?>
    <?php
    echo $_GET['id'];
    echo $_GET['name'];
    ?>
    </body>
    </html>