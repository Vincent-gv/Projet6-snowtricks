<?php

namespace App\Listener\Doctrine;

use App\Entity\VideoTrick;
use App\Service\VideoPlatformService;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class VideoTrickListener
{
    /**
     * @var VideoPlatformService
     */
    private $videoPlatformService;

    public function __construct(VideoPlatformService $videoPlatformService)
    {
        $this->videoPlatformService = $videoPlatformService;
    }

    public function prePersist(VideoTrick $videoTrick, LifecycleEventArgs $eventArgs)
    {
        $this->videoPlatformService->parse($videoTrick);
    }

    public function preUpdate(VideoTrick $videoTrick, PreUpdateEventArgs $eventArgs)
    {
        $this->videoPlatformService->parse($videoTrick);
    }
}