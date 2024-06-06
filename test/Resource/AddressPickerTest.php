<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;

class AddressPickerTest extends OnfidoTestCase
{

  public function testFindAddress()
  {

    $postCode = 'S2 2DF';
    
    $addressesWithPostCode = self::$onfido->findAddresses($postCode)->getAddresses();
    $this->assertSame($postCode, $addressesWithPostCode[0]->getPostcode());
  }
}
