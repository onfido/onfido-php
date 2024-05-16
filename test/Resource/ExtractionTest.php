<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;

use Onfido\Model\DocumentTypes as DocumentTypes;
use Onfido\Model\CountryCodes as CountryCodes;
use Onfido\Model\ExtractRequest as ExtractRequest;


class ExtractionTest extends OnfidoTestCase
{
    private $documentId;
    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $applicantId = $this->createApplicant()->getId();
        $this->documentId = $this->uploadDocument($applicantId)->getId();
    }

    public function testPerformExtraction(): void
    {
      $extraction = self::$onfido->extract(new ExtractRequest(['document_id' => $this->documentId]));
      $this->assertSame($this->documentId, $extraction->getDocumentId());

      $extractedData = $extraction->getExtractedData();
      $documentClassification = $extraction->getDocumentClassification();

      $this->assertSame('SARAH', $extractedData->getFirstName());
      $this->assertSame('MORGAN', $extractedData->getLastName());
      $this->assertSame('Female', $extractedData->getGender());
      $this->assertSame('200407512345', $extractedData->getDocumentNumber(),);
      $this->assertSame('1976-03-11', $extractedData->getDateOfBirth()->format('Y-m-d'));
      $this->assertSame('2031-05-28', $extractedData->getDateOfExpiry()->format('Y-m-d'));

      $this->assertSame(DocumentTypes::DRIVING_LICENCE, $documentClassification->getDocumentType());
      $this->assertSame(CountryCodes::GBR, $documentClassification->getIssuingCountry());
    }
}

?>
