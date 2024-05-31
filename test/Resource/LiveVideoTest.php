<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\ApiException as ApiException;

class LiveVideoTest extends OnfidoTestCase
{
    private $applicantId;
    private $liveVideoId;

    public function setUp(): void
    {
        $this->applicantId = getenv('ONFIDO_SAMPLE_APPLICANT_ID');
        $this->liveVideoId = getenv('ONFIDO_SAMPLE_VIDEO_ID_1');
    }

    public function testDownloadLiveVideo()
    {
        $file = self::$onfido->downloadLiveVideo($this->liveVideoId);

        $this->assertGreaterThan(0, $file->getSize());
    }

    public function testDownloadInexistentLiveVideo()
    {
        $inexistentLiveVideoId = '00000000-0000-0000-0000-000000000000';

        $this->expectException(ApiException::class);
        self::$onfido->downloadLiveVideo($inexistentLiveVideoId);
    }

    public function testDownloadLiveVideoFrame()
    {
        $file = self::$onfido->downloadLiveVideoFrame($this->liveVideoId);

        $this->assertGreaterThan(0, $file->getSize());
    }

    public function testFindLiveVideo()
    {
        $getLiveVideo = self::$onfido->findLiveVideo($this->liveVideoId);

        $this->assertSame($this->liveVideoId, $getLiveVideo->getId());
    }

    public function testListLiveVideos()
    {
        $listOfLiveVideos = self::$onfido->listLiveVideos($this->applicantId)['live_videos'];

        $this->assertGreaterThan(0, sizeOf($listOfLiveVideos));
    }
}
