<?php
/**
 * Created by PhpStorm.
 * User: glase
 * Date: 11/1/2016
 * Time: 10:11 PM
 */

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

class TestRestController extends FOSRestController
{
    /**
     * @Rest\Route(name="test_action", methods={"GET"}, path="/test")
     * @return array
     */
    public function testAction() {
        return ['user' => 1];
    }
}