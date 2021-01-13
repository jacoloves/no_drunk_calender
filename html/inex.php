<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>禁酒カレンダー</title>
</head>
<body>
    <h1>きょうは禁酒できた？</h1>
    <?php
        $timestamp = time();
        $ymd = date("Y/m/d", $timestamp);
    ?>
    <p>本日の日付は<?php echo $ymd ?>です。</p>
    <form action="db_regist.php" method="post">
        <input type="hidden" name="done" value="<?php echo $ymd; ?>">
        <input type="submit" name="t_flg" value="禁酒できた！">
        <input type="submit" name="f_flg" value="禁酒できなかった">
    </form>
    
</body>
</html>