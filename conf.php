<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'cosbo';

// Buat koneksi PDO
try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
  
  // Konfigurasi opsi PDO
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  echo "Koneksi berhasil";
} catch(PDOException $e) {
  echo "Koneksi gagal: " . $e->getMessage();
}
?>
