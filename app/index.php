<!DOCTYPE html>
<html>

<head>
    <title>ファイル一覧</title>
</head>

<body>
    <h1>ファイル一覧</h1>

    <?php
    // ディレクトリのパスを指定
    $dir = './'; // 表示したいディレクトリのパスを指定します

    // ディレクトリ内のファイル一覧を取得
    $files = scandir($dir);

    // ファイル一覧を表示
    echo '<ul>';
    foreach ($files as $file) {
        // ディレクトリと親ディレクトリは表示しない
        if ($file != '.' && $file != '..') {
            $filePath = $dir . $file;
            echo '<li><a href="' . $filePath . '">' . $file . '</a></li>';
        }
    }
    echo '</ul>';
    ?>
</body>

</html>