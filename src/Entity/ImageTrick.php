<?php

namespace App\Entity;

use App\Repository\ImageTrickRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity(repositoryClass=ImageTrickRepository::class)
 */
class ImageTrick implements IUploadable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    private $file;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $alt;

    /**
     * @ORM\ManyToOne(targetEntity=Trick::class, inversedBy="images")
     */
    private $trick;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->trick = null;
        $this->file = null;
    }

    public function getFullPath(): ?string
    {
        return $this->getPathDirectory() . '/' . $this->getFilename();
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

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }

    public function getTrick(): ?Trick
    {
        return $this->trick;
    }

    /**
     * @param Trick|null $trick
     * @return ImageTrick
     * @deprecated Should use Trick::addImage()
     */
    public function setTrick(?Trick $trick): self
    {
        $this->trick = $trick;

        return $this;
    }

    public function getFile(): ?UploadedFile
    {
        return $this->file;
    }

    /**
     * @param UploadedFile|null $file
     * @return ImageTrick
     * @deprecated Should use File::setCover()
     */
    public function setFile(?UploadedFile $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getPathDirectory()
    {
        return "/upload/images";
    }
}
