<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intro PHP Ramsamy_Ewan</title>
</head>
<body>
    <?php 
        echo "<p>----------étape 0----------</p>";
        echo "<p>Hello World</p>";

        echo "<p>----------étape 1----------</p>";
        for($i = 1; $i <= 10; $i++)
        {
            echo "<p> Le nombre vaut $i";
        }

        echo "<p>----------étape 2----------</p>";
        for($i = 1; $i <= 10; $i++)
        {
            if($i !== 3) 
            {
                echo "<p> Le nombre vaut $i";
            }
        }

        echo "<p>----------étape 3----------</p>";
        for($i = 1; $i <= 10; $i++)
        {
            if($i < 4 || $i > 7) 
            {
                echo "<p> Le nombre vaut $i";
            }
        }
        echo "<p>----------étape 4----------</p>";
        $a = -5;
        $b = 10;

        echo "<p>La valeur absolue de $a vaut " . abs($a) . "</p>";
        echo "<p>La valeur absolue de $b vaut " . abs($b) . "</p>";
    ?>
</body>
</html>