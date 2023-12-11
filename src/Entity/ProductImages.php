<?php

namespace App\Entity;

use App\Repository\ProductImagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductImagesRepository::class)
 */
class ProductImages
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
    private $upload_date;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity=Products::class)
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product_id;

    public function get_id(): ?int
    {
        return $this->id;
    }

    public function get_url(): ?string
    {
        return $this->url;
    }

    public function set_url(string $url): self
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

    public function set_format(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function get_upload_date(): ?\DateTimeInterface
    {
        return $this->upload_date;
    }

    public function set_upload_date(?\DateTimeInterface $upload_date): self
    {
        $this->upload_date = $upload_date;

        return $this;
    }

    public function get_product_id(): ?int
    {
        return $this->product_id;
    }

    public function set_product_id(int $product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }
}