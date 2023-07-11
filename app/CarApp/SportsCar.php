<?php
// 名前空間の定義
namespace CarApp;

use CarApp\Car;

// クラスの継承
class SportsCar extends Car
{
    public $maxSpeed;

    public function boost()
    {
        echo $this->name . " がブーストし、最高速度 " . $this->maxSpeed . " km/h になりました！<br>";
    }
}
