<?php
// Menangani pengiriman form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $attendance = $_POST['attendance'];
    $message = htmlspecialchars($_POST['message']);
    $date = date("d M Y H:i:s");

    // Menyimpan data ke file
    $data = "Nama: $name\nStatus: $attendance\nUcapan: $message\nTanggal: $date\n\n";
    file_put_contents('messages.txt', $data, FILE_APPEND);
}

// Menampilkan ucapan dari file
if (file_exists('messages.txt')) {
    $messages = file_get_contents('messages.txt');
    echo nl2br($messages); // Menampilkan pesan dengan format baru
}
?>
