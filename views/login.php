<?php
require("../Core/init.php");
if(isset($_REQUEST['submit'])){
    extract($_REQUEST);
    $log = new login();
 $check=$log->log_user($_POST['username']);
 if($check){
     header("location:home.php");
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username:
        <input type="text" name="username" id="">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>