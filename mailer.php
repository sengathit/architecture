<!DOCTYPE html>

<html>
    <head>
        <link href='css/days_old.css' rel='stylesheet' type='text/css' />
        <title>mailer</title>
        <?php include 'include/headInfo.php' ; ?>
    </head>
    <body>
        <section id='main'>
            <h1>Mailer</h1>
            <?php
                include_once('phpmailer/phpmailer.inc.php');
                $mail = new PHPMailer;

                //$mail->ClearAddresses();
                $mail->AddAddress('sengathit.l@gmail.com','Black Mamba');
                $mail->From = 'root@localhost';
                $mail->FromName = 'Sengathit Lavanh';
                $mail->Subject = 'Test message, Hope it works.';
                $mail->Body = 'I will get my FBI background check and apply for South Korea again.';
                
                if($mail->Send()){
                    echo 'Message sent.';
                }
                else{
                    echo $mail->ErrorInfo;
                }
                
            ?>
        </section>
    </body>
</html>