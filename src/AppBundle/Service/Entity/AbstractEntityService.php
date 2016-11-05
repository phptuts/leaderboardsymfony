<?php

namespace AppBundle\Service\Entity;

use Doctrine\ORM\EntityManager;

abstract class AbstractEntityService
{
    /**
     * @var EntityManager
     */
    protected $em;
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
}