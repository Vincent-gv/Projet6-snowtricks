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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity=Trick::class, inversedBy="videos")
     */
    private $trick;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $platformId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $platformName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

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

    public function getPlatformId(): ?string
    {
        return $this->platformId;
    }

    public function setPlatformId(string $platformId): self
    {
        $this->platformId = $platformId;

        return $this;
    }

    public function getPlatformName(): ?string
    {
        return $this->platformName;
    }

    public function setPlatformName(string $platformName): self
    {
        $this->platformName = $platformName;

        return $this;
    }

    public function getIframe(): ?string
    {
        if ($this->getPlatformName() === 'youtube') {
            return '<a href="https://www.youtube.com/watch?v='
                . $this->getPlatformId()
                . '" class="zoombox carousel-items"></a><iframe width="320" height="220" src="https://www.youtube.com/embed/'
                . $this->getPlatformId()
                . '"></iframe>';
        }

        if ($this->getPlatformName() === 'dailymotion') {
            return '<a href="https://www.dailymotion.com/video/'
                . $this->getPlatformId()
                . '" class="zoombox carousel-items"></a><iframe style="background-color: #1a1a1a;" width="320" height="220" frameborder="0" src="https://www.dailymotion.com/embed/video/'
                . $this->getPlatformId()
                . '"></iframe>';
        }

        if ($this->getPlatformName() === 'vimeo') {
            return '<a href="https://player.vimeo.com/video/'
                . $this->getPlatformId()
                . '" class="zoombox carousel-items"></a><iframe width="320" height="220" src="https://player.vimeo.com/video/'
                . $this->getPlatformId()
                . '" style="background-color: #1a1a1a;"></iframe>';
        }
    }
}
