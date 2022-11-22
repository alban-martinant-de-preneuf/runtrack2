<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <?php if (isset($_GET["style"])) : ?>
        <link rel="stylesheet" href="<?php echo $_GET["style"] ?>.css">
    <?php endif ?>


    <title>Document</title>
</head>

<body>

    <form>
        <h2>
            <?php
            if (isset($_GET["style"])) {
                switch ($_GET["style"]) {
                    case "style1":
                        echo "Style 1 :";
                        break;
                    case "style2":
                        echo "Style 2 :";
                        break;
                    case "style3":
                        echo "Style 3 :";
                        break;
                }
            }
            ?>
        </h2>

        <label for="style-select">sélectionner votre style :</label>
        <select name="style" id="style-select">
            <option value="">--</option>
            <option <?php if (isset($_GET["style"])) echo $_GET["style"] == "style1" ? "selected " : NULL ?>value="style1">style 1</option>
            <option <?php if (isset($_GET["style"])) echo $_GET["style"] == "style2" ? "selected " : NULL ?>value="style2">style 2</option>
            <option <?php if (isset($_GET["style"])) echo $_GET["style"] == "style3" ? "selected " : NULL ?>value="style3">style 3</option>
        </select>
        <input type="submit" value="submit">
    </form>

</body>

</html>