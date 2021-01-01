<?php
if (isset($_POST["signup"])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$city    = $_POST["city"];
	$address1  = $_POST["address1"];
	$address2  = $_POST["address2"];
	$statecountry = $_POST["statecountry"];
	$Registration_date  = $_POST["Registration_date"];
	$phone  = $_POST["phone"];
	$zcodepcode  = $_POST["zcodepcode"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	require_once "config.php";
	$sql = "SELECT * FROM users WHERE email = '$email'";
	// Thực thi câu truy vấn
	$result = mysqli_query($conn, $sql);
	// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
	if (mysqli_num_rows($result) > 0) {
		// Sử dụng javascript để thông báo
		echo '<script language="javascript">alert("Email đã tồn tại"); window.location="index.php";</script>';

		// Dừng chương trình
		die();
	}
	if ($password != $confirmpassword) {
		echo  '<script language="javascript">alert("Mật Khẩu Không khớp"); window.location="index.php";</script>';
	} else {
		require_once "config.php";

		$sql = "INSERT INTO users (first_name, last_name, email, password,	registration_date,  user_level, address1, address2, city, state_country,  zcode_pcode, phone)
		VALUES ('$firstname', '$lastname', '$email', '$password','$Registration_date', '','$address1', '$address2','$city','$statecountry','$zcodepcode',$phone)";

		if (mysqli_query($conn, $sql)) {
			$hash = md5(rand(0, 1000));
			echo $hash;
			mysqli_query($conn, "UPDATE `users` SET `activation_code` = '$hash' WHERE `users`.`email` = '$email'");

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
			$to = $email; // ID người nhận email
			$name = "Tran Long Vu"; //tên người nhận
			// $mail->From = $from;
			$mail->FromName = "WEB"; //tên người gui
			$mail->AddAddress($to, $name);
			// $mail->AddReplyTo($from,"");
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = '[verify]';
			$mail->Body    = 'cảm ơn bạn đã đăng ký!<br>
			Tài khoản của bạn đã được tạo<br>
			Bạn có thể đăng nhập với các thông tin sau sau khi bạn đã kích hoạt tài khoản của mình bằng cách nhấn đường link bên dưới.<br>
			  
			------------------------<br>
			Username: ' . $name . '<br>
			Password: ' . $password . '<br>
			------------------------<br>
			  
			Please click this link to activate your account:<br>
			<a href="http://localhost/thuchanh4/LoginSession/verify.php?email=' . $email . '&hash=' . $hash . '">click</a>
			  
			';
			$mail->AltBody = '';
			// $mail->SMTPDebug = 2;
			if (!$mail->Send()) {
				echo "<h1>Loi khi goi mail: " . $mail->ErrorInfo . '</h1>';
			} else {
				echo 'Đăng ký tài khoản thành công vui lòng đến gmail để kích hoạt tài khoản ';
				echo'<a href="www.gmail.com">Gmail</a>' ;
				echo'Hoặc quay về trang chủ ';
				echo '<a href="index.php">Quay Lại trang chủ</a>';
			}


			// $query=mysqli_query($conn, "UPDATE `users` SET `status` = '1' WHERE `users`.`email` = '.$email.'");

		} else {
			// header("location:error.php");
		}
	}
}
