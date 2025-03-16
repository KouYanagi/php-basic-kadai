<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
        // 関数の定義
        function sort_2way($order) {
            $nums = [15, 4, 18, 23, 10];

            if ($order) {
                echo '昇順にソートします。<br>';
                sort($nums); // シンプルに昇順ソート
                foreach ($nums as $num) {
                    echo $num . '<br>';
                }
            } else {
                echo '降順にソートします。<br>';
                rsort($nums); // シンプルに降順ソート
                foreach ($nums as $num) {
                    echo $num . '<br>';
                }
            }
        }

        sort_2way(true);
        sort_2way(false);
        ?>
    </p>
</body>

</html>