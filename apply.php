<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';

function ms_validate_file_error($file_error)
{
	switch ($file_error) {
		case UPLOAD_ERR_OK:
			return true;
			break;
		case UPLOAD_ERR_NO_FILE:
			return false;
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			return false;
		default:
			return false;
	}
}


function ms_return_message($message)
{
	header('Content-type: application/json');
	echo json_encode($message);
	die();
}

$data_fields = array('name', 'email', 'professor', 'level');
foreach ($data_fields as $field) {
	if (!isset($_POST[$field])) {
		ms_return_message(array('msg' => 'error', '_msg' => 'Invalid form submission!'));
	}

	if (strlen(trim($_POST[$field])) <= 0) {
		ms_return_message(array('msg' => 'error', '_msg' => 'Invalid form submission! All fields are required.'));
	}


	${$field} = $_POST[$field];
}

if (!preg_match("/^[a-zA-Z ]*$/", $name))
	// $break = '<br><br/>';
	// $text = 'Invalid name. Only letters and white space allowed!' . $break . $name;
	// $err_text = str_ireplace($break, "\r\n", $text);
	ms_return_message(array('msg' => 'error', '_msg' => 'Invalid name. Only letters and white space allowed!'));

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	ms_return_message(array('msg' => 'error', '_msg' => 'Invalid email. Please use a valid email address!'));

// Validate phone

// if (!isset($_FILES['cv']['error']) || is_array($_FILES['cv']['error']))
// 	ms_return_message(array('msg' => 'error', '_msg' => 'Invalid or no file attached!'));
//
// if (!ms_validate_file_error($_FILES['cv']['error']))
// 	ms_return_message(array('msg' => 'error', '_msg' => 'Invalid or no file attached!'));
//
// if ($_FILES['cv']['size'] > 5*1048576)
// 	ms_return_message(array('msg' => 'error', '_msg' => 'File size too big. Maximum allowed is 5MB'));
//
// $finfo = new finfo(FILEINFO_MIME_TYPE);
// if (false === $ext = array_search($finfo->file($_FILES['cv']['tmp_name']), array(
// 		'txt'	=> 'text/plain',
// 		'pdf' 	=> 'application/pdf',
// 		'doc' 	=> 'application/msword',
// 		'docx' 	=> 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
// 	), true)) {
// 	ms_return_message(array('msg' => 'error', '_msg' => 'Invalid file type. Only .pdf, .doc and .docx files allowed.'));
// }

// Configuration
// $file_name = $_FILES['cv']['name'];
$email_to = 'hello@backyardbrains.com';
// $email_to = 'nikola.devbusiness@gmail.com';
$email_bbc = '';
$email_subject = 'COMING SOON - LANGING PAGE';
$email_from = $email;

// $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['cv']['name']));
// if (move_uploaded_file($_FILES['cv']['tmp_name'], $uploadfile)) {
$mail = new PHPMailer;
$mail->setFrom($email_from);
$mail->addAddress($email_to);
// $mail->addBCC($email_bbc);
$mail->Subject = $email_subject;
$mail->Body = "Name: " . $name. "\nEmail: " . $email . "\nProfessor: " . $professor ."\nLevel: ". $level;
if (!$mail->send())
	ms_return_message(array('msg' => 'error', '_msg' => 'Email not sent!'));
else {
	// setcookie('alphaform_ppc_2', 1, time() + (86400 * 10), "/");
	header('Location: https://backyardbrains.com/');
	//ms_return_message(array('msg' => 'ok', '_msg' => 'Email sent! Thank you for submitting your application!'));
}
// } else
	// ms_return_message(array('msg' => 'error', '_msg' => 'Invalid or no file attached!'));