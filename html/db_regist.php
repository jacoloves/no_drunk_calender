<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>禁酒カレンダー</title>
</head>
<body>
    <?php
        $ymd = $_POST['done'];
        
        if (isset($_POST['t_flg'])) {
            $flg = 1;
            $drink_text = $_POST['t_flg'];
        }

        if (isset($_POST['f_flg'])) {
            $flg = 0;
            $drink_text = $_POST['f_flg'];
        }
        
        print "下記内容で登録します。よろしいですか？<br>"; 
        print "日付:" . $ymd . "<br>";
        print "禁酒できたか:" . $drink_text . "<br>";
    ?>    

    <form action="db_insert.php" method="post">
        <input type="hidden" name="ymd" value="<?php echo $ymd; ?>">
        <input type="hidden" name="flg" value="<?php echo $flg; ?>">
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="OK">
    </form>
</body>
</html>

