<?php

namespace Onfido\Test\Resource;

use Onfido as Onfido;
use Onfido\Model\Passkey;
use Onfido\Model\PasskeyUpdater;
use Onfido\Model\PasskeysList;
use Onfido\Test\OnfidoTestCase as OnfidoTestCase;

class PasskeysTest extends OnfidoTestCase
{
    private const SAMPLE_USERNAME = 'sample-username';
    private const SAMPLE_PASSKEY_ID = '00000000-0000-0000-0000-000000000000';

    public function testListPasskeys(): void
    {
        $passkeysList = self::$onfido->listPasskeys(self::SAMPLE_USERNAME);

        $this->assertInstanceOf(PasskeysList::class, $passkeysList);

        $passkeys = $passkeysList->getPasskeys();
        $this->assertGreaterThan(0, count($passkeys));

        $samplePasskey = $passkeys[0];
        foreach ($passkeys as $passkey) {
            if ($passkey->getId() === self::SAMPLE_PASSKEY_ID) {
                $samplePasskey = $passkey;
                break;
            }
        }

        $this->assertInstanceOf(Passkey::class, $samplePasskey);
        $this->assertNotNull($samplePasskey->getApplicationDomain());
        $this->assertNotNull($samplePasskey->getState());
        $this->assertNotNull($samplePasskey->getCreatedAt());
        $this->assertNotEmpty($samplePasskey->__toString());
    }

    public function testFindPasskey(): void
    {
        $passkey = self::$onfido->findPasskey(self::SAMPLE_USERNAME, self::SAMPLE_PASSKEY_ID);

        $this->assertInstanceOf(Passkey::class, $passkey);
        $this->assertSame(self::SAMPLE_PASSKEY_ID, $passkey->getId());
        $this->assertNotNull($passkey->getApplicationDomain());
        $this->assertNotNull($passkey->getState());
        $this->assertNotNull($passkey->getCreatedAt());
        $this->assertNotEmpty($passkey->__toString());
    }

    public function testUpdatePasskeyState(): void
    {
        $updatedPasskey = self::$onfido->updatePasskey(
            self::SAMPLE_USERNAME,
            self::SAMPLE_PASSKEY_ID,
            new PasskeyUpdater(['state' => Passkey::STATE_INACTIVE])
        );

        $this->assertInstanceOf(Passkey::class, $updatedPasskey);
        $this->assertSame(self::SAMPLE_PASSKEY_ID, $updatedPasskey->getId());
        $this->assertSame(Passkey::STATE_INACTIVE, $updatedPasskey->getState());
    }

    public function testDeletePasskey(): void
    {
        $response = self::$onfido->deletePasskeyWithHttpInfo(
            self::SAMPLE_USERNAME,
            self::SAMPLE_PASSKEY_ID
        );

        $this->assertSame(204, $response[1]);
    }

    public function testDeletePasskeys(): void
    {
        $response = self::$onfido->deletePasskeysWithHttpInfo(self::SAMPLE_USERNAME);

        $this->assertSame(204, $response[1]);
    }
}

?>
