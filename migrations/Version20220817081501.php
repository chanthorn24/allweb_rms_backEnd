<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220817081501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE emp_departments (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_roles (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, emp_department_id INT NOT NULL, user_role_id INT DEFAULT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, date_of_birth DATE NOT NULL, place_of_birth VARCHAR(255) NOT NULL, phone VARCHAR(50) NOT NULL, salary INT DEFAULT NULL, image_url LONGTEXT DEFAULT NULL, gender VARCHAR(50) NOT NULL, nationality VARCHAR(100) NOT NULL, religion VARCHAR(100) NOT NULL, address LONGTEXT NOT NULL, is_married TINYINT(1) NOT NULL, password VARCHAR(255) NOT NULL, join_date DATE NOT NULL, is_delete INT NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), INDEX IDX_1483A5E9A898937B (emp_department_id), INDEX IDX_1483A5E98E0E3CA6 (user_role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9A898937B FOREIGN KEY (emp_department_id) REFERENCES emp_departments (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E98E0E3CA6 FOREIGN KEY (user_role_id) REFERENCES user_roles (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9A898937B');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E98E0E3CA6');
        $this->addSql('DROP TABLE emp_departments');
        $this->addSql('DROP TABLE user_roles');
        $this->addSql('DROP TABLE users');
    }
}
