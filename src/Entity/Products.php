<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductsRepository::class)
 */
class Products
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
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $short_description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $long_description;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $price;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $rating;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity_buyed;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color;
    /**
     * @ORM\OneToMany(targetEntity=ProductImages::class, mappedBy="product")
     */
    private $image;
    public function get_id(): ?int
    {
        return $this->id;
    }

    public function get_title(): ?string
    {
        return $this->title;
    }

    public function set_title(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function get_short_description(): ?string
    {
        return $this->short_description;
    }

    public function set_short_description(?string $short_description): self
    {
        $this->short_description = $short_description;

        return $this;
    }

    public function get_long_description(): ?string
    {
        return $this->long_description;
    }

    public function set_long_description(?string $long_description): self
    {
        $this->long_description = $long_description;

        return $this;
    }

    public function get_price(): ?string
    {
        return $this->price;
    }

    public function set_price(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function get_rating(): ?float
    {
        return $this->rating;
    }

    public function set_rating(?float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function get_quantity(): ?int
    {
        return $this->quantity;
    }

    public function set_quantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function get_quantity_buyed(): ?int
    {
        return $this->quantity_buyed;
    }

    public function set_quantity_buyed(?int $quantity_buyed): self
    {
        $this->quantity_buyed = $quantity_buyed;

        return $this;
    }

    public function get_size(): ?string
    {
        return $this->size;
    }

    public function set_size(?string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function get_color(): ?string
    {
        return $this->color;
    }

    public function set_color(?string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
