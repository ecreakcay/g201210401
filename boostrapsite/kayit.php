<?php

require 'baglan.php';

?>





<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Formu</title>
    <link rel="stylesheet" type="text/css" href="giris.css">
</head>

<body>

    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Kayıt Ol</h1>
            </div>
            <form action="islem.php" method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                        <label class="login-field-icon fui-user" for="login-pass"></label>
                    </div>

                    <div class="control-group">
                        <input type="password" name="password_again" class="login-field" placeholder="Tekrar Şifre" id="login-pass">
                        <label class="login-field-icon fui-user" for="login-pass"></label>
                    </div>
                </div>

                <button href="kayit.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button>

            </form>
            <a href="giris.html"><button class="btn btn-primary btn-large btn-block">Giriş Yap</button></a>
        </div>
    </div>



</body>

</html>
