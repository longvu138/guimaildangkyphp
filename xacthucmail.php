<?php
include 'PHPMailer/class.smtp.php';
include 'PHPMailer/class.phpmailer.php';
$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
// $mail->Encoding = "16bit";
$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "smtp.gmail.com"; // specify main and backup server
$mail->Port = 465; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = 'ssl';
$mail->Username = "longvu13082000@gmail.com"; // tên người dùng SMTP hoặc tên người dùng gmail của bạn
$mail->Password = "vu1382000"; // mật khẩu email hoặc mật khẩu 2 lớp
// $from = "longvu1382000@gmail.com"; // Trả lời email này
$to = "tranlongvu138@gmail.com"; // ID người nhận email
$name = "Tran Long Vu"; //tên người nhận
// $mail->From = $from;
$mail->FromName = "WEB"; //tên người gui
$mail->AddAddress($to, $name);
// $mail->AddReplyTo($from,"");
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = '[Lan Que Phuong]';
$mail->Body    = 'tesst xac ';
$mail->AltBody = '';
// $mail->SMTPDebug = 2;
if (!$mail->Send()) {
   echo "<h1>Loi khi goi mail: " . $mail->ErrorInfo . '</h1>';
} else {
   echo "<h1>Send mail thanh cong</h1>";
}
?>