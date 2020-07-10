<?php

namespace App\Entity;

use App\Repository\VideoTrickRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VideoTrickRepository::class)
 */
class VideoTrick
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $videoId;

    /**
     * @ORM\ManyToOne(targetEntity=Trick::class, inversedBy="videos")
     */
    private $trick;

    /**
     * @ORM\Column(type="integer")
     */
    private $platform;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    public function setVideoId(string $videoId): self
    {
        $this->videoId = $videoId;

        return $this;
    }

    public function getTrick(): ?Trick
    {
        return $this->trick;
    }

    public function setTrick(?Trick $trick): self
    {
        $this->trick = $trick;

        return $this;
    }

    public function getPlatform(): ?int
    {
        return $this->platform;
    }

    public function setPlatform(int $platform): self
    {
        $this->platform = $platform;

        return $this;
    }
}
