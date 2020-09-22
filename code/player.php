<?php
declare(strict_types=1);

require 'Suit.php';
require 'card.php';
require 'Deck.php';

class Player {

    // properties
    private array $cards;
    private bool $lost;

    // methods
    public function Hit(){

}

    public function Surrender(){

}

    public function getScore() {

}

    public function hasLost() {

}
    public function __construct(){ // i still have to draw 2 cards for the player in here and then find a way to have these assigned to that player.

        $card = new Card;
    }
}






