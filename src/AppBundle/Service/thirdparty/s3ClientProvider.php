<?php
/**
 * Created by PhpStorm.
 * User: glase
 * Date: 11/7/2016
 * Time: 10:55 PM
 */

namespace AppBundle\Service\ThirdParty;

use Aws\S3\S3Client; 

/**
 * Class s3Client
 * @package AppBundle\Service\thirdparty
 */
class S3ClientProvider
{
    const VERSION = '2006-03-01';

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $key;
    
    public function __construct($region, $secret, $key)
    {
        $this->region = $region;
        $this->key = $key;
        $this->secret = $secret;
    }
    
    public function getClient() 
    {
        return new s3Client([
            'region' => $this->region,
            'version' => self::VERSION,
            'credentials' => [
                'secret' => $this->secret,
                'key' => $this->key,
            ]
        ]);
    }
}