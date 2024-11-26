<?php




//------- für E-Mails -------//


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$title = $_POST["title"];
$name = $_POST["name"];
$email = $_POST["email"];
$nachricht = $_POST["nachricht"];

if (isset($_POST["submit"])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl'; //tls
    $mail->Port = 465; //587

    $mail->Username = 'noor.shawaf.13@gmail.com';
    $mail->Password = 'bysn azta xdfx vngr';

    $mail->setFrom($email, $name);

    $mail->addAddress("nooraldeen.yamk@stud.hawk.de", "Nooraldeen Yamk");

    $mail->isHTML(true);

    $mail->Subject = $title;
    $mail->Body = $nachricht;

    try {
        //$mail->send();
        echo "
            <script>
            alert('Nachricht wurde erfolgreich gesendet');
            document.location.href = '../../Unterseite2.php';
            </script>
        ";
    } catch (Exception $e) {
        echo "Fehler beim Senden. Mailer Error: {$mail->ErrorInfo}";
    }


    //------- um Daten in einem Textdatei zu speichern -------//

    extract($_REQUEST);

    $timestamp = date("d-m-Y H:i:s");
    
    $file = fopen("erstellte Nachrichten.txt", "a");
    fwrite($file, "------------------" . "\n");
    fwrite($file, "Datum und Uhrzeit: ");
    fwrite($file, $timestamp . "\n");
    fwrite($file, "Title: ");
    fwrite($file, $title . "\n");
    fwrite($file, "Author: ");
    fwrite($file, $name . "\n");
    fwrite($file, "E-Mail: ");
    fwrite($file, $email . "\n");
    fwrite($file, "Nachricht: ");
    fwrite($file, $nachricht . "\n");
    fwrite($file, "------------------" . "\n");
    fclose($file);
    ;


     //------- um Daten in einer JSON-Datei zu speichern -------//

     $jsonFile = 'nachrichten.json';

     // Load existing data from JSON file
     $existingData = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];
 
     // Add new data
     $newData = [
         "dat_uhrzeit" => $timestamp,
         "title" => $title,
         "author" => $name,
         "e_mail" => $email,
         "nachricht" => $nachricht,
     ];
 
     $existingData[] = $newData;
 
     // Save updated data to JSON file
     file_put_contents($jsonFile, json_encode($existingData, JSON_PRETTY_PRINT));
 
     


}



?>
