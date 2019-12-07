<?php

class Model_Register extends Model
{
    public $username;
    public $email;
    public $password;
    public function register()
    {
        if (iconv_strlen($this->username) < 5 && iconv_strlen($this->username) > 20) {
            echo "Недопустимая длина Имя пользователя (Промежуток от 5 до 20)";
            exit();
        } else if (iconv_strlen($this->password) < 6 && iconv_strlen($this->password) > 22) {
            echo "Недопустимая длина пароля (Промежуток от 6 до 22)";
            exit();
        }
        if ($this->password != null) {
            $this->password = md5($this->password);
        }
        if ($this->username != null && $this->password != null) {
            $mysql = new mysqli('127.0.0.1', 'root', '', 'mvc_user');
            $mysql->query("INSERT INTO `user`(`username`,`mail`, `password`) VALUES ('$this->username','$this->email','$this->password')");
            $mysql->close();
        }
    }
}