<?php
require_once 'vendor/autoload.php';
if (isset($_POST["submit"])) {
    $receiver = $_POST["receiver"];
    $subject = $_POST["subject"];
    $msg = $_POST["message"];

    $messagebird = new MessageBird\Client('2b3pCXGXbxQtpqdRhAYGYJVyc');
    $message = new MessageBird\Objects\Message;
    $message->originator = '+21625992141';
    $message->recipients = [ $receiver ];
    $message->body = $msg;
    $response = $messagebird->messages->create($message);
    var_dump($response);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;900&family=Jost:wght@300&family=Lato&family=Rubik+Microbe&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;900&family=Jost:wght@300&family=Lato:wght@400;700&family=Rubik+Microbe&display=swap" rel="stylesheet">
    <link href="../../../CSSFiles/button.css" rel="stylesheet">
    <link href="../../../CSSFiles/color.css" rel="stylesheet">
    <link href="../../../CSSFiles/place.css" rel="stylesheet">
    <link href="../../../CSSFiles/size.css" rel="stylesheet">
    <link href="../../../CSSFiles/text.css" rel="stylesheet">
    <link href="../../../CSSFiles/background.css" rel="stylesheet">
    <style>

    body
    {
    -webkit-font-smoothing : antialised;
    -moz-osx-font-smoothing: grayscale;
    margin: 0px;
    font-family: 'Lato', sans-serif;

    background-image: url('../../../images/cadre_mailing.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;


    }
</style>
    <title>Send SMS using PHP</title>
</head>
<br> 
<div class="flex items-center " >
        
        <button class="bg-brand-lightBrown text-white border-none rounded-full uppercase px-25 py-12 font-bold text-sm"
            style ="    margin-left: 1228px;"><a class ="text-white no-underline" 
             href="../../../jon/index.html"> Return </a>  </button>
             
    </div>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 mx-auto shadow  p-4 rounded">
                <h2 class="text-center fw-bold mb-3">SMS Sender</h2>
                <form action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="receiver" style="font-size: 20px; margin-block: 18px; " class=" text-grey  ">Receiver</label>
                        <input type="text" class="form-control" placeholder="Enter receiver phone number" required name="receiver" id="receiver">
                    </div>
                    <div class="form-group mb-3">
                        <label for="subject" style="font-size: 20px; margin-block: 18px; " class=" text-grey  ">Subject</label>
                        <input type="text" class="form-control" placeholder="Enter subject" required name="subject" id="subject">
                    </div>
                    <div class="form-group mb-3">
                        <label for="message" style="font-size: 20px; margin-block: 18px; " class=" text-grey  ">Message</label>
                        <textarea rows="5" class="form-control" placeholder="Enter message" required name="message" id="message"></textarea>
                    </div>
                    <div>
                        <button type="submit" class=" container-end bg-dark text-white border-none rounded-full my-5 px-25 py-12 font-lato " 
                            style=" margin-left: 419px; " name="submit">Send SMS</button>
                        <button type="reset"class=" container-end bg-dark text-white border-none rounded-full my-5 px-25 py-12 font-lato " 
                            style=" margin-left: 419px; ">Reset form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>