<?php
/**
 * Created by PhpStorm.
 * User: glase
 * Date: 11/6/2016
 * Time: 9:33 PM
 */

namespace AppBundle\Service\thirdparty;


use Aws\S3\S3Client;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class s3Manager
{
    /**
     * @var S3Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $bucket;

    public function __construct(S3clientProvider $provider, $bucket)
    {
        $this->client = $provider->getClient();
        $this->bucket = $bucket;
    }
    
    public function upload(UploadedFile $file, $key) {
        $this->client->putObject([
            'Bucket' => $this->bucket,
            'SourceFile' => $file->getRealPath(),
            'Key' => $key
        ]);
    }


}