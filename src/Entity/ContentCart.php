<?php

namespace App\Entity;

use App\Repository\ContentCartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContentCartRepository::class)
 */
class ContentCart
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Product::class, inversedBy="contentCarts")
     */
    private $product;

    /**
     * @ORM\OneToOne(targetEntity=Cart::class, inversedBy="contentCart", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $cart;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $productQty;

    /**
     * @ORM\Column(type="datetime")
     */
    private $addToCartDate;

    public function __construct()
    {
        $this->product = new ArrayCollection();
        $this->addToCartDate = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProduct(): Collection
    {
        return $this->product;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->product->contains($product)) {
            $this->product[] = $product;
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        $this->product->removeElement($product);

        return $this;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(Cart $cart): self
    {
        $this->cart = $cart;

        return $this;
    }

    public function getProductQty(): ?int
    {
        return $this->productQty;
    }

    public function setProductQty(?int $productQty): self
    {
        $this->productQty = $productQty;

        return $this;
    }

    public function getAddToCartDate(): ?\DateTimeInterface
    {
        return $this->addToCartDate;
    }

    public function setAddToCartDate(\DateTimeInterface $addToCartDate): self
    {
        $this->addToCartDate = $addToCartDate;

        return $this;
    }

    public function __toString()
    {
        return (string )$this->id;
    }
}
