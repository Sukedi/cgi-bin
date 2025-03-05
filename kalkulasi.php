<?php
header("Access-Control-Allow-Origin: *"); // Izinkan akses dari GitHub Pages
header("Content-Type: application/json");

$angka = $_GET['angka'] ?? 0;
$hasil = $angka * 2; // Kalkulasi rahasia

echo json_encode(["hasil" => $hasil]);
?>
