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
     * @ORM\Column(type="string", length=255)
     */
    private $plateformId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $plateformName;

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

    /**
     * @param Trick|null $trick
     * @return VideoTrick
     * @deprecated Should use Trick::addVideo()
     */
    public function setTrick(?Trick $trick): self
    {
        $this->trick = $trick;

        return $this;
    }

    public function getPlateformId(): ?string
    {
        return $this->plateformId;
    }

    public function setPlateformId(string $plateformId): self
    {
        $this->plateformId = $plateformId;

        return $this;
    }

    public function getPlateformName(): ?string
    {
        return $this->plateformName;
    }

    public function setPlateformName(string $plateformName): self
    {
        $this->plateformName = $plateformName;

        return $this;
    }
}
