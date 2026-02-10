<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Str;

class TiloPayService
{
    protected $client;
    protected $config;

    public function __construct()
    {
        $this->config = config('tilopay');
        $this->client = new Client([
            'base_uri' => $this->config['base_url'],
            'headers' => [
                'Content-Type' => 'application/xml',
            ]
        ]);
    }

protected function buildSignature(string $payload): string
{
    return base64_encode(
        hash_hmac(
            'sha512',
            $payload,
            $this->config['shared_secret'],
            true
        )
    );
}


    public function createTransaction($orderId, $amount, $currency = 'JMD', $customer = [])
    {
        $xml = $this->toXml([
            'transaction' => [
                '@xmlns' => 'https://sandbox.gateway.tillpayments.com',
                // 'username' => $this->config['api_user'],
                // 'password' => sha1($this->config['api_password']),
                // 'password' => $this->config['api_password'],
                'debit' => [
                    'transactionId' => $orderId,
                    'amount' => $amount,
                    'currency' => $currency,
                    'successUrl' => $this->config['success_url'],
                    'cancelUrl' => $this->config['cancel_url'],
                    'callbackUrl' => $this->config['callback_url'],
                    'customer' => $customer,
                ],
            ],
        ]);

        $response = $this->client->post('/transaction', [
            'body' => $xml,
            'headers' => [
                'Authorization' => 'Gateway ' . $this->config['api_key'],
                'Signature' => $this->buildSignature($xml),
                'Content-Type' => 'application/xml',
            ],
        ]);


        return simplexml_load_string($response->getBody()->getContents());
    }

    protected function toXml(array $data)
    {
        $xml = new \SimpleXMLElement('<root/>');

        $this->convert($data, $xml);

        return $xml->asXML();
    }

    protected function convert(array $data, \SimpleXMLElement &$xml)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $child = isset($value['@']) ? $xml->addChild($key, $value['@']) : $xml->addChild($key);
                unset($value['@']);
                $this->convert($value, $child);
            } else {
                $xml->addChild($key, htmlspecialchars($value));
            }
        }
    }
}
