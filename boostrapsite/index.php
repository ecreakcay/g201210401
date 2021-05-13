<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Formu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Giriş Yap</h1>
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
                </div>
                <button href="index.php" name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</button>
            </form>
            <a href="kayit.php"><button class="btn btn-primary btn-large btn-block">Kayıt Ol</button></a>
        </div>
    </div>



</body>

</html>
