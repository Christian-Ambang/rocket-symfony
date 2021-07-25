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
     * @Assert\NotBlank
     */
    private $purchase_date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $paid;

    /**
     * @ORM\OneToMany(targetEntity=ContentCart::class, mappedBy="cart", orphanRemoval=true, cascade={"persist"})
     */
    private $contentCarts;

    public function __construct()
    {
        $this->purchase_date = new \DateTime();
        $this->contentCarts = new ArrayCollection();
    }

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


    // public function getContentCart(): array
    // {
    //     return $this->contentCarts->toArray();
    // }
    public function getContentCart(): Collection
    {
        return $this->contentCarts;
    }

//     public function setContentCart(array $contentCarts)
// {
//     $this->contentCarts = new ArrayCollection($contentCarts);
// }

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

    public function __toString()
    {
        // return 'User: '. (string) $this->user .' | Cart id: '.$this->id;
        // if(is_null($this->user)) {
        //     return 'NULL';
        // }    
        // return 'User: '. (string) $this->user .' | Cart id: '.$this->id.' | Paid: '.$this->paid.' | Date: '.$this->purchase_date.' | Carts: '.$this->contentCarts;
        // return __CLASS__ . '@' . spl_object_hash($this->contentCarts);
        
        // $format = "Participation (Id: %s, %s, %s)\n";
        // return sprintf($format, $this->id, $this->user, $this->paid,);
        // return 'User: '. $this->user .' | Cart id: '.$this->id;
        return $this->id;
    }
}
