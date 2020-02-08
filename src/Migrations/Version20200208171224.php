<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200208171224 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product ADD product_image_file VARCHAR(255) NOT NULL, CHANGE product_color product_color VARCHAR(255) DEFAULT NULL, CHANGE product_code product_code VARCHAR(255) DEFAULT NULL, CHANGE product_quantity product_quantity INT DEFAULT NULL, CHANGE product_low_price product_low_price DOUBLE PRECISION DEFAULT NULL, CHANGE product_price product_price DOUBLE PRECISION DEFAULT NULL, CHANGE product_coupon product_coupon INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product DROP product_image_file, CHANGE product_color product_color VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE product_code product_code VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE product_quantity product_quantity INT DEFAULT NULL, CHANGE product_low_price product_low_price DOUBLE PRECISION DEFAULT \'NULL\', CHANGE product_price product_price DOUBLE PRECISION DEFAULT \'NULL\', CHANGE product_coupon product_coupon INT DEFAULT NULL');
    }
}
