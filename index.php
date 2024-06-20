<!-- データ入力 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信画面</title>
    <style>
        body {
            background-color: #e0f2f1; /* 薄い水色 */
        }
    </style>    
</head>
<body>
    <form action="write.php" method="post">
        名前：<input type="text" name="name"><br>
        Email：<input type="text" name="email"><br>
        好きな食べ物：<input type="text" name="food"><br>
        <button type="submit">送信</button>
    </form>

    <!-- read.phpへのハイパーリンクを追加 -->
    <p><a href="read.php">データを表示する</a></p>
</body>
</html>