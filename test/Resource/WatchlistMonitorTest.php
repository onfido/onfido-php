<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\WatchlistMonitorBuilder as WatchlistMonitorBuilder;

class WatchlistMonitorTest extends OnfidoTestCase
{
    private $applicantId;
    private $watchlistMonitor;

    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
        $this->watchlistMonitor = self::$onfido->createWatchlistMonitor(
            new WatchlistMonitorBuilder([
                'applicant_id' => $this->applicantId,
                'report_name' => WatchlistMonitorBuilder::REPORT_NAME_STANDARD
            ])
        );
    }

    public function testCreateWatchlistStandardMonitor(): void
    {
        $this->assertSame($this->applicantId, $this->watchlistMonitor->getApplicantId());
        $this->assertSame(
            WatchlistMonitorBuilder::REPORT_NAME_STANDARD,
            $this->watchlistMonitor->getReportName()
        );
    }

    public function testCreateWatchlistAmlMonitor(): void
    {
        $applicantId = $this->createApplicant()->getId();
        $watchlistAmlMonitor = self::$onfido->createWatchlistMonitor(
            new WatchlistMonitorBuilder([
                'applicant_id' => $applicantId,
                'report_name' => WatchlistMonitorBuilder::REPORT_NAME_AML
            ])
        );

        $this->assertSame($applicantId, $watchlistAmlMonitor->getApplicantId());
        $this->assertSame(
            WatchlistMonitorBuilder::REPORT_NAME_AML,
            $watchlistAmlMonitor->getReportName()
        );
    }

    public function testListWatchlistMonitors(): void
    {
        $listOfWatchlistMonitors = self::$onfido->listWatchlistMonitors(
            $this->applicantId
        )->getMonitors();

        $this->assertGreaterThan(0, sizeOf($listOfWatchlistMonitors));
    }

    public function testFindWatchlistMonitor(): void
    {
        $getWatchlistMonitor = self::$onfido->findWatchlistMonitor(
            $this->watchlistMonitor->getId()
        );

        $this->assertSame($this->watchlistMonitor->getId(), $getWatchlistMonitor->getId());
    }

    public function testDeleteWatchlistMonitor(): void
    {
        self::$onfido->deleteWatchlistMonitor(
            $this->watchlistMonitor->getId()
        );

        $this->assertTrue(true);
    }

    public function testListWatchlistMonitorMatches(): void
    {
        $listOfWatchlistMonitorMatches = self::$onfido->listWatchlistMonitorMatches(
            $this->watchlistMonitor->getId()
        )->getMatches();

        $this->assertEquals(0, sizeOf($listOfWatchlistMonitorMatches));
    }

    public function testForceReportCreation(): void
    {
        self::$onfido->forceReportCreationFromWatchlistMonitor(
            $this->watchlistMonitor->getId()
        );

        $checks = self::$onfido->listChecks($this->applicantId)->getChecks();
        $this->assertEquals(2, sizeOf($checks));
    }
}

?>