<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $role;

    /**
     * @ORM\Column(type="integer")
     * @ORM\oneToOne(targetEntity=UserImages::class)
     * @ORM\JoinColumn(name="user_image_id", referencedColumnName="id")
     */
    private $user_image_id;

    public function get_id(): ?int
    {
        return $this->id;
    }

    public function get_name(): ?string
    {
        return $this->name;
    }

    public function set_name(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function get_address(): ?string
    {
        return $this->address;
    }

    public function set_address(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function get_phone(): ?string
    {
        return $this->phone;
    }

    public function set_phone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function get_email(): ?string
    {
        return $this->email;
    }

    public function set_email(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function get_password(): ?string
    {
        return $this->password;
    }

    public function set_password(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function get_role(): ?string
    {
        return $this->role;
    }

    public function set_role(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function get_user_image_id(): ?int
    {
        return $this->user_image_id;
    }

    public function set_user_image_id(int $user_image_id): self
    {
        $this->user_image_id = $user_image_id;

        return $this;
    }
}
