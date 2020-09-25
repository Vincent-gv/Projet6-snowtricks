<?php

namespace App\Tests\Service;

use App\Entity\VideoTrick;
use App\Exception\BadUrlException;
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

    public function testDailyMotionLink()
    {
        $videoPlatformService = new VideoPlatformService();
        $videoTrick = new VideoTrick();

        $videoTrick->setUrl('https://www.dailymotion.com/video/x63itee');

        $videoPlatformService->parse($videoTrick);

        $this->assertEquals('dailymotion', $videoTrick->getPlatformName());
        $this->assertEquals('x63itee', $videoTrick->getPlatformId());
    }

    public function testDailyMotionShortLink()
    {
        $videoPlatformService = new VideoPlatformService();
        $videoTrick = new VideoTrick();

        $videoTrick->setUrl('https://dai.ly/x63itee');

        $videoPlatformService->parse($videoTrick);

        $this->assertEquals('dailymotion', $videoTrick->getPlatformName());
        $this->assertEquals('x63itee', $videoTrick->getPlatformId());
    }

    public function testDailyMotionIframeLink()
    {
        $videoPlatformService = new VideoPlatformService();
        $videoTrick = new VideoTrick();

        $videoTrick->setUrl('https://www.dailymotion.com/embed/video/x63itee');

        $videoPlatformService->parse($videoTrick);

        $this->assertEquals('dailymotion', $videoTrick->getPlatformName());
        $this->assertEquals('x63itee', $videoTrick->getPlatformId());
    }

    public function testVimeoLink()
    {
        $videoPlatformService = new VideoPlatformService();
        $videoTrick = new VideoTrick();

        $videoTrick->setUrl('https://vimeo.com/303235330');

        $videoPlatformService->parse($videoTrick);

        $this->assertEquals('vimeo', $videoTrick->getPlatformName());
        $this->assertEquals('303235330', $videoTrick->getPlatformId());
    }

    public function testVimeoIframeLink()
    {
        $videoPlatformService = new VideoPlatformService();
        $videoTrick = new VideoTrick();

        $videoTrick->setUrl('https://player.vimeo.com/video/303235330');

        $videoPlatformService->parse($videoTrick);

        $this->assertEquals('vimeo', $videoTrick->getPlatformName());
        $this->assertEquals('303235330', $videoTrick->getPlatformId());
    }

    public function testBadVideoLink()
    {
        $videoPlatformService = new VideoPlatformService();
        $videoTrick = new VideoTrick();

        $videoTrick->setUrl('https://www.google.com');

        $this->expectException(BadUrlException::class);
        $videoPlatformService->parse($videoTrick);
    }
}
