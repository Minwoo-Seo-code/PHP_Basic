<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scandir</title>
</head>
<body>
    <?php
    $list = scandir('./data'); // data 디렉토리를 배열로 읽는다.
    var_dump($list);    //
</body>
</html>