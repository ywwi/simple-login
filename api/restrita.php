<?php
    session_start();
    if($_SESSION['loggedIn'] != 1)
    {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Success</title>
</head>
<body>
    <?php
        $name = $_SESSION['name'];
        echo "<div class='manke'><p>Bem-vindo $name!</p>";
    ?>
    <img class="picture" src="" alt=""></div>
    <span class="background"><?php echo $name;?></span>
    <a href="./logout.php">Sair</a>
    <script>
        const picture = document.querySelector('.picture')
        const name = '<?php echo $name;?>'
        if(name == 'Gorilla')
        {
            picture.src = './img/gorilla.svg'
            picture.alt = 'Gorilla'
        }
        else if(name == 'Macaco')
        {
            picture.src = './img/monke.svg'
            picture.alt = 'Macaco'
        }
        else
        {
            picture.src = './img/cowboy.svg'
            picture.alt = 'Cowboy'
        }
    </script>
</body>
</html>