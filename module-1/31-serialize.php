<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Serialize</title>
</head>
<body>
    <h1>Global Vars</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="username" placeholder="Name">
        <input type="email" name="email" placeholder="e-mail"><br>
        <textarea name="message" cols="30" rows="10">Your message</textarea><br>
        <input type="submit" value="send">
    </form>
<?php
    if (sizeof($_POST) != false){
        $data = serialize($_POST);
    }
?>
<p><?php echo (isset($data)) ? $data: '' ?></p>
</body>
</html>