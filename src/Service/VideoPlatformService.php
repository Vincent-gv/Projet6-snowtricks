<?php

namespace App\Service;

use App\Entity\VideoTrick;
use App\Exception\BadUrlException;

class VideoPlatformService
{
    const YOUTUBE = '(?:youtube\.com\/\S*(?:(?:\/e(?:mbed))?\/|watch\?(?:\S*?&?v\=))|youtu\.be\/)([a-zA-Z0-9_-]{6,11})';
    const DAILYMOTION = '(?:dailymotion\.com\/\S*(?:(?:\/e(?:mbed))?\/|\?(?:\S*?&?v\=))|dai\.ly\/)([a-zA-Z0-9_-]{6,11})';
    const VIMEO = '(?:vimeo\.com\/|player\.vimeo\.com\/video\/)([a-zA-Z0-9_-]{6,11})';

    public function parse(VideoTrick $videoTrick): void
    {
        if (!$videoTrick->getUrl()) {
            return;
        }

        $nbMatches = preg_match_all('/' . self::YOUTUBE . '/m', $videoTrick->getUrl(), $matches, PREG_SET_ORDER, 0);

        if ($nbMatches === 1) {
            $videoTrick->setPlatformId($matches[0][1])
                ->setPlatformName('youtube');

            return;
        }

        $nbMatches = preg_match_all('/' . self::DAILYMOTION . '/m', $videoTrick->getUrl(), $matches, PREG_SET_ORDER, 0);

        if ($nbMatches === 1) {
            $videoTrick->setPlatformId($matches[0][1])
                ->setPlatformName('dailymotion');

            return;
        }

        $nbMatches = preg_match_all('/' . self::VIMEO . '/m', $videoTrick->getUrl(), $matches, PREG_SET_ORDER, 0);

        if ($nbMatches === 1) {
            $videoTrick->setPlatformId($matches[0][1])
                ->setPlatformName('vimeo');

            return;
        }

        throw new BadUrlException();
    }

    public function verify($value): bool
    {
        $nbMatches = preg_match_all('/(' . self::YOUTUBE . ')|(' . self::DAILYMOTION . ')|(' . self::VIMEO . ')/m', $value);

        if ($nbMatches === 1) {
            return true;
        }

        return false;
    }
}
