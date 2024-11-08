<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\DocumentReport as DocumentReport;
use Onfido\Model\FacialSimilarityPhotoReport as FacialSimilarityPhotoReport;
use Onfido\Model\DocumentWithAddressInformationReport as DocumentWithAddressInformationReport;
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

        $documentReport = $this->repeatRequestUntilStatusChanges(
            $this->findReportFn,
            [$documentReportId],
            ReportStatus::COMPLETE
        );

        $this->assertInstanceOf(DocumentReport::class, $documentReport);

        $this->assertSame($documentReport->getName(), "document");
        $this->assertSame($documentReport->getBreakdown()->getDataComparison()
                            ->getBreakdown()->getIssuingCountry()->getResult(), "clear");
        $this->assertSame($documentReport->getProperties()
                            ->getDateOfBirth()->format('Y-m-d'), "1990-01-01");
        $this->assertNull($documentReport->getProperties()->getDocumentSubtype());
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

        $facialSimilarityReport = $this->repeatRequestUntilStatusChanges(
            $this->findReportFn,
            [$facialSimilarityReportId],
            ReportStatus::COMPLETE
        );

        $this->assertInstanceOf(
            FacialSimilarityPhotoReport::class,
            $facialSimilarityReport
        );

        $this->assertSame($facialSimilarityReport->getName(), "facial_similarity_photo");
        $this->assertSame($facialSimilarityReport->getBreakdown()->getFaceComparison()
                            ->getBreakdown()->getFaceMatch()->getResult(), "clear");
        $this->assertSame($facialSimilarityReport->getBreakdown()->getVisualAuthenticity()
                            ->getBreakdown()->getSpoofingDetection()->getProperties()->getScore(), 0.9512);
    }

    public function testSchemaOfDocumentWithAddressInformationReportIsValid(): void
    {
        $reportId = $this->createCheck(
            null,
            $this->applicantId,
            $this->documentId,
            [ReportName::DOCUMENT_WITH_ADDRESS_INFORMATION]
        )->getReportIds()[0];

        $report = $this->repeatRequestUntilStatusChanges(
            $this->findReportFn,
            [$reportId],
            ReportStatus::COMPLETE
        );

        $this->assertInstanceOf(
            DocumentWithAddressInformationReport::class,
            $report
        );

        $this->assertSame($report->getName(), "document_with_address_information");
        $this->assertSame($report->getProperties()->getBarcode()->getDocumentType(), "driving_licence");
    }
}

?>