<?php
/**
 * Created by PhpStorm.
 * User: glase
 * Date: 11/6/2016
 * Time: 9:33 PM
 */

namespace AppBundle\Service\ThirdParty;


use Aws\S3\S3Client;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class S3Manager
{
    /**
     * 
     */
    const BUCKET = 'bigfootlocator.com';

    /**
     * @var S3Client
     */
    protected $client;

    protected $env;

    public function __construct(S3ClientProvider $provider, $env)
    {
        $this->client = $provider->getClient();
    }
    
    public function upload(UploadedFile $file, $key) {
        $this->client->putObject([
            'Bucket' => self::BUCKET,
            'SourceFile' => $file->getRealPath(),
            'Key' => $this->env . '/' .$key
        ]);
    }


}