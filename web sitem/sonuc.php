<?php
$dogru_kullanici = "b1812100001@sakarya.edu.tr";
$dogru_sifre = "b1812100001";

// Formdan gelen verileri al
$kullanici = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];

// Boş alan kontrolü
if (empty($kullanici) || empty($sifre)) {
    echo "Lütfen tüm alanları doldurunuz.";
    header("refresh:2;url=login.html");
    exit;
}

// E-posta format kontrolü
if (!filter_var($kullanici, FILTER_VALIDATE_EMAIL)) {
    echo "Lütfen geçerli bir e-posta adresi girin.";
    header("refresh:2;url=login.html");
    exit;
}

// Bilgiler doğruysa yönlendir
if ($kullanici == $dogru_kullanici && $sifre == $dogru_sifre) {
    echo "Hoşgeldiniz $sifre. Yönlendiriliyorsunuz...";
    header("refresh:2;url=hakkımda.html");
    exit;
} else {
    echo "Kullanıcı adı veya şifre hatalı. Login sayfasına yönlendiriliyorsunuz...";
    header("refresh:2;url=login.html");
    exit;
}
?>
