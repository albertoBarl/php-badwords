<?php 
$username = $_POST["username"];
$password = $_POST["password"];

$censoredpassword=str_replace($password, "*****...", $password);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso effettuato</title>
</head>
<body>
    <h1>Benvenuto "<?php echo $username?>"</h1>
    <section>
        <h2>UNCESORED</h2>
        <p>Il tuo username: <?php echo $username?> <br> Lunghezza username: <?php echo strlen($username)?></p>
        <p>La tua password: <?php echo $password?> <br> Lunghezza password: <?php echo strlen($password)?></p>
    </section>
    <section>
        <h2>CENSORED</h2>
        <p>Il tuo username: <?php echo $username?> <br> Lunghezza username: <?php echo strlen($username)?></p>
        <p>La tua password: <?php echo $censoredpassword?> <br> Lunghezza password: <?php echo strlen($password)?></p>
    </section>
</body>
</html>