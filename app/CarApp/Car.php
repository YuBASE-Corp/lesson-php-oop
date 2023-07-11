<?php

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
