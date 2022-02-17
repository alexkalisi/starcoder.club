<?php
require $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
$to      = get_option("admin_email");
$subject = 'niya.pro | Заказ услуги';
$message = '<html>
<head>
  <title>Заказ услуги</title>
</head>
<body style="padding: 0;margin: 0;font-size: 14px;max-width: 1000px;width: 100%;">
<div style="border: 2px solid #292929;box-shadow: 0 0 10px;">
  <p style="font-size: 18px;background: #292929;padding: 0 15px;color: #fff;font-weight: 700;letter-spacing: 1px;line-height: 40px;margin: 0;">Заказ услуги</p>
  <p style="font-size: 18px; margin-left: 10px;">Имя:       ' . $_POST['name'] . '</p>
  <p style="font-size: 18px; margin-left: 10px;">Компания:  ' . $_POST['company'] . '</p>
  <p style="font-size: 18px; margin-left: 10px;">Телефон:   ' . $_POST['phone'] . '</p>
  <p style="font-size: 18px; margin-left: 10px;">Почта:     ' . $_POST['email'] . '</p>
  <p style="font-size: 18px; margin-left: 10px;">Сообщение: ' . $_POST['message'] . '</p>
</div>
</body>
</html>';
$headers = 'From: info@niya.pro' . "\r\n" .
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type: text/html; charset=UTF-8' . "\r\n" .
    		'Reply-To: info@niya.pro' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
$result = mail($to, $subject, $message, $headers, "-finfo@niya.pro");
if($result)
{
	the_field("form_success", pll_current_language('slug'));
}
else
{
	echo 'Error';
}
?>
