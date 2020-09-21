<?php
declare(strict_types=1);

require 'Suit.php';
require 'Card.php';
require 'Deck.php';


class Player {

    // properties
    private array $cards;
    private bool $lost = "FALSE";

    // methods
    public function Hit(){
}

    public function Surrender(){
}

    public function getScore() {
}

    public function hasLost() {
}

    public function __construct(){

    }


}


