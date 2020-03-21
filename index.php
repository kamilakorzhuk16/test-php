<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
    <p class="hejo">
        <?php
        if($_POST){
            $name = $_POST["imię"];
            if($name != ""){
                echo("Hejo, ".$name);
            }else{
                echo("Hej, Nieznajomy! Chcesz się przedstawić?");
            } 
        }
        ?>
    </p>
    <form action="index.php" method="POST">
        <label><input class="input" type="text" name="imię" placeholder="wpisz swoje imię"></label>
        <label><input class="submit" type="submit" value="przywitać się"></label>
    </form>
</body>
</html>