<?php

namespace PldPmClientePhp\Client;

use \PldPmClientePhp\Client\Configuration;
use \PldPmClientePhp\Client\ApiException;
use \PldPmClientePhp\Client\ObjectSerializer;
use \PHPUnit\Framework\TestCase;

class PLDPersonasMoralesApiTest extends TestCase
{
    private $signer;
    private $apiInstance;

    public function setUp(): void
    {
        $password = "your_password";

        $this->signer = new \PldPmClientePhp\Client\Interceptor\KeyHandler(null, null, $password);     

        $events = new \PldPmClientePhp\Client\Interceptor\MiddlewareEvents($this->signer);
        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $config = new \PldPmClientePhp\Client\Configuration();
        $config->setHost('https://services.circulodecredito.com.mx/v1/pld-pm');
        
        $this->apiInstance = new \PldPmClientePhp\Client\Api\PLDPersonasMoralesApi($client,$config);
        parent::setUp();
    }
    
    
    public function testGetPLDPm(): void
    {
        $x_api_key = "your_api_key";
        $username = "your_username";
        $password = "your_password";

        $request = new \PldPmClientePhp\Client\Model\Peticion();
        
        $request->setRazonSocial("EMPRESA SA DE CVS.A. DE C.V.");

        try {
            $result = $this->apiInstance->getPLDPm($x_api_key, $username, $password, $request);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->getPLDPm: ', $e->getMessage(), PHP_EOL;
        }
    }
}
