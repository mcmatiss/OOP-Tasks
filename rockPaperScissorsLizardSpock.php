<?php
require_once "Competitor.php";

$competitors = [
    new Competitor("rock", ["lizard", "spock"]),
    new Competitor("paper", ["rock", "scissors"]),
    new Competitor("scissors", ["paper", "lizard"]),
    new Competitor("lizard", ["spock", "paper"]),
    new Competitor("spock", ["scissors", "rock"]),
];

$competitorExists = false;
$player = readline("Rock, Paper, Scissors, Lizard or Spock? ");
$player = strtolower($player);
foreach ($competitors as $competitor) {
    if ($player === $competitor->getName()) {
        $competitorExists = true;
    }
}
if (!$competitorExists) {
    exit("\nInvalid input!\n");
}
$computerIndex = array_rand($competitors);
$computer = $competitors[$computerIndex]->getName();
if ($player === $computer) {
    echo "Computer choice: $computer\nIt is a tie!\n";
    exit();
}
foreach ($competitors[$computerIndex]->getWinsVs() as $winsVs) {
    if ($player === $winsVs) {
        echo "Computer choice: $computer\nComputer wins!\n";
        exit();
    }
}
echo "Computer choice: $computer\nCongratulations you win!\n";
