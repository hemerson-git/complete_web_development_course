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
  
  class Message {
    private $to = null;
    private $topic = null;
    private $message = null;

    public function __construct($to, $topic, $message) {
      $this->to = $to;
      $this->topic = $topic;
      $this->message = $message;
    }
    
    public function __set($attr, $value) {
      $this->$attr = $value;
    }

    public function __get($attr) {
      return $this->$attr;
    }

    public function validMessage() {
      if(empty($this->to) || empty($this->topic) || empty($this->message)) {
        return false;
      }

      return true;
    }
  } 

  $message = new Message($_POST['to'], $_POST['topic'], $_POST['message']);

  if (!$message->validMessage()) {
    echo 'Mensagem inválida';
  }

  try {
    //Server settings
    $mail->SMTPDebug = false;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.example.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     // SMTP username
    $mail->Password   = 'secret';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
