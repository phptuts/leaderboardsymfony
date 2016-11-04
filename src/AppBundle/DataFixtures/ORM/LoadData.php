<?php
/**
 * Created by PhpStorm.
 * User: glase
 * Date: 11/3/2016
 * Time: 10:23 PM
 */

namespace AppBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        Fixtures::load( __DIR__ .'/fixtures.yml', $manager);
    }

}