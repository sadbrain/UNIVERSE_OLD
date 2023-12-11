<?php

namespace App\Entity;

use App\Repository\CartsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CartsRepository::class)
 */
class Carts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity=Orders::class)
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     */
    private $order_id;
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

    public function get_order_id(): ?int
    {
        return $this->order_id;
    }

    public function set_order_id(int $order_id): self
    {
        $this->order_id = $order_id;

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
