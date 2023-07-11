<?php
// Laravelの場合は autoload.php で名前空間を読み込んでいるので require_once は不要
require_once 'CarApp/Car.php'; // Carクラスのファイルを読み込み
require_once 'CarApp/SportsCar.php'; // SportsCarクラスのファイルを読み込み

// TODO: use文を追加
use CarApp\SportsCar;

// インスタンスの生成 (名前空間を指定)
$mySportsCar = new SportsCar();
// インスタンスのプロパティに値を代入
$mySportsCar->name = "スープラ";
$mySportsCar->color = "赤";
$mySportsCar->year = 2023;
$mySportsCar->maxSpeed = 250;

// インスタンスのメソッドを実行
$mySportsCar->start();
$mySportsCar->boost();
$mySportsCar->stop();
