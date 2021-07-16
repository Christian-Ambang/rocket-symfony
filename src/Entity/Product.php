<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your product name must be at least {{ limit }} characters long",
     *      maxMessage = "Your product name cannot be longer than {{ limit }} characters"
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\Length(
     *      min = 15,
     *      max = 320,
     *      minMessage = "Your product description must be at least {{ limit }} characters long",
     *      maxMessage = "Your product description cannot be longer than {{ limit }} characters"
     * )
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     * @Assert\PositiveOrZero
     */
    private $price;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\PositiveOrZero
     */
    private $stock;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Url
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=ContentCart::class, mappedBy="product")
     */
    private $contentCarts;

    public function __construct()
    {
        $this->contentCarts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return Collection|ContentCart[]
     */
    public function getContentCarts(): Collection
    {
        return $this->contentCarts;
    }

    public function addContentCart(ContentCart $contentCart): self
    {
        if (!$this->contentCarts->contains($contentCart)) {
            $this->contentCarts[] = $contentCart;
            $contentCart->setProduct($this);
        }

        return $this;
    }

    public function removeContentCart(ContentCart $contentCart): self
    {
        if ($this->contentCarts->removeElement($contentCart)) {
            // set the owning side to null (unless already changed)
            if ($contentCart->getProduct() === $this) {
                $contentCart->setProduct(null);
            }
        }

        return $this;
    }
}
