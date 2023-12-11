<?php

namespace App\Entity;

use App\Repository\ProductCategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductCategoriesRepository::class)
 */
class ProductCategories
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity=Products::class)
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product_id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity=Categories::class)
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category_id;

    public function get_id(): ?int
    {
        return $this->id;
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

    public function get_category_id(): ?int
    {
        return $this->category_id;
    }

    public function set_category_id(int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }
}
