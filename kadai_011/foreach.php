<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
$onion_data = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];

foreach ($onion_data as $index => $value) {
    echo "{$index}：{$value}<br>";
}
?>
    </p>
</body>
</html>