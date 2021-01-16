<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include librari phpmailer
include('../phpmailer/Exception.php');
include('../phpmailer/PHPMailer.php');
include('../phpmailer/SMTP.php');

$email_pengirim = 'teknikelekro.poltek@gmail.com'; // Isikan dengan email pengirim
$nama_pengirim = 'Admin' ; // Isikan dengan nama pengirim
$email_penerima = $_GET['email_penerima']; // Ambil email penerima dari inputan form
$subjek = "Broadcast Pengembalian Barang"; // Ambil subjek dari inputan form
$no_order = $_GET['no_order'];
$noinduk = $_GET['no_induk'];
// $pesan = $_GET['pesan']; // Ambil pesan dari inputan form
// $attachment = $_FILES['attachment']['name']; // Ambil nama file yang di upload

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Username = $email_pengirim; // Email Pengirim
$mail->Password = 'Teknikelektro17'; // Isikan dengan Password email pengirim
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
// $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging

$mail->setFrom($email_pengirim, $nama_pengirim);
$mail->addAddress($email_penerima, '');
$mail->isHTML(true); // Aktifkan jika isi emailnya berupa html

// Load file content.php
ob_start();
include "broadcast_content.php";

$content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
ob_end_clean();

$mail->Subject = $subjek;
$mail->Body = $content;
// $mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
$send = $mail->send();

if($send){ // Jika Email berhasil dikirim
        echo "<h1>Email berhasil dikirim</h1>";
}else{ // Jika Email gagal dikirim
    echo "<h1>Email gagal dikirim</h1>";
    // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
}

?>
