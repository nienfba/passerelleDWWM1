<?php

/**
 *  Classe représentant un joueur humain
 */

class Player
{
    /**
     * @var string type Ange
     */
    const TYPE_ANGEL   = 'ange';

    /**
     * @var string type guerrier
     */
    const TYPE_FIGHTER = 'guerrier';

    /**
     * @var string type magicien
     */
    const TYPE_WIZARD  = 'magicien';

    /**
     * @var string le type de joueur Ange, Guerrier, Magicien
     */
    protected string $type;

     /**
     * @var string le nom du joueur
     */
    protected string $name;

    /**
     * @var int le nombre de point de vie du joueur
     */
    protected int $pv;

    /**
     * @var string le nom de l'image du joueur
     */
    protected string $picture;

    /** Le constructeur
     * @param string $type le type de joueur
     * @param string $name le nom du personnage
     * 
     */
    public function __construct(string $type, string $name) 
    {
        $this->type = $type;
        $this->name = $name;
        $this->pv   = random_int(200,250);
        $this->setPicture();
    }

    /** Setter pour la picture
     * @param void
     * @return void
     */
    public function setPicture() {
        $image = [ 
            self::TYPE_ANGEL    => 'angel.png',
            self::TYPE_FIGHTER  => 'warrior.png',
            self::TYPE_WIZARD   => 'wizard.png'
        ];

        $this->picture = $image[$this->type];
    }

     /** Getter pour la picture
     * @param void
     * @return string le nom de l'image
     */
    public function getPicture() {
        return $this->picture;
    }

    /** Retourne un message
     * @param void
     * @return string le message
     */
    public function getMessage() {
        return 'Le joueur s\'appelle '.$this->name .' est et un '.$this->type.' avec '.$this->pv.' points de vie';
    }

}