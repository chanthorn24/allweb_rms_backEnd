<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220817095119 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bank_accounts (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, number INT NOT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE banks (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_attendance_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_attendances (id INT AUTO_INCREMENT NOT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_families (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, phone VARCHAR(50) NOT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_leave_reasons (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_leaves (id INT AUTO_INCREMENT NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, description VARCHAR(255) DEFAULT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_positions (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE family_relationships (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE school_degrees (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_education_degrees (id INT AUTO_INCREMENT NOT NULL, school VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bank_accounts');
        $this->addSql('DROP TABLE banks');
        $this->addSql('DROP TABLE emp_attendance_types');
        $this->addSql('DROP TABLE emp_attendances');
        $this->addSql('DROP TABLE emp_families');
        $this->addSql('DROP TABLE emp_leave_reasons');
        $this->addSql('DROP TABLE emp_leaves');
        $this->addSql('DROP TABLE emp_positions');
        $this->addSql('DROP TABLE family_relationships');
        $this->addSql('DROP TABLE school_degrees');
        $this->addSql('DROP TABLE user_education_degrees');
        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE users CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP');
    }
}
