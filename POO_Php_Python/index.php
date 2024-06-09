<?php
include "jdr/jeuCarte.php";
include "jdr/piece.php";
include "jdr/de.php";
include "jdr/randomResult.php";
include "jdr/gameMaster.php";

$de_6 = new de(1,6);
$de_8 = new de(1,8);
$de_10 = new de(1,10);
$de_12 = new de(1,12);
$de_20 = new de(1,20);
$pieceflip_3 = new piece(3,"face");
$pieceflip_5 = new piece(5,"pile");
$pickCarte_4_13 = new CardDeck(4,13);
$pickCarte_3_18 = new CardDeck(3,18);

$accessory = array ($de_6, $de_8, $de_10, $de_12, $de_20, $pieceflip_3, $pieceflip_5, $pickCarte_4_13, $pickCarte_3_18);

for ($i = 0; $i < 40; $i++) {
    $game_master = new GameMaster(0,8);
    echo $accessory[$game_master->getResult()];
}
