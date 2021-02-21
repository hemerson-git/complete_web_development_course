<?php
ini_set('display_errors', true);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "assets/vendor/php_mailer/Exception.php";
require "assets/vendor/php_mailer/OAuth.php";
require "assets/vendor/php_mailer/PHPMailer.php";
require "assets/vendor/php_mailer/POP3.php";
require "assets/vendor/php_mailer/SMTP.php";

$mail = new PHPMailer(true);

class Message
{
  private $to = null;
  private $topic = null;
  private $message = null;
  public $status = ['status_code' => null, 'send_message' => ''];

  public function __construct($to, $topic, $message)
  {
    $this->to = $to;
    $this->topic = $topic;
    $this->message = $message;
  }

  public function __set($attr, $value)
  {
    $this->$attr = $value;
  }

  public function __get($attr)
  {
    return $this->$attr;
  }

  public function validMessage()
  {
    if (empty($this->to) || empty($this->topic) || empty($this->message)) {
      return false;
    }

    return true;
  }
}

$message = new Message($_POST['to'], $_POST['topic'], $_POST['message']);

if (!$message->validMessage()) {
  echo 'Mensagem inválida';
  header('Location: index.php');
  die();
}

try {
  //Server settings
  $mail->SMTPDebug = false;                      // Enable verbose debug output
  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'in-v3.mailjet.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = '';                     // SMTP username
  $mail->Password   = '';                               // SMTP password
  $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
  $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

  //Recipients
  $mail->setFrom('', 'Mailer');
  // $mail->addAddress($message->__get('to'), 'Joe User');     // Add a recipient
  $mail->addAddress($message->__get('to'));               // Name is optional
  $mail->addReplyTo('info@example.com', 'Information');
  $mail->addCC('cc@example.com');
  $mail->addBCC('bcc@example.com');

  // Attachments
  // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = $message->__get('topic');
  $mail->Body    = $message->__get('message');
  $mail->AltBody = $message->__get('message');

  $mail->send();

  $message->status['status_code'] = 1;
  $message->status['send_message'] = 'Mensagem enviada com sucesso!!';
} catch (Exception $e) {
  $message->status['status_code'] = 2;
  $message->status['send_message'] = "Não foi possível enviar a mensagem! tente novamente mais tarde." .
    "Detalhes do erro: {$mail->ErrorInfo}";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>App Mail Send</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="py-3 text-center">
      <img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
      <h2>Send Mail</h2>
      <p class="lead">Seu app de envio de e-mails particular!</p>
    </div>

    <div class="row">
      <div class="col-12">

        <?php if($message->status['status_code'] === 1) { ?>
          <div class="container text-center">
            <h1 class="display-4 text-success">Sucesso</h1>
            <p><?= $message->status['send_message'] ?></p>

            <a href="index.php" class="btn btn-success btn-large mt-5">Voltar</a>
          </div>
        <?php } ?>

        <?php if($message->status['status_code'] === 2) { ?>
          <div class="container text-center">
            <h1 class="display-4 text-danger">Ops!</h1>
            <p><?= $message->status['send_message'] ?></p>

            <a href="index.php" class="btn btn-danger btn-large mt-5">Voltar</a>
          </div>
        <?php } ?>
      </div>
    </div>

  </div>
</body>

</html>
