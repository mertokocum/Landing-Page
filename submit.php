<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "iletisim"; // Oluşturduğunuz veritabanı adı

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}

// Formdan gelen verileri al
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Veritabanına ekle
$sql = "INSERT INTO anket (ad, email, mesaj) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Anket başarıyla gönderildi!";
} else {
    echo "Anket gönderilirken hata oluştu: " . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>

<!-- /*CREATE TABLE anket (
 id INT AUTO_INCREMENT PRIMARY KEY,
 ad VARCHAR(255) NOT NULL,
 email VARCHAR(255) NOT NULL,
 mesaj TEXT NOT NULL
);
*/ -->
