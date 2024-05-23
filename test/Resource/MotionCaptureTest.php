<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\ApiException as ApiException;


class MotionCaptureTest extends OnfidoTestCase
{
    private $applicantId;
    private $motionCaptureId;

    public function setUp(): void
    {
        $this->applicantId = getenv('ONFIDO_SAMPLE_APPLICANT_ID');
        $this->motionCaptureId = getenv('ONFIDO_SAMPLE_MOTION_ID_1');
    }

    public function testDownloadMotionCapture()
    {
        $file = self::$onfido->downloadMotionCapture($this->motionCaptureId);

        $this->assertGreaterThan(0, $file->getSize());
    }

    public function testDownloadInexistentMotionCapture()
    {
        $inexistentMotionCaptureId = "00000000-0000-0000-0000-000000000000";

        $this->expectException(ApiException::class);
        self::$onfido->downloadMotionCapture($inexistentMotionCaptureId);
    }

    public function testDownloadMotionCaptureFrame()
    {
        $file = self::$onfido->downloadMotionCaptureFrame($this->motionCaptureId);

        $this->assertGreaterThan(0, $file->getSize());
    }

    public function testFindMotionCapture()
    {
        $getMotionCapture = self::$onfido->findMotionCapture($this->motionCaptureId);

        $this->assertSame($this->motionCaptureId, $getMotionCapture->getId());
    }

    public function testListMotionCaptures()
    {
        $listOfMotionCaptures = self::$onfido->listMotionCaptures($this->applicantId)['motion_captures'];

        $this->assertGreaterThan(0, sizeOf($listOfMotionCaptures));
    }
}
