<?php
session_start();
$_SESSION['user'] = isset($_GET['user']) === true ? (int)$_GET['user'] : 0;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Chat</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="chat">
        <div class="messages">
            <div class="message">

            </div>
        </div> <textarea name="" class="entry" id="" cols="30" rows="10" placeholder="Type here and hit Return. Use Shift + Return for a new line.."></textarea>
    </div>
    <script src="lincoln/jquery.js"></script>
    <script src="http://code.jquery.com/jquery-1.0.2.min.js"></script>
    <script src="js/chat.js"></script>

</body>

</html>