<?php

ob_start();
session_start();

require 'baglan.php';

if(isset($_POST['kayit'])){
    
    
    $username=  $_POST['username'];
    $password=  $_POST['password'];
    $password_again= @$_POST['password_again'];    
    
    if(!$username){
        echo "Lütfen kullanıcı adınızı giriniz..";
    } elseif(!$password || !$password_again){
        echo "Lütfen şifrenizi giriniz..";
    } elseif ($password != $password_again){
        echo "Girdiğiniz şifreler birbiriyle aynı değil..";
    }else{
        //veritabanı kayıt işlemi
        $sorgu = $db->prepare('INSERT INTO kullanici SET user_name = ?, user_password = ?');
        $ekle = $sorgu->execute([
            $username,$password
        ]);
        if($ekle){
            echo "Kayıt başarıla gerçekleştirildi, yönlendiriliyorsunuz..";
            header('Refresh:2; giris.php');
            
        }else{
            echo "Hata, tekrar kontrol ediniz..";
			header('Refresh:2; kayit.php');
        }
    }
}

if(isset($_POST['giris'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if(!$username){
        echo "Kullanıcı adınızı giriniz..";
        
    }elseif(!$password){
        echo"Şifrenizi giriniz..";
    }else{
        $kullanici_sor = $db->prepare('SELECT * FROM kullanici WHERE user_name = ? && user_password = ?');
        
        $kullanici_sor -> execute([
            $username, $password
        ]);
        
        $say = $kullanici_sor-> rowCount();
        if($say==1){
            $_SESSION['username']=$username;
            echo "Hoş geldiniz $username, yönlendiriliyorsunuz..";
            header('Refresh:2; ../index.html');
            
        }else{
            echo "Hata, tekrar kontrol ediniz..";
			header('Refresh:2; giris.php');
			
        }
    }
}

?>
