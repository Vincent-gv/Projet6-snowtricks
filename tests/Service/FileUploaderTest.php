<?php

namespace App\Tests\Service;

use App\Entity\IUploadable;
use App\Service\FileUploader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploaderTest extends TestCase
{
    public function testPublicPath(IUploadable $loadable)
    {

        static::assertEquals('', $loadable->getPathDirectory());
    }

}
