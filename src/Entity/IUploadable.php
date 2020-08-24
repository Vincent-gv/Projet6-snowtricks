<?php


namespace App\Entity;


use Symfony\Component\HttpFoundation\File\UploadedFile;

interface IUploadable
{
    public function getPathDirectory();

    public function setFilename(string $filename);

    public function getFile(): ?UploadedFile;

    public function getFilename(): ?string;
}