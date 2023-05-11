<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" crossrigin="anonymous">
    <link rel="stylesheet"  type ='text/css'href="stil.css">
    <title>Kayıt Ol</title>
</head>
<body>
    <div class="main">
        <div class="left-side"> 
            <img src="code.png">
        </div>
    
     <div class="right-side">
        <hr><hr>
        <h1>Kayıt Ol</h1>
        <form action="../islem.php"method="post">
        <div>
            <i class="fas fa-user"></i>
            <input type="text" name="kadi2"placeholder="Kullanıcı Adınızı Girin" id="username" required>
        </div>
        <div>
            <i class="fas fa-key"></i>
            <input type="password" name="sifre2" placeholder="Şifrenizi Girin" id="password" required>
        </div>
        <div>
            <i class="fas fa-solid fa-envelope"></i>
            <input type="text" name="mail" placeholder="Mail Adresinizi Girin"  required>
        </div>
      
        <button type="submit" name="kayit_ol">Kayıt Ol</button>
        <p>Hesabınız var mı?</p>
        </form>
        <form action="../islem.php" method="post">
        <button type="submit" name="giris">Giriş</button>
        </form>
        <p>Veya Bunlar İle Kayıt Ol</p>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>

     </div>

    </div>
        


    
    
</body>
</html>