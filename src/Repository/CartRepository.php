<?php

namespace App\Repository;

use App\Entity\Cart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cart|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cart|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cart[]    findAll()
 * @method Cart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cart::class);
    }

    public function unpaidCart() {
        $qb = $this->createQueryBuilder('cart')
            ->orderBy('cart.purchase_date', 'ASC')
            ->where('cart.paid = 0')
        ;
        $query = $qb->getQuery();
        return $query->execute();
    }

    public function getCartByUserId($id) {
        $qb = $this->createQueryBuilder('cart')
            ->orderBy('cart.purchase_date', 'ASC')
            ->where("cart.user = $id")
        ;
        $query = $qb->getQuery();
        return $query->execute();
    }

    /**
     * @method Cart|null buyCart()
     */
    public function buyCart($id) {
        $qb = $this->createQueryBuilder('buy')
            ->update()
            ->set('buy.paid', true)
            ->where('buy.id =:id')
            ->setParameter('id', $id)
        ;
        $query = $qb->getQuery();
        return $query->execute();
    }

    
    // /**
    //  * @return Cart[] Returns an array of Cart objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cart
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
