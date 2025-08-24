<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 独自ソート関数
        function sort_2way($array, $order) {
            if ($order) {
                echo "昇順にソートします。<br>";
                sort($array);
            } else {
                echo "降順にソートします。<br>";
                rsort($array);
            }

            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }

        // ソート対象の配列
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソート
        sort_2way($nums, true);

        // 降順ソート
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>