<?php
/**
 * Created by PhpStorm.
 * User: glase
 * Date: 11/2/2016
 * Time: 11:25 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Game;
use FOS\RestBundle\Controller\Annotations\View;

class GameController
{

    /**
     * @View()
     * @return array
     */
    public function getGamesAction()
    {
        $game = new Game();
        $game->setName('blue');
        $game->setDescription('description');

        return [$game];
    }
    
    
}