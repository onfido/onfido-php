<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\DocumentReport as DocumentReport;
use Onfido\Model\FacialSimilarityPhotoReport as FacialSimilarityPhotoReport;
use Onfido\Model\ReportName as ReportName;
use Onfido\Model\ReportStatus as ReportStatus;

class ReportSchemasTest extends OnfidoTestCase
{
    private $applicantId;
    private $documentId;
    private $findReportFn;

    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
        $this->documentId = $this->uploadDocument($this->applicantId);
        $this->findReportFn = function($reportId) {
            return self::$onfido->findReport($reportId);
        };
    }

    public function testSchemaOfDocumentReportIsValid(): void
    {
        $documentReportId = $this->createCheck(
            null,
            $this->applicantId,
            $this->documentId,
            [ReportName::DOCUMENT]
        )->getReportIds()[0];

        $documentReport = $this->waitUntilStatus(
            $this->findReportFn,
            $documentReportId,
            ReportStatus::COMPLETE
        )->getActualInstance();

        $this->assertInstanceOf(DocumentReport::class, $documentReport);
    }

    public function testSchemaOfFacialSimilarityReportIsValid(): void
    {
        $this->uploadLivePhoto($this->applicantId);
        $facialSimilarityReportId = $this->createCheck(
            null,
            $this->applicantId,
            $this->documentId,
            [ReportName::FACIAL_SIMILARITY_PHOTO]
        )->getReportIds()[0];

        $facialSimilarityReport = $this->waitUntilStatus(
            $this->findReportFn,
            $facialSimilarityReportId,
            ReportStatus::COMPLETE
        )->getActualInstance();

        $this->assertInstanceOf(
            FacialSimilarityPhotoReport::class,
            $facialSimilarityReport
        );
    }
}

?>