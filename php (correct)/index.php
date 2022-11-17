<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>correct PHP Ramsamy_Ewan</title>
</head>
<body>
    <p>----------étape 0----------</p>
    <p>Hello World</p>

    <p>----------étape 1----------</p>
    <?php for($i = 1; $i <= 10; $i++) : ?>  
        <p> Le nombre vaut <?= $i ?> </p>
    <?php endfor ?>

    <p>----------étape 2----------</p>
    <?php for($i = 1; $i <= 10; $i++) : ?>
    
        <?php if($i !== 3) : ?> 
        
            <p> Le nombre vaut <?= $i ?> </p>

        <?php endif ?>
    <?php endfor ?>

    <p>----------étape 3----------</p>
    <?php for($i = 1; $i <= 10; $i++) : ?>
    
    <?php if($i < 4 || $i > 7) : ?> 
    
            <p> Le nombre vaut <?= $i ?> </p>

        <?php endif ?>
    <?php endfor ?>
    <p>----------étape 4----------</p>
    <?php
    $a = -5;
    $b = 10;
    ?>

    <p>La valeur absolue de <?= $a ?> vaut <?= abs($a) ?></p>
    <p>La valeur absolue de <?= $b ?> vaut <?= abs($b) ?></p>
</body>
</html>