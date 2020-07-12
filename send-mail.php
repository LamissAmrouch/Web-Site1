<?php
    // ever since version 6. of PHP Mailer use this way //
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    /* Exception class. */
    require './phpmailer/src/Exception.php';

    /* The main PHPMailer class. */
    require './phpmailer/src/PHPMailer.php';

    /* SMTP class, needed if you want to use SMTP. */
    require './phpmailer/src/SMTP.php';

    $mail = new PHPMailer(TRUE);

    /* Open the try/catch block. */
    try {
        $mail->isSMTP();
        $mail->Host = "smtp.googlemail.com";
        $mail->isHTML(true);
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'widaddekkiche@gmail.com';
        $mail->Password = 'Widi77Dou';
        //$mail->SMTPDebug  = true; 

        /* Set the mail sender. */
        $mail->setFrom($_POST['email'], $_POST['name']);

        /* Add a recipient. */
        $mail->addAddress('fw_dekkiche@esi.dz', 'Widad');

        /* Set the subject. */
        $mail->Subject = $_POST['subject'];;

        /* Set the mail message body. */
        $mail->Body = $_POST['message'];

        /* Finally send the mail. */
        $mail->send();
    }
    catch (Exception $e){   
        /* PHPMailer exception. */
        echo $e->errorMessage();
    }
    catch (\Exception $e){
       /* PHP exception (note the backslash to select the global namespace Exception class). */
       echo $e->getMessage();
    }
   /* $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = 'senaidbacinovic@gmail.com';
    $mail->Password = 'amy_backo31';

    $mail->setFrom('senaidbacinovic@gmail.com', 'Senaid Bacinovic');
    $mail->addAddress('hello@codingpassiveincome.com');
    $mail->Subject = 'SMTP email test';
    $mail->Body = 'this is some body';

    if ($mail->send())
        echo "Mail sent"; */

?>