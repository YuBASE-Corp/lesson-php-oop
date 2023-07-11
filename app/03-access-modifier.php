<?php

class User
{
    public $name; // ユーザー名: 公開可能な情報なのでpublic
    private $email; // メールアドレス: 外部から直接アクセスしたくない（と仮定する）のでprivate
    protected $password; // パスワード: 子クラスからアクセス可能であるべきだが、外部からは直接アクセスしたくないのでprotected

    // ユーザー名を表示
    public function displayUserName()
    {
        echo $this->name . "<br>";
    }

    // emailのセッターメソッド
    public function setEmail($email)
    {
        $this->email = $email;
    }

    // passwordのセッターメソッド
    public function setPassword($password)
    {
        $this->password = $password;
    }
}

class AdminUser extends User
{
    // 継承したユーザークラスのパスワード属性にアクセス
    public function displayAdminPassword()
    {
        echo $this->password . "<br>";
    }
}

// ユーザーを作成
$user = new User();
$user->name = "Taro"; // publicなのでアクセス可能
$user->displayUserName();

// メールアドレスはprivateなので直接アクセス不可
// $user->email = "taro@example.com"; // エラー発生 Cannot access private property User::$email

// パスワードはprotectedなので直接アクセス不可
// $user->password = "password"; // エラー発生 Cannot access protected property User::$password

// 管理者ユーザーを作成
$adminUser = new AdminUser();

// メールアドレスはprivateなので継承されない
// $adminUser->email = "admin@example.com"; // エラー発生 Creation of dynamic property AdminUser::$email is deprecated

// パスワードはprotectedなので継承される、しかし外部からは直接アクセス不可
// $adminUser->password = "adminPassword"; // エラー発生 Cannot access protected property AdminUser::$password

$adminUser->setPassword("adminPassword"); // setterメソッドを使用して値を設定（カプセル化）
$adminUser->displayAdminPassword();
