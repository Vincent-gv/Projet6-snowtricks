<?php

namespace App\Entity;

use App\Repository\UserImageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity(repositoryClass=UserImageRepository::class)
 */
class UserImage implements IUploadable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    private $file;

    public function __construct()
    {
        $this->file = null;
    }

    public function getFullPath(): ?string
    {
        return $this->getPathDirectory() . '/' . $this->getFilename();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getFile(): ?UploadedFile
    {
        return $this->file;
    }

    /**
     * @param UploadedFile|null $file
     * @return UserImage
     * @deprecated Should use File::addImage()
     */
    public function setFile(?UploadedFile $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getPathDirectory()
    {
        return "/images/avatars";
    }
}
