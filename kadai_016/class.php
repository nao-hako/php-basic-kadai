<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Food {
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
    
    public function show_price() {
        return $this->price;
    }
}

class Animal {
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    
    public function show_height() {
        return $this->height;
    }
}

$apple = new Food('リンゴ', 30);
$cat = new Animal('たま', 10, 50);

print_r($apple);
echo '<br>';
print_r($cat);
echo '<br>';

// priceを表示
echo $apple->show_price(); 
echo '<br>';
// heightを表示
echo $cat->show_height(); 
?>
</body>
</html>