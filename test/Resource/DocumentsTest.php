<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\DocumentTypes as DocumentTypes;

use Onfido as Onfido;


class DocumentsTest extends OnfidoTestCase
{
    private $applicantId;
    private $document;
    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
        $this->document = $this->uploadDocument($this->applicantId);
    }

    public function testUploadDocument(): void
    {
        $this->assertSame($this->applicantId, $this->document->getApplicantId());
        $this->assertSame(DocumentTypes::PASSPORT, $this->document->getType());
    }

    public function testListDocuments(): void
    {
        $listOfDocuments = self::$onfido->listDocuments($this->applicantId)->getDocuments();
        $this->assertGreaterThan(0, sizeOf($listOfDocuments));
    }

    public function testFindDocument(): void
    {
        $getDocument = self::$onfido->findDocument($this->document->getId());
        $this->assertSame($this->document->getId(), $getDocument->getId());
    }

    public function testDownloadDocument(): void
    {
        $file = self::$onfido->downloadDocument($this->document->getId());

        $this->assertGreaterThan(0, $file->getSize());
    }

    public function testDownloadInexistentDocument(): void
    {
        $inexistentDocumentId = '00000000-0000-0000-0000-000000000000';

        $this->expectException(Onfido\ApiException::class);
        self::$onfido->downloadDocument($inexistentDocumentId);
    }

    public function testDownloadNfcFace(): void
    {
        $nfcFace = $this->uploadDocument($this->applicantId, 'test/media/nfc_data.json');
        $file = self::$onfido->downloadDocument($nfcFace->getId());

        $this->assertGreaterThan(0, $file->getSize());
    }

    public function testDownloadNfcFaceNotFound(): void
    {
        $inexistentDocumentId = '00000000-0000-0000-0000-000000000000';

        $this->expectException(Onfido\ApiException::class);
        self::$onfido->downloadNfcFace($inexistentDocumentId);
    }
}
?>