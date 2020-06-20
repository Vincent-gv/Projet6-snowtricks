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
     * @ORM\Column(type="string", length=55)
     */
    private $plateform;

    /**
     * @ORM\Column(type="integer")
     */
    private $video_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $trick_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlateform(): ?string
    {
        return $this->plateform;
    }

    public function setPlateform(string $plateform): self
    {
        $this->plateform = $plateform;

        return $this;
    }

    public function getVideoId(): ?int
    {
        return $this->video_id;
    }

    public function setVideoId(int $video_id): self
    {
        $this->video_id = $video_id;

        return $this;
    }

    public function getPostId(): ?int
    {
        return $this->trick_id;
    }

    public function setPostId(int $trick_id): self
    {
        $this->trick_id = $trick_id;

        return $this;
    }
}
