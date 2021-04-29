<?php

// Chargement des classes dépendantes
require('classes/Player.php');


// A-t'on reçu un formulaire ?
if(empty($_POST) == true) {
    // Non, affichage du menu du jeu (formulaire start)
    require 'templates/menu.phtml';
}
else {

    $player = new Player($_POST['player-type'], $_POST['player-name']);
    
    var_dump($player);

    echo '<img src="www/images/'.$player->getPicture().'">';
    echo $player->getMessage();
 
    


    // Création du jeu avec les données du formulaire
    $game = new Game($_POST['difficulty'], $_POST['player-name'], $_POST['player-type']);
   
    // Exécution du jeu, récupération de la liste des messages
    // On lance le jeu en appelant la méthode run(). Cette méthode nous renvoie un tableau de messages à afficher
    $messages = $game->run(); 

    // Récupération de l'image du vainqueur
    // ToDO (à faire) !

    require 'templates/game-start.phtml';
}