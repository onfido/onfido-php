<?php

namespace Onfido\Test\Resource;

use Onfido as Onfido;
use Onfido\Model\SigningDocument;
use Onfido\Model\SigningDocumentsList;
use Onfido\Test\OnfidoTestCase as OnfidoTestCase;

class SigningDocumentsTest extends OnfidoTestCase
{
    private $applicantId;
    private $signingDocument;
    private const INEXISTENT_SIGNING_DOCUMENT_ID = '00000000-0000-0000-0000-000000000000';

    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
        $this->signingDocument = $this->uploadSigningDocument($this->applicantId);
    }

    public function testUploadSigningDocument(): void
    {
        $this->assertInstanceOf(SigningDocument::class, $this->signingDocument);
        $this->assertSame('sample_signing_document.pdf', $this->signingDocument->getFileName());
        $this->assertSame('pdf', $this->signingDocument->getFileType());
        $this->assertSame($this->applicantId, $this->signingDocument->getApplicantId());
        $this->assertNotNull($this->signingDocument->getHref());
        $this->assertNotNull($this->signingDocument->getDownloadHref());
        $this->assertNotNull($this->signingDocument->getFileSize());
        $this->assertGreaterThan(0, $this->signingDocument->getFileSize());
        $this->assertNotEmpty($this->signingDocument->__toString());
    }

    public function testDownloadSigningDocument(): void
    {
        $file = self::$onfido->downloadSigningDocument($this->signingDocument->getId());

        $this->assertGreaterThan(0, $file->getSize());
        $file->rewind();
        $this->assertSame('%PDF', $file->fread(4));
    }

    public function testFindSigningDocument(): void
    {
        $found = self::$onfido->findSigningDocument($this->signingDocument->getId());

        $this->assertInstanceOf(SigningDocument::class, $found);
        $this->assertSame($this->signingDocument->getId(), $found->getId());
        $this->assertSame('sample_signing_document.pdf', $found->getFileName());
        $this->assertSame('pdf', $found->getFileType());
        $this->assertSame($this->applicantId, $found->getApplicantId());
        $this->assertNotNull($found->getDownloadHref());
        $this->assertNotEmpty($found->__toString());
    }

    public function testListSigningDocuments(): void
    {
        $documents = self::$onfido->listSigningDocuments($this->applicantId);

        $this->assertInstanceOf(SigningDocumentsList::class, $documents);
        $list = $documents->getSigningDocuments();
        $this->assertGreaterThan(0, sizeOf($list));

        $found = false;
        foreach ($list as $document) {
            if ($document->getId() === $this->signingDocument->getId()) {
                $found = true;
                break;
            }
        }
        $this->assertTrue($found);
    }

    public function testUploadSigningDocumentWithNullParams(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        self::$onfido->uploadSigningDocument(null, null);
    }

    public function testDownloadInexistentSigningDocument(): void
    {
        $this->expectException(Onfido\ApiException::class);
        self::$onfido->downloadSigningDocument(self::INEXISTENT_SIGNING_DOCUMENT_ID);
    }
}
?>
