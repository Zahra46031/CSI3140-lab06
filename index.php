
<?php
require_once('_config.php');

use Yatzy\YatzyGame;

$game = new YatzyGame();

echo "Turn: " . $game->getTurn() . "<br>";
$dice = $game->rollDice();
echo "Roll 1: " . implode(", ", $dice) . "<br>";

$game->keepDice(0);
$game->keepDice(3);
$dice = $game->rollDice();
echo "Roll 2: " . implode(", ", $dice) . "<br>";

$dice = $game->rollDice();
echo "Roll 3: " . implode(", ", $dice) . "<br>";

try {
    $dice = $game->rollDice();
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}

$game->resetTurn();
echo "Turn reset. Turn: " . $game->getTurn() . "<br>";
$dice = $game->rollDice();
echo "New Turn Roll 1: " . implode(", ", $dice) . "<br>";
<div id="output"></div>
<button id="version">Version</button>

<script>
const output = document.getElementById("output");
const version = document.getElementById("version");
version.onclick = function(e) {
  output.innerHTML = "Look up version clicked";
}
</script>