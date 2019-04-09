<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideoRepository")
 */
class Video
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $extension;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stream;

    /**
     * @ORM\Column(type="integer")
     */
    private $time_stream;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    public function getStream(): ?string
    {
        return $this->stream;
    }

    public function setStream(string $stream): self
    {
        $this->stream = $stream;

        return $this;
    }

    public function getTimeStream(): ?int
    {
        return $this->time_stream;
    }

    public function setTimeStream(int $time_stream): self
    {
        $this->time_stream = $time_stream;

        return $this;
    }
}
