<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\ReportName as ReportName;
use Onfido\Model\Check as Check;
use Onfido\Model\CheckBuilder as CheckBuilder;
use Onfido\Model\UsDrivingLicenceBuilder as UsDrivingLicenceBuilder;

class ChecksTest extends OnfidoTestCase
{
    private $applicantId;
    private $documentId;
    private $check;
    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
        $this->documentId = $this->uploadDocument($this->applicantId)->getId();
        $this->check = $this->createCheck(
          null,
          $this->applicantId,
          $this->documentId,
          [ReportName::DOCUMENT, ReportName::IDENTITY_ENHANCED]
        );
    }

    public function testCreateCheck(): void
    {
        $this->assertSame($this->applicantId, $this->check->getApplicantId());
        $this->assertSame(Check::STATUS_IN_PROGRESS, $this->check->getStatus());
        $this->assertSame(2, sizeOf($this->check->getReportIds()));
    }

    public function testCreateConsiderCheck(): void
    {
        $checkBuilder = new CheckBuilder([
          'applicant_id' => $this->applicantId,
          'document_ids' => [$this->documentId],
          'report_names' => [ReportName::DOCUMENT],
          'consider' => [ReportName::DOCUMENT]
        ]);

        $check = $this->createCheck($checkBuilder);
        $this->assertSame($this->applicantId, $check->getApplicantId());
    }

    public function testCreateDrivingLicenceCheck(): void
    {
        $usDrivingLicenceBuilder = new UsDrivingLicenceBuilder([
          'id_number' => '12345',
          'issue_state' => 'GA'
        ]);

        $checkBuilder = new CheckBuilder([
          'applicant_id' => $this->applicantId,
          'document_ids' => [$this->documentId],
          'report_names' => [ReportName::DOCUMENT],
          'us_driving_licence' => $usDrivingLicenceBuilder
        ]);

        $check = $this->createCheck($checkBuilder);

        $this->assertSame($this->applicantId, $check->getApplicantId());
    }

    public function testListChecks(): void
    {
        $listOfChecks = self::$onfido->listChecks($this->applicantId)["checks"];

        $this->assertGreaterThan(0, sizeOf($listOfChecks));
    }

    public function testFindCheck(): void
    {
        $getCheck = self::$onfido->findCheck($this->check->getId());

        $this->assertSame($this->check->getId(), $getCheck->getId());
        $this->assertSame($this->applicantId, $getCheck->getApplicantId());
    }

    public function testRestartCheck(): void
    {
        self::$onfido->resumeCheck($this->check->getId());
        $this->assertTrue(true);
    }

    public function testDownloadCheck(): void
    {
        $file = self::$onfido->downloadCheck($this->check->getId());

        $this->assertGreaterThan(0, $file->getSize());
    }
}