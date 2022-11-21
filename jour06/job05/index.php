<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if (isset($_GET["style"])) : ?>
        <link rel="stylesheet" href="<?php echo $_GET["style"] ?>.css">
    <?php endif ?>


    <title>Document</title>
</head>
<body>
   
    <form>
        <select name="style" id="style-select">
            <option value="style1">style 1</option>
            <option value="style2">style 2</option>
            <option value="style3">style 3</option>
        </select>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>
