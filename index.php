<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?php
            $list = scandir('./data');

            $i = 0;
            while($i < count($list)) {
                if(!($list[$i] == '.') && !($list[$i] == '..')) {
                    echo"<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
                $i += 1;
            }
        ?>
    </ol>
</body>
</html>