<?php
require_once 'vendor/autoload.php';
if (isset($_POST["submit"])) {
    $receiver = $_POST["receiver"];
    $subject = $_POST["subject"];
    $msg = $_POST["message"];

    $messagebird = new MessageBird\Client('AaFyp69dvFPSJzgrVgvdrCsCd');
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
    <title>Send SMS using PHP</title>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 mx-auto bg-white shadow border p-4 rounded">
                <h2 class="text-center fw-bold mb-3">SMS Sender</h2>
                <form action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="receiver" class="form-label">Receiver</label>
                        <input type="text" class="form-control" placeholder="Enter receiver phone number" required name="receiver" id="receiver">
                    </div>
                    <div class="form-group mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" placeholder="Enter subject" required name="subject" id="subject">
                    </div>
                    <div class="form-group mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea rows="5" class="form-control" placeholder="Enter message" required name="message" id="message"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="submit">Send SMS</button>
                        <button type="reset" class="btn btn-danger">Reset form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>