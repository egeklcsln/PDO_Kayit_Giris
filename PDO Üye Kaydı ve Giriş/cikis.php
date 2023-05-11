<?php
session_start();
session_destroy();
header('location: giris-kaydol-sayfasi/giris.php?durum=exit');
exit;

?>