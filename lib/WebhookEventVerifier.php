<?php
/**
 * 
 * PHP version 5
 *
 * @category Class
 * @package  Onfido
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

namespace Onfido;

class OnfidoInvalidSignatureError extends \Exception {

};

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   Onfido
 */
class WebhookEventVerifier
{

    /**
     * @var string
     */
    protected $webhookToken;

    public function __construct(
        string $webhookToken
    ) {
        $this->webhookToken = $webhookToken;
    }

    public function readPayload(
        string $rawEvent,
        string $signature
    ) {
        $event_signature = hash_hmac('sha256', $rawEvent, $this->webhookToken);

        if( !hash_equals($signature, $event_signature) ){
            throw new OnfidoInvalidSignatureError("Invalid signature for webhook event");
        }

        return ObjectSerializer::deserialize(json_decode($rawEvent), '\Onfido\Model\WebhookEvent', []);
    }
}
