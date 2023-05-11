<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" crossrigin="anonymous">
    <link rel="stylesheet"  type ='text/css'href="giriscss.css">
    <title>Giriş</title>
</head>
<body>
    <div class="main">
        <div class="left-side"> 
            <img src="code.png">
        </div>
    
     <div class="right-side">
        <hr><hr>
        <h1>Giriş Yap</h1>
        <form action="../islem.php" method="post">
        <div>
            <i class="fas fa-user"></i>
            <input type="text" name="kadi"placeholder="Kullanıcı Adınızı Girin" id="username" required>
        </div>
        <div>
            <i class="fas fa-key"></i>
            <input type="password" name="sifre" placeholder="Şifrenizi Girin" id="password" required>
        </div>
        <button type="submit" name="giris_yap">Giriş Yap</button>
        <p>Hesabınız yok mu?</p>
        <button type="submit" name="kayit">Kayıt Ol</button>
        </form>
        <p>Veya Bunlar İle Giriş Yap</p>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>

        

     </div>

    </div>
        


    
    
</body>
</html>