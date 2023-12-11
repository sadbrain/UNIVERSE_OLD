<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $status;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $total;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_time;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity=Products::class)
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product_id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity=Users::class)
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    public function get_id(): ?int
    {
        return $this->id;
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

    public function get_status(): ?string
    {
        return $this->status;
    }

    public function set_status(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function get_total(): ?string
    {
        return $this->total;
    }

    public function set_total(?string $total): self
    {
        $this->total = $total;

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

    public function get_date_time(): ?\DateTimeInterface
    {
        return $this->date_time;
    }

    public function set_date_time(?\DateTimeInterface $date_time): self
    {
        $this->date_time = $date_time;

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

    public function get_user_id(): ?int
    {
        return $this->user_id;
    }

    public function set_user_id(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
