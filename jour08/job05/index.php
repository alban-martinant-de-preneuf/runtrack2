<?php

session_start();

function checkWinner(string $playerSymbole): string {
    // vérifier lignes
    for ($i=0; $i<3; $i++) {
        if ($_SESSION['gameBoard'][$i][0] == $playerSymbole && $_SESSION['gameBoard'][$i][1] == $playerSymbole && $_SESSION['gameBoard'][$i][2] == $playerSymbole) {
            return $playerSymbole;
        }
    }
    // vérifier colonnes
    for ($i=0; $i<3; $i++) {
        if ($_SESSION['gameBoard'][0][$i] == $playerSymbole && $_SESSION['gameBoard'][1][$i] == $playerSymbole && $_SESSION['gameBoard'][2][$i] == $playerSymbole) {
            return $playerSymbole;
        }
    }
    // vérifier diagonales
    $diag1 = $_SESSION['gameBoard'][0][0] == $playerSymbole && $_SESSION['gameBoard'][1][1] == $playerSymbole && $_SESSION['gameBoard'][2][2] == $playerSymbole;
    $diag2 = $_SESSION['gameBoard'][0][2] == $playerSymbole && $_SESSION['gameBoard'][1][1] == $playerSymbole && $_SESSION['gameBoard'][2][0] == $playerSymbole;
    if ($diag1 || $diag2) {
        return $playerSymbole;
    }
    // match nul 
    $nul = true;
    for ($i=0; $i < 3; $i++) { 
        for ($j=0; $j < 3; $j++) { 
            if ($_SESSION['gameBoard'][$i][$j] === '-') {
                $nul = false;
                break;
            }              
        }
    }
    if ($nul) return 'n';
    return "-";
}

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
    $winner = checkWinner($playerSymbole);

    if ($winner === "X" || $winner === "O") {
        echo 'bravo ' . $winner;
    } elseif ($winner === 'n') {
        echo 'Match nul ';
    } 
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
        <?php 
        for ($i=0; $i<3; $i++) {
            echo '<tr>';
            for ($j=0; $j<3; $j++) {
                echo '<td><button type="submit" name="case" value="' . $i . '_' . $j . '">' . $_SESSION["gameBoard"][$i][$j] . '</button></td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    <button type="submit" name="reset" class="reset" value="true">reset</button>

</form>