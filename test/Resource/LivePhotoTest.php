<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\ApiException as ApiException;

class LivePhotoTest extends OnfidoTestCase
{
    private $applicantId;
    private $livePhoto;

    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
        $this->livePhoto = $this->uploadLivePhoto($this->applicantId);
    }

    public function testUploadLivePhoto(): void
    {
        $this->assertNotNull($this->livePhoto->getId());
        $this->assertSame('sample_photo.png', $this->livePhoto->getFileName());
    }

    public function testListLivePhotos()
    {
        $listOfLivePhotos = self::$onfido->listLivePhotos($this->applicantId)['live_photos'];
        $this->assertGreaterThan(0, sizeOf($listOfLivePhotos));
    }

    public function testFindLivePhoto()
    {
        $getLivePhoto = self::$onfido->findLivePhoto($this->livePhoto->getId());

        $this->assertSame($this->livePhoto->getId(), $getLivePhoto->getId());
    }

    public function testDownloadLivePhoto()
    {
        $file = self::$onfido->downloadLivePhoto($this->livePhoto->getId());
        $this->assertGreaterThan(0, $file->getSize());
    }

    public function testDownloadInexistentLivePhoto()
    {
        $inexistentLivePhotoId = '00000000-0000-0000-0000-000000000000';

        $this->expectException(ApiException::class);
        self::$onfido->downloadLivePhoto($inexistentLivePhotoId);
    }
}

?>
