<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\ReportName as ReportName;
use Onfido\Model\ReportStatus as ReportStatus;

class ReportsTest extends OnfidoTestCase
{
    private $sortedReports;
    private $documentReportId;
    private $identityReportId;
    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $applicantId = $this->createApplicant()->getId();
        $documentId = $this->uploadDocument($applicantId)->getId();
        $check = $this->createCheck(
          null,
          $applicantId,
          $documentId,
          [ReportName::DOCUMENT, ReportName::IDENTITY_ENHANCED]
        );
        $this->sortedReports = $this->sortReports(self::$onfido->listReports($check->getId())['reports']);
        $this->documentReportId = $this->sortedReports[0]->getId();
        $this->identityReportId = $this->sortedReports[1]->getId();
    }

    public function sortReports($reportList): array
    {
        usort($reportList, function($a, $b) {
          return strcmp($a->getName(), $b->getName());
        });

        return $reportList;
    }

    public function testListReports(): void
    {
        $this->assertSame(ReportName::DOCUMENT, $this->sortedReports[0]->getName());
        $this->assertSame(ReportName::IDENTITY_ENHANCED, $this->sortedReports[1]->getName());
    }

    public function testFindReport(): void
    {
        $getDocumentReport = self::$onfido->findReport($this->documentReportId);
        $getIdentityReport = self::$onfido->findReport($this->identityReportId);

        $this->assertSame($this->documentReportId, $getDocumentReport->getId());
        $this->assertSame(ReportName::DOCUMENT, $getDocumentReport->getName());
        $this->assertSame(ReportStatus::AWAITING_DATA, $getDocumentReport->getStatus());

        $this->assertSame($this->identityReportId, $getIdentityReport->getId());
        $this->assertSame(ReportName::IDENTITY_ENHANCED, $getIdentityReport->getName());
        $this->assertSame(ReportStatus::COMPLETE, $getIdentityReport->getStatus());
    }

    public function testResumeReport(): void
    {
        self::$onfido->resumeReport($this->documentReportId);
        $this->assertTrue(true);
    }

    public function testCancelReport(): void
    {
        self::$onfido->cancelReport($this->documentReportId);
        $this->assertTrue(true);
    }
  }

?>
