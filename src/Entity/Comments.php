<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentsRepository::class)
 */
class Comments
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_by;

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

    public function get_content(): ?string
    {
        return $this->content;
    }

    public function set_content(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function get_created_by(): ?\DateTimeInterface
    {
        return $this->created_by;
    }

    public function set_created_by(?\DateTimeInterface $created_by): self
    {
        $this->created_by = $created_by;

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
