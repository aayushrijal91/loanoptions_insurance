<?php
include __DIR__ . '/functions.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
require './vendor/autoload.php';

if (isset($_POST['request']) && $_POST['request'] == 'insurance_form_enquiry') {
    $tableStyle = 'border: 1px solid #ddd;text-align: left; border-colspan: colspan; width: 100%;';
    $tableCellStyle = 'border: 1px solid #ddd;text-align: left; padding: 15px;';
    $tableCellStyler = 'border: 1px solid #ddd;text-align: right; padding: 15px;';
    $tableCellStyleHead = 'border: 1px solid #ddd;text-align: center; padding: 15px;';

    $html = "<table style='" . $tableStyle . "'>
                <tr>
                    <td style='" . $tableCellStyle . "'>Name</td>                                    
                    <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['first_name']) . ' ' . strip_tags($_POST['last_name']) . "</td>                                    
                </tr>
                <tr>
                    <td style='" . $tableCellStyle . "'>Company Name</td>
                    <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['company_name']) . "</td>
                </tr>
                <tr>
                    <td style='" . $tableCellStyle . "'>ABN Details</td>
                    <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['abn_number']) . "</td>
                </tr>
                <tr>
                    <td style='" . $tableCellStyle . "'>Phone Number</td>                                    
                    <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['phone_number']) . "</td>
                </tr>
                <tr>
                    <td style='" . $tableCellStyle . "'>Email</td>                                    
                    <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['email_address']) . "</td>
                </tr>
                <tr>
                    <td style='" . $tableCellStyle . "'>Best method of contact</td>
                    <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['contactMethod']) . "</td>
                </tr>
                <tr>
                    <td style='" . $tableCellStyle . "'>Insurance Type</td>
                    <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['insuranceType']) . "</td>
                </tr>";

    $html .= "</table>
            <p>Thanks..</p>
            <p>Loan Options Team</p>";

    $subject = 'Loan Options Insurance';
    $message = $html;
    $to_email = $admin_email;

    $result = _phpmailer($to_email, $site, $subject, $message, $no_reply_email, $cc_email, $bcc_email);

    echo $result ? "success" : "fail";
}

function _phpmailer($to_email, $site, $subject, $message, $no_reply_email, $cc, $bcc)
{
    $mail = new PHPMailer(true);

    try {
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Port     = 465;
        // $mail->Username = "aayush.rijal99@gmail.com";
        // $mail->Password = "koqg rtwa oxqi vjon";
        $mail->Username = "hello@loanoptions.ai";
        $mail->Password = "qnofgyotqpunhxpf";
        $mail->Host     = "smtp.gmail.com";
        $mail->Mailer   = "smtp";
        $mail->SetFrom($no_reply_email, $site);
        $mail->AddAddress($to_email);
        if ($cc != '') {
            $mail->addCC($cc);
        }
        if ($bcc != '') {
            $mail->addBCC($bcc);
        }
        $mail->Subject = $subject;
        $mail->WordWrap   = 80;
        $mail->MsgHTML($message);
        $mail->IsHTML(true);
        $res = $mail->send();

        return $res;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
