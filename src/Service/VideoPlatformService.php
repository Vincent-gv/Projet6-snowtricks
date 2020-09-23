<?php


namespace App\Service;

use App\Entity\VideoTrick;

class VideoPlatformService
{
    public function parse(VideoTrick $videoTrick): void
    {
        if (!$videoTrick->getUrl()) {
            return;
        }

        $re = '/(?:youtube\.com\/\S*(?:(?:\/e(?:mbed))?\/|watch\?(?:\S*?&?v\=))|youtu\.be\/)([a-zA-Z0-9_-]{6,11})/m';
        $nbMatches = preg_match_all($re, $videoTrick->getUrl(), $matches, PREG_SET_ORDER, 0);

        if ($nbMatches === 1) {
            $videoTrick->setPlatformId($matches[0][1])
                ->setPlatformName('youtube');

            return;
        }

        $re = '/(?:dailymotion\.com\/video\/)([a-zA-Z0-9_-]{6,11})/m';
        $nbMatches = preg_match_all($re, $videoTrick->getUrl(), $matches, PREG_SET_ORDER, 0);

        if ($nbMatches === 1) {
            $videoTrick->setPlatformId($matches[0][1])
                ->setPlatformName('dailymotion');

            return;
        }

        $re = '/(?:vimeo\.com\/)([a-zA-Z0-9_-]{6,11})/m';
        $nbMatches = preg_match_all($re, $videoTrick->getUrl(), $matches, PREG_SET_ORDER, 0);

        if ($nbMatches === 1) {
            $videoTrick->setPlatformId($matches[0][1])
                ->setPlatformName('vimeo');

            return;
        }

        throw new \Exception('Bad URL format');
    }
}
