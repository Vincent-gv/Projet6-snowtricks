<?php

namespace App\Tests\Service;

use App\Entity\VideoTrick;
use App\Service\VideoPlatformService;
use PHPUnit\Framework\TestCase;

class VideoPlatformServiceTest extends TestCase
{
    public function testYoutubeLink()
    {
        $videoPlatformService = new VideoPlatformService();
        $videoTrick = new VideoTrick();

        $videoTrick->setUrl('https://www.youtube.com/watch?v=qybcQBiP7t0');

        $videoPlatformService->parse($videoTrick);

        $this->assertEquals('youtube', $videoTrick->getPlatformName());
        $this->assertEquals('qybcQBiP7t0', $videoTrick->getPlatformId());
    }

    public function testYoutubeShortLink()
    {
        $videoPlatformService = new VideoPlatformService();
        $videoTrick = new VideoTrick();

        $videoTrick->setUrl('https://youtu.be/qybcQBiP7t0');

        $videoPlatformService->parse($videoTrick);

        $this->assertEquals('youtube', $videoTrick->getPlatformName());
        $this->assertEquals('qybcQBiP7t0', $videoTrick->getPlatformId());
    }

    public function testYoutubeIframeLink()
    {
        $videoPlatformService = new VideoPlatformService();
        $videoTrick = new VideoTrick();

        $videoTrick->setUrl('https://www.youtube.com/embed/qybcQBiP7t0');

        $videoPlatformService->parse($videoTrick);

        $this->assertEquals('youtube', $videoTrick->getPlatformName());
        $this->assertEquals('qybcQBiP7t0', $videoTrick->getPlatformId());
    }

    public function testBadVideoLink()
    {
        $videoPlatformService = new VideoPlatformService();
        $videoTrick = new VideoTrick();

        $videoTrick->setUrl('https://www.google.com');

        $videoPlatformService->parse($videoTrick);

        $this->assertEquals('youtube', $videoTrick->getPlatformName());
        $this->assertEquals('qybcQBiP7t0', $videoTrick->getPlatformId());
    }
}