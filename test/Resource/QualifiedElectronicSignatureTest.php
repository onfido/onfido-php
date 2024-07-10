<?php

namespace Onfido\Test\Resource;

class QualifiedElectronicSignatureTest extends OnfidoTestCase
{
		private $applicantId;
    private $workflowId;
    private $workflowRun;
		private $fileId;

    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
        $this->workflowId = 'e8c921eb-0495-44fe-b655-bcdcaffdafe5';
        $this->workflowRun = $this->createWorkflowRun(null, $this->applicantId, $this->workflowId);
				$this->fileId = '58813a17-904c-408f-8105-127dc8144b3e';
    }

		public function testDownloadQesDocument(): void
    {
        $file = self::$onfido->downloadQesDocument($this->workflowRun->getId(), $this->fileId);
        $this->assertGreaterThan(0, $file->getSize());
    }
}

?>