<!-- データ表示 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
    <style>
        body {
            background-color: #fce4ec; /* 薄いピンク */
        }
    </style>    
</head>
<body>
    <h2>結果</h2>
    
    <?php
    $file = "data.csv";

    // ファイルが存在するか確認
    if (file_exists($file)) {
        // ファイルを読み込み、行ごとに処理
        $data = file($file);

        // テーブルの開始タグとヘッダー行を出力
        echo "<table border='1'>\n";
        echo "<tr><th>名前</th><th>Email</th><th>好きな食べ物</th></tr>\n";
        
        foreach ($data as $line) {
            // CSV形式の行をカンマで分割
            $fields = explode("、", trim($line));
            
            // テーブルの行を出力
            echo "<tr>\n";
            foreach ($fields as $field) {
                echo "<td>$field</td>\n";
            }
            echo "</tr>\n";
        }
        
        // テーブルの終了タグを出力
        echo "</table>\n";

        // index.phpへのリンクを出力
        echo "<p><a href='index.php'>戻る</a></p>";
    } else {
        echo "データファイルが存在しません。";
    }
    ?>
</body>
</html>
