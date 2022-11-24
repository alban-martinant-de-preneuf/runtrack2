<?php

session_start();

function checkWinner(array $playerSymbols): string {
    foreach ($playerSymbols as $playerSymbol) {
        // vérifier lignes
        for ($i = 0; $i < 3; $i++) {
            if ($_SESSION['gameBoard'][$i][0] == $playerSymbol && $_SESSION['gameBoard'][$i][1] == $playerSymbol && $_SESSION['gameBoard'][$i][2] == $playerSymbol) {
                return $playerSymbol;
            }
        }
        // vérifier colonnes
        for ($i = 0; $i < 3; $i++) {
            if ($_SESSION['gameBoard'][0][$i] == $playerSymbol && $_SESSION['gameBoard'][1][$i] == $playerSymbol && $_SESSION['gameBoard'][2][$i] == $playerSymbol) {
                return $playerSymbol;
            }
        }
        // vérifier diagonales
        $diag1 = $_SESSION['gameBoard'][0][0] == $playerSymbol && $_SESSION['gameBoard'][1][1] == $playerSymbol && $_SESSION['gameBoard'][2][2] == $playerSymbol;
        $diag2 = $_SESSION['gameBoard'][0][2] == $playerSymbol && $_SESSION['gameBoard'][1][1] == $playerSymbol && $_SESSION['gameBoard'][2][0] == $playerSymbol;
        if ($diag1 || $diag2) {
            return $playerSymbol;
        }
    }
    // match nul 
    $nul = true;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
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
        ["-", "-", "-"],
        ["-", "-", "-"],
        ["-", "-", "-"]
    ];
    $_SESSION['turn'] = 0;
}

$playerSymbols = ['X', 'O'];
$currentPlayer = $_SESSION['turn'] % 2 === 0 ? $playerSymbols[0] : $playerSymbols[1];

if (isset($_GET['case'])) {
    if (checkWinner($playerSymbols)) {
        if ($_SESSION['gameBoard'][$_GET['case'][0]][$_GET['case'][-1]] === '-') {
            $_SESSION['gameBoard'][$_GET['case'][0]][$_GET['case'][-1]] = $currentPlayer;
            $_SESSION['turn'] += 1;
        }
    }
    $winner = checkWinner($playerSymbols);
}

if (isset($_GET['reset'])) {
    session_destroy();
    header('Location: .');
    exit();
}

?>

<style>
    * {
        background-color: black;
        color: white;
    }

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
        for ($i = 0; $i < 3; $i++) {
            echo '<tr>';
            for ($j = 0; $j < 3; $j++) {
                echo '<td><button type="submit" name="case" value="' . $i . '_' . $j . '">' . $_SESSION["gameBoard"][$i][$j] . '</button></td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    <button type="submit" name="reset" class="reset" value="true">reset</button>
</form>

<?php 
if (isset($winner)) {
    if ($winner === "X" || $winner === "O") {
        echo '<h1>bravo ' . $winner . ' !</h1>';
    } elseif ($winner === 'n') {
        echo '<h1>Match nul</h1>';
    }
}