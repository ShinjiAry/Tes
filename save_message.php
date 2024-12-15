<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $attendance = htmlspecialchars($_POST['attendance']);
    $message = htmlspecialchars($_POST['message']);
    $date = date('d M Y H:i:s');

    // Gabungkan data menjadi satu string
    $messageData = $name . '|' . $attendance . '|' . $message . '|' . $date . PHP_EOL;

    // Simpan ke dalam file
    file_put_contents('messages.txt', $messageData, FILE_APPEND);

    // Redirect kembali ke halaman utama
    header("Location: index.php");
    exit();
}
