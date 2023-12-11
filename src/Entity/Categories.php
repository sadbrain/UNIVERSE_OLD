<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
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

    public function get_id(): ?int
    {
        return $this->id;
    }

    public function get_ame(): ?string
    {
        return $this->name;
    }

    public function set_name(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
