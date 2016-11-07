<?php
/**
 * Created by PhpStorm.
 * User: glase
 * Date: 11/6/2016
 * Time: 9:33 PM
 */

namespace AppBundle\Service\thirdparty;


use Aws\S3\S3Client;

class s3Manager
{
    protected $client;

    public function __construct(S3Client $client)
    {
        $this->client = $client;
    }


}