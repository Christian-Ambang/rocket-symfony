<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\CartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CartRepository::class)
 */
class Cart
{
    public function __construct()
    {
        $this->purchase_date = new \DateTime();
        $this->contentCarts = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="carts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\DateTime
     * @Assert\NotBlank
     */
    private $purchase_date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $paid;

    /**
     * @ORM\OneToMany(targetEntity=ContentCart::class, mappedBy="cart", orphanRemoval=true)
     */
    private $contentCarts;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPurchaseDate(): ?\DateTimeInterface
    {
        return $this->purchase_date;
    }

    public function setPurchaseDate(?\DateTimeInterface $purchase_date): self
    {
        $this->purchase_date = $purchase_date;

        return $this;
    }

    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    public function setPaid(bool $paid): self
    {
        $this->paid = $paid;

        return $this;
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
            $contentCart->setCart($this);
        }

        return $this;
    }

    public function removeContentCart(ContentCart $contentCart): self
    {
        if ($this->contentCarts->removeElement($contentCart)) {
            // set the owning side to null (unless already changed)
            if ($contentCart->getCart() === $this) {
                $contentCart->setCart(null);
            }
        }

        return $this;
    }
}
