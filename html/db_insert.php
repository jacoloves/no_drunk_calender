<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>禁酒カレンダー</title>
</head>
<body>
    <?php
        try {
            $ymd = $_POST['ymd'];
            $flg = $_POST['flg'];

            $dsn = "mysql:dbname=tools;host=mysql;charset=utf8";
            $user = 'root';
            $password = 'root';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = 'INSERT INTO no_drunk_date(no_drinking_date,no_drinking_flg) VALUES (?,?)';
            $stmt = $dbh->prepare($sql);
            $data[] = $ymd;
            $data[] = $flg;
            $stmt->execute($data);

            $dbh = null;
            
            print '禁酒状況を登録しました。<br>';
        } catch (Exception $e) {
            print $e;
            print '<br>';
            print 'DB接続エラーです。<br>';
            exit();
        }
    ?>    

    <a href="index.php">戻る</a>
</body>
</html>

