<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\Column(type="integer", nullable=true)
     */
    private $productQty;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     */
    private $addToCartDate;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="contentCarts")
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity=Cart::class, inversedBy="contentCarts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cart;

    public function __construct()
    {
        $this->addToCartDate = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
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
    
    public function getProduct(): ?Product
    {
        return $this->product;
    }
    
    public function setProduct(?Product $product): self
    {
        $this->product = $product;
        
        return $this;
    }
    
    public function getCart(): ?Cart
    {
        return $this->cart;
    }
    
    public function setCart(?Cart $cart): self
    {
        $this->cart = $cart;
        
        return $this;
    }

    public function __toString()
    {
        return (string) $this->id;
    }
}
