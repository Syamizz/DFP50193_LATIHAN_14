<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Contoh Cookie</h1>

    <?php
        $masa = time();
        echo $masa . '|';
        echo date('h:i A',$masa);

        $baru = $masa + (60*5);
        echo '<br>5 minit kemudian:' . date('h:i a',$baru);
    ?>
    <br>
    <a href="papar.php">Papar</a>
</body>
</html>