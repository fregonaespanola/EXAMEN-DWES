<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["recupera"])){
    try {
        $mail = new PHPMailer(true);

        $verification_code = uniqid();

        $email = $_POST["email"];

        // Configuración de PHPMailer
        $mail->isSMTP();
        $mail->Host= 'smtp.gmail.com';
        $mail->SMTPAuth= true;
        $mail->Username= 'dgayala002@gmail.com';
        $mail->Password= 'edlqomvjwongzrhs';
        $mail->SMTPSecure= 'ssl';
        $mail->Port= 465;

        $mail->setFrom('dgayala002@gmail.com', 'dani');

        $mail->addAddress($email, $name);

        $mail->isHTML(true);

        $mail->Subject = 'Verificación de correo electrónico';

        // Enlace de verificación con el token
        $verification_link = "http://127.0.0.1:8000/new_pass.php?email=$email&code=$verification_code";

        // Cuerpo del mensaje con el enlace de verificación
        $mail->Body = "Hola $name,<br><br>Por favor, haz clic en el siguiente enlace para cambiar tu password: <a href='$verification_link'>Verificar correo electrónico</a>";

        // Envío del correo electrónico
        $mail->send();

        // Insertar el usuario en la base de datos con PDO
        /*
        $pdo = new PDO('mysql:host=localhost;dbname=nombre_base_de_datos', 'usuario', 'contraseña');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('INSERT INTO tokens (email, token, exp_date) VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 10 MINUTE))');
        $stmt->execute([$email, $verification_code]);*/

        echo "<script>alert('Se ha enviado un correo electrónico de verificación. Por favor, verifica tu correo electrónico.');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Error al enviar el correo electrónico de verificación: {$mail->ErrorInfo}');</script>";
    }
}
?>
