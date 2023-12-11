<?php

namespace App\Entity;

use App\Repository\UserImagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserImagesRepository::class)
 */
class UserImages
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $format;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $update_date;

    public function get_id(): ?int
    {
        return $this->id;
    }

    public function get_url(): ?string
    {
        return $this->url;
    }

    public function set_url(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function get_size(): ?int
    {
        return $this->size;
    }

    public function set_size(?int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function get_format(): ?string
    {
        return $this->format;
    }

    public function set_format(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function get_update_date(): ?\DateTimeInterface
    {
        return $this->update_date;
    }

    public function set_update_date(?\DateTimeInterface $update_date): self
    {
        $this->update_date = $update_date;

        return $this;
    }
}
