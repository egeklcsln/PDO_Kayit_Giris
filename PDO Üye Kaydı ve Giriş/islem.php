<?php  
require_once 'baglan.php';
session_start();
ob_start();
?>
<?php
    //kayıt ekleme
if(isset($_POST['kayit_ol'])){
    $kullanici_ad = $_POST['kadi2'];
    $kullanici_sifre = $_POST['sifre2'];
    $kullanici_mail = $_POST['mail'];

    //kullanici var mı yok mu?
    $kullanicisor=$db->prepare('SELECT * FROM kullanici WHERE kullanici_mail=:mail');
    $kullanicisor->execute([
     'mail'=>$kullanici_mail]);
    //dönen satır sayıları
    $say=$kullanicisor->rowCount();
    if($say==0){
        $kaydet=$db->prepare('INSERT INTO kullanici  SET 
        kullanici_ad=:kullanici_ad,
        kullanici_mail=:kullanici_mail,
        kullanici_sifre=:kullanici_sifre
        ');
        $insert=$kaydet->execute([
            'kullanici_ad'=>$kullanici_ad,
            'kullanici_mail'=>$kullanici_mail,
            'kullanici_sifre'=>$kullanici_sifre
        ]);
        if($insert){ 
            header('location: giris-kaydol-sayfasi/giris.php?durum=kayitbasarili');
         }
         else{
            header('location: giris-kaydol-sayfasi/kaydol.php?durum=kayitbasarisiz');
        }
        
    
    }

}
//giriş
if(isset($_POST['giris_yap'])){
    $kullanici_ad = $_POST['kadi'];
    $kullanici_sifre = $_POST['sifre'];
    $kullanicisor=$db->prepare('SELECT * FROM kullanici
     WHERE kullanici_ad=:kullanici_ad and kullanici_sifre=:kullanici_sifre');
    $kullanicisor->execute([
        'kullanici_ad'=>$kullanici_ad,
        'kullanici_sifre'=>$kullanici_sifre                        
    ]);

    $say=$kullanicisor->rowCount();
    if($say==1){
        $_SESSION['userkullanici_ad']=$kullanici_ad;
        header('location: anasayfa/index.php?durum=girisbasarili');
        exit;
    }
    else{
        header('location: giris-kaydol-sayfasi/giris.php?durum=girisbasarisiz');
        exit;
    }
    
    

}

if(isset($_POST['kayit'])){
    header('location: giris-kaydol-sayfasi/kaydol.php');
    exit;
}
if(isset($_POST['giris'])){
    header('location: giris-kaydol-sayfasi/giris.php');
    exit;
}













?>