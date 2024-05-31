<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\ApiException as ApiException;

class IdPhotoTest extends OnfidoTestCase
{
    private $applicantId;
    private $idPhoto;

    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
        $this->idPhoto = self::$onfido->uploadIdPhoto(
          $this->applicantId,
          new \SplFileObject('test/media/sample_photo.png')
      );
    }

    public function testUploadIdPhoto(): void
    {
        $this->assertNotNull($this->idPhoto->getId());
        $this->assertSame("{$this->idPhoto->getId()}.png", $this->idPhoto->getFileName());
    }

    public function testListIdPhotos()
    {
        $listOfIdPhotos = self::$onfido->listIdPhotos($this->applicantId)['id_photos'];
        $this->assertGreaterThan(0, sizeOf($listOfIdPhotos));
    }

    public function testFindIdPhoto()
    {
        $getIdPhoto = self::$onfido->findIdPhoto($this->idPhoto->getId());

        $this->assertSame($this->idPhoto->getId(), $getIdPhoto->getId());
    }

    public function testDownloadIdPhoto()
    {
        $file = self::$onfido->downloadIdPhoto($this->idPhoto->getId());
        $this->assertGreaterThan(0, $file->getSize());
    }

    public function testDownloadInexistentIdPhoto()
    {
        $inexistentIdPhotoId = '00000000-0000-0000-0000-000000000000';

        $this->expectException(ApiException::class);
        self::$onfido->downloadIdPhoto($inexistentIdPhotoId);
    }
}

?>
