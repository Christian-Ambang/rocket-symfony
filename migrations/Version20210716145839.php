<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716145839 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE content_cart_product');
        $this->addSql('ALTER TABLE content_cart DROP INDEX UNIQ_C6C165721AD5CDBF, ADD INDEX IDX_C6C165721AD5CDBF (cart_id)');
        $this->addSql('ALTER TABLE content_cart ADD product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE content_cart ADD CONSTRAINT FK_C6C165724584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_C6C165724584665A ON content_cart (product_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE content_cart_product (content_cart_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_2C18C0154584665A (product_id), INDEX IDX_2C18C015C5DD140C (content_cart_id), PRIMARY KEY(content_cart_id, product_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE content_cart_product ADD CONSTRAINT FK_2C18C0154584665A FOREIGN KEY (product_id) REFERENCES product (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE content_cart_product ADD CONSTRAINT FK_2C18C015C5DD140C FOREIGN KEY (content_cart_id) REFERENCES content_cart (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE content_cart DROP INDEX IDX_C6C165721AD5CDBF, ADD UNIQUE INDEX UNIQ_C6C165721AD5CDBF (cart_id)');
        $this->addSql('ALTER TABLE content_cart DROP FOREIGN KEY FK_C6C165724584665A');
        $this->addSql('DROP INDEX IDX_C6C165724584665A ON content_cart');
        $this->addSql('ALTER TABLE content_cart DROP product_id');
    }
}
