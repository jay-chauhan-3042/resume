<?php

require_once("mysqli-class/MysqliDb.php");
require_once(".env.php");
require_once("PHPMailer/src/Exception.php");
require_once("PHPMailer/src/PHPMailer.php");
require_once("PHPMailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Configure DB
$db = new MysqliDb($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE);

// Create a PHPMailer instance
$mail = new PHPMailer();

// Get Post Data
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Configure SMTP settings (if needed)
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'jay.chauhan3042@gmail.com';
$mail->Password = 'jhbjbqtvhzqghzvp';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Enable HTML content in the email body
$mail->isHTML(true);

// Set the email's sender and recipient
$mail->setFrom('jay.chauhan3042@gmail.com', 'Jay Chauhan');
$mail->addAddress($email, $name);

// Set the email subject
$mail->Subject = 'RE: ' . $subject;

// Set the HTML content of the email body
$mail->Body = '<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>RE: ' . $subject . '</title>
</head>

<body style="height: 100% !important; width: 100% !important; background-color: #e1e5ea; margin: 0; padding: 0; background-color: #F0F2F4;">
<table border="0" cellpadding="0" cellspacing="0" style="width: 100%; height: 100%; background-color: #F0F2F4;">
    <tbody>
        <tr>
            <td style="vertical-align: top; background-color: #F0F2F4;">
                <table border="0" cellpadding="0" cellspacing="0" align="center" style="width: 600px;">
                    <tbody>
                        <tr>
                            <td style="text-align: center; padding-top: 40px; padding-bottom: 20px;">
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #FFFFFF;padding-bottom: 40px;">
                                <table border="0" cellpadding="0" cellspacing="0" align="center"
                                    style="width: 520px;">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="padding-top: 40px; font-family:helvetica,arial; font-size:14px; line-height:20px; color:#333333">
                                                Hello <a href="mailto:{{bas_users.user_email}}"
                                                    style="color:#333333; text-decoration: none;">' . $name . '</a>,
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="padding-top: 12px; font-family:helvetica,arial; font-size:14px; line-height:20px; color:#333333">
                                                I appreciate your message regarding <strong>"' . $subject . '"</strong><br>
                                                Request. Rest assured, I\'ve received it and will respond promptly. <br>
                                                I\'ll be in touch as soon as possible. <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="padding-top:20px;">
                                                <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                    <tbody>
                                                        <tr>
                                                            <td
                                                                style="padding-left:30px;padding-top: 10px; padding-bottom: 10px; background-color: #222222; border-top-left-radius: 4px; border-bottom-left-radius: 4px;">
                                                                &nbsp;
                                                            </td>
                                                            <td
                                                                style="background-color:#222222; font-family:helvetica,arial; font-size:16px; line-height:24px; font-weight: 700; color:#FFFFFF; padding-top: 10px; padding-bottom: 10px;">
                                                                <a style="color:#FFFFFF; text-decoration: none;"
                                                                    href="http://resume-jay.is-best.net" target="_blank" rel="noopener">
                                                                    Visit Website
                                                                </a>
                                                            </td>
                                                            <td
                                                                style="padding-right:30px;padding-top: 10px; padding-bottom: 10px; background-color: #222222; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="padding-top: 30px; font-family:helvetica,arial; font-size:14px; line-height:20px; color:#333333">
                                                Or paste this link into your browser:
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="padding-top: 12px; font-family:helvetica,arial; font-size:14px; line-height:20px; color:#333333; word-break: break-all;">
                                                <a href="http://resume-jay.is-best.net" target="_blank" rel="noopener"
                                                    style="color:#2D8CFF; text-decoration: none;">
                                                    http://resume-jay.is-best.net
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="padding-top: 12px; font-family:helvetica,arial; font-size:14px; line-height:20px; color:#333333">
                                                Have a great day!
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="padding-top: 20px; padding-bottom: 30px; background-color: #FFFFFF; border-top-color:#F0F2F4; border-top-style: solid; border-top-width: 1px;">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="font-family:helvetica,arial; font-size:12px; line-height:18px; color:#999999; text-align:center; padding-top: 10px;">
                                                Copyright &copy;2023 Jay Chauhan. All rights reserved.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="padding-top: 10px; padding-bottom: 40px; font-family:helvetica,arial; font-size:11px; line-height:15px;  color: #999;">
                                My mailing address is:
                                <br />
                                1, Global Residency, Nr. Raj Harmony,
                                <br />
                                Ugat - Bhesan Road, Jahangirabad, Surat, Gujarat 395009
                                <br />
                                +91 93134 40532
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

</html>';

// Send the email
if ($mail->send()) {
    $mailSent = "1";
} else {
    $errorInfo = $mail->ErrorInfo;
    $errorCode = "";

    // Use a regular expression to extract the error code
    if (preg_match('/\d{3}/', $errorInfo, $matches)) {
        $errorCode = $matches[0];
    }
    $mailSent = $errorCode;
}

// Insert into DB
$data = array(
    "name" => $name,
    "email" => $email,
    "subject" => $subject,
    "message" => $message,
    "mail_sent" => $mailSent
);

$id = $db->insert('tblContact', $data);
echo "OK";
// echo (array("ok" => true, "data" => "OK"));
