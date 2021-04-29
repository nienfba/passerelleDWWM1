<?php

const DIFFICULTY_EASY   = 'facile';
const DIFFICULTY_HARD   = 'difficile';
const DIFFICULTY_NORMAL = 'normal';


// Classe représentant le jeu en lui-même

/*
 * Cette classe est l'élément central du programme : elle manipule notamment le joueur
 * et le monstre pour qu'ils se battent jusqu'à la mort. Elle doit les instancier,
 * les initialiser, les "faire jouer" et obtenir des résultats : une liste de messages
 * générés pendant le jeu et l'image du vainqueur final.
 */

class Game
{

    protected string $difficulty;

    protected Player $player;


    public function __construct(string $difficulty, string $playerName, string $playerType)
    {
        $this->difficulty = $difficulty;
        $this->player = new Player($playerType, $playerName);
    }

    public function run()
    {
        echo 'Le jeu démarre !';
    }
    
}