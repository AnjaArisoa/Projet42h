<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('Welcome/logon'); ?>" method="post">
        <input type="text" name="name" id="">
        <input type="password" name="psw" id="">
        <input type="submit" value="Valider">
    </form>
</body>
</html>