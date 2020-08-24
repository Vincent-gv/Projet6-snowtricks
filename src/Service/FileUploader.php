<?php

namespace App\Service;

use App\Entity\IUploadable;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
    private $slugger;
    private $publicPath;

    public function __construct(string $publicPath)
    {
        $this->publicPath = $publicPath;
    }

    public function upload(IUploadable $uploadable)
    {
        $file = $uploadable->getFile();

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $fileName = $originalFilename . '-' . uniqid() . '.' . $file->guessExtension();

        try {
            $file->move($this->publicPath . $uploadable->getPathDirectory(), $fileName);
        } catch (FileException $e) {

            die($e);
        }

        $uploadable->setFilename($fileName);
    }

    public function remove (IUploadable $uploadable)
    {
        unlink($this->publicPath.'/'.$uploadable->getPathDirectory().'/'.$uploadable->getFilename());
    }
}
