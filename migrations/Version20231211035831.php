<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231211035831 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE IF NOT EXISTS carts (id INT AUTO_INCREMENT NOT NULL, order_id INT NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS comments (id INT AUTO_INCREMENT NOT NULL, content LONGTEXT NOT NULL, created_by DATETIME DEFAULT NULL, product_id INT NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS orders (id INT AUTO_INCREMENT NOT NULL, quantity INT DEFAULT NULL, status VARCHAR(100) NOT NULL, total NUMERIC(10, 2) DEFAULT NULL, size VARCHAR(50) DEFAULT NULL, color VARCHAR(255) DEFAULT NULL, date_time DATETIME DEFAULT NULL, product_id INT NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS payments (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(60) DEFAULT NULL, date_time INT NOT NULL, status VARCHAR(100) DEFAULT NULL, order_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS product_categories (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS product_images (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, size INT DEFAULT NULL, format VARCHAR(10) DEFAULT NULL, upload_date DATETIME DEFAULT NULL, product_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS products (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, short_description LONGTEXT DEFAULT NULL, long_description LONGTEXT DEFAULT NULL, price NUMERIC(10, 2) NOT NULL, rating DOUBLE PRECISION DEFAULT NULL, quantity INT DEFAULT NULL, quantity_buyed INT DEFAULT NULL, size VARCHAR(50) DEFAULT NULL, color VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS user_images (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) DEFAULT NULL, size INT DEFAULT NULL, format VARCHAR(10) DEFAULT NULL, update_date DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, address VARCHAR(255) DEFAULT NULL, phone VARCHAR(15) DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(100) NOT NULL, role VARCHAR(30) NOT NULL, user_image_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE carts');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE payments');
        $this->addSql('DROP TABLE product_categories');
        $this->addSql('DROP TABLE product_images');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE user_images');
        $this->addSql('DROP TABLE users');
    }
}
