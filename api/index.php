<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <span class="background">Sign In</span>
    <form action="./valid.php" method="POST">
        <h1>Sign In</h1>
        <label>
            <span>Username</span>
            <input class="input" type="text" name="user">
        </label>
        <label>
            <span>Password</span>
            <input class="input" type="password" name="pass">
        </label>
        <input type="submit" value="Login">
    </form>
    <script src="./script.js"></script>
</body>
</html>