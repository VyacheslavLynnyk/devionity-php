<?php
session_start();

require_once __DIR__ . '/libs.php';

if (isAuthorized() === true) {
    header('LOCATION: ./index.php');
}

if (isset($_POST['go'])) {
    if (isset($_POST['login']) && isset($_POST['pass'])) {

        require_once __DIR__ . '/db-conf.php';
        $link = connect();

        $login = mysqli_real_escape_string($link, $_POST['login']);
        $pass = mysqli_real_escape_string($link, $_POST['pass']);
        $pass = md5($pass . md5('solt'));

        $sql = "SELECT id, user, pass FROM users WHERE user='$login'";
        $wasInBase = ($res = mysqli_query($link, $sql)) ? mysqli_fetch_assoc($res) : false ;
        if ($wasInBase == false) {
            $user_id = createUser($link, $login, $pass);
            login($link, $user_id);
        } elseif (isset($wasInBase['pass']) && $wasInBase['pass'] == $pass) {
                login($link, $wasInBase['id']);
        } else {
            $message = 'Неправильный пароль или пользователь с таким логином уже существует.';
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="registration">
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <h2>Sign In / Registrate</h2>
            <input type="text" name="login" required placeholder="login">
            <input type="password" name="pass" required placeholder="password">
            <input type="submit" value="login / registrate" name="go">
            <label for=""><?= isset($message) ? $message : '';?></label>
        </form>
    </div>
</body>
</html>

