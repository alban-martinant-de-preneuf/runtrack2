<?php

session_start();

if (!isset($_SESSION['gameBoard'])) {
    $_SESSION['gameBoard'] = [
        ["-","-","-"],
        ["-","-","-"],
        ["-","-","-"]
    ];
    $_SESSION['turn'] = 0;
} 

$playerSymbole = $_SESSION['turn'] % 2 === 0 ? "X" : "O";

if (isset($_GET['case'])) {
    switch ($_GET['case']) {
        case "0_0":
            $_SESSION['gameBoard'][0][0] = $playerSymbole;
            break;
        case "0_1":
            $_SESSION['gameBoard'][0][1] = $playerSymbole;
            break;
        case "0_2":
            $_SESSION['gameBoard'][0][2] = $playerSymbole;
            break;
        case "1_0":
            $_SESSION['gameBoard'][1][0] = $playerSymbole;
            break;
        case "1_1":
            $_SESSION['gameBoard'][1][1] = $playerSymbole;
            break;
        case "1_2":
            $_SESSION['gameBoard'][1][2] = $playerSymbole;
            break;
        case "2_0":
            $_SESSION['gameBoard'][2][0] = $playerSymbole;
            break;
        case "2_1":
            $_SESSION['gameBoard'][2][1] = $playerSymbole;
            break;
        case "2_2":
            $_SESSION['gameBoard'][2][2] = $playerSymbole;
            break;
    }
    $_SESSION['turn'] += 1;
}

if (isset($_GET['reset'])) {
    session_destroy();
    header('Location: .');
    exit();
}

?>

<style>
    button {
        width: 50px;
        height: 50px;
    }

    .reset {
        width: 150px;
    }
</style>

<form>
    <table>
        <tr>
            <td><button type="submit" name="case" value="0_0"><?php echo $_SESSION['gameBoard'][0][0] ?></button></td>
            <td><button type="submit" name="case" value="0_1"><?php echo $_SESSION['gameBoard'][0][1] ?></button></td>
            <td><button type="submit" name="case" value="0_2"><?php echo $_SESSION['gameBoard'][0][2] ?></button></td>
        </tr>
        <tr>
            <td><button type="submit" name="case" value="1_0"><?php echo $_SESSION['gameBoard'][1][0] ?></button></td>
            <td><button type="submit" name="case" value="1_1"><?php echo $_SESSION['gameBoard'][1][1] ?></button></td>
            <td><button type="submit" name="case" value="1_2"><?php echo $_SESSION['gameBoard'][1][2] ?></button></td>
        </tr>
        <tr>
            <td><button type="submit" name="case" value="2_0"><?php echo $_SESSION['gameBoard'][2][0] ?></button></td>
            <td><button type="submit" name="case" value="2_1"><?php echo $_SESSION['gameBoard'][2][1] ?></button></td>
            <td><button type="submit" name="case" value="2_2"><?php echo $_SESSION['gameBoard'][2][2] ?></button></td>
        </tr>
    </table>
    <button type="submit" name="reset" class="reset" value="true">reset</button>

</form>