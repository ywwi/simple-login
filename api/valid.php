<?php
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $user_check = ['Yuri', 'Macaco', 'Gorilla'];
    $pass_check = '1234';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Validação</title>
</head>
<body>
    
<?php
    if((in_array("$user", $user_check)) && $pass == $pass_check)
    {
        $_SESSION['name'] = $user;
        $_SESSION['loggedIn'] = 1;

        header('Location: restrita.php');
    }
    else
    {
        echo '<p style="margin-bottom: 1rem;">Tá errado homi</p>';
    }
?>
<a href="./index.php">Voltar</a>

</body>
</html>