<?php
// 名前空間の定義
namespace CarApp;

// クラスの定義
class Car
{
    public $name;
    public $color;
    public $year;

    public function start()
    {
        echo $this->name . " のエンジンが始動しました<br>";
    }

    public function stop()
    {
        echo $this->name . " のエンジンが停止しました<br>";
    }

    public function horn()
    {
        echo $this->name . " のクラクションが鳴りました<br>";
    }
}

// クラスの継承
class SportsCar extends Car
{
    public $maxSpeed;

    public function boost()
    {
        echo $this->name . " がブーストし、最高速度 " . $this->maxSpeed . " km/h になりました！<br>";
    }
}

// インスタンスの生成 (名前空間を指定)
$mySportsCar = new \CarApp\SportsCar();

// インスタンスのプロパティに値を代入
$mySportsCar->name = "スープラ";
$mySportsCar->color = "赤";
$mySportsCar->year = 2023;
$mySportsCar->maxSpeed = 250;

// インスタンスのメソッドを実行
$mySportsCar->start();
$mySportsCar->boost();
$mySportsCar->stop();
