<?php
// Food クラス
class Food {
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // メソッド: price を表示
    public function show_price() {
        echo $this->price . "<br>";
    }
}

// Animal クラス
class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // メソッド: height を表示
    public function show_height() {
        echo $this->height . "<br>";
    }
}

// =========================
// インスタンス作成
// =========================
$potato = new Food("potato", 250);
$dog = new Animal("dog", 60, 5000);

// インスタンスを出力
print_r($potato);
echo "<br>";
print_r($dog);
echo "<br>";

// メソッド呼び出し
$potato->show_price();
$dog->show_height();
?>