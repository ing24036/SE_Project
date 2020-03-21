<?php
session_start();
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user == 'user' && $pass = '1111'){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        header("location:./pages_user/index_user.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<form action="./login.php" method="post">
    <H3>Username</H3><input type="text" name="username">
    <H3>Password</H3><input type="password" name="password">
    <button type="submit" name="login" value="true">login</button>
</form>
</body>
</html>

<?php
?>