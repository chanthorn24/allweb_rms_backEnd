<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220829024906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bank_accounts (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, number VARCHAR(255) NOT NULL, bank_id INT DEFAULT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, INDEX IDX_FB88842B11C8FB41 (bank_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE banks (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_attendance_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_attendances (id INT AUTO_INCREMENT NOT NULL, emp_attendance_type_id INT DEFAULT NULL, employee_id INT DEFAULT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, INDEX IDX_9EBA803C1D0EA656 (emp_attendance_type_id), INDEX IDX_9EBA803C8C03F15C (employee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_departments (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_families (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, phone VARCHAR(50) NOT NULL, family_relationship_id INT DEFAULT NULL, employee_id INT DEFAULT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, INDEX IDX_F7BBEDD2B71C1A7 (family_relationship_id), INDEX IDX_F7BBEDD28C03F15C (employee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_leave_reasons (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_leaves (id INT AUTO_INCREMENT NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, description VARCHAR(255) DEFAULT NULL, emp_leave_reason_id INT DEFAULT NULL, employee_id INT DEFAULT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, INDEX IDX_2C21C58378E07470 (emp_leave_reason_id), INDEX IDX_2C21C5838C03F15C (employee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_positions (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE family_relationships (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE school_degrees (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_education_degrees (id INT AUTO_INCREMENT NOT NULL, school_degree_id INT DEFAULT NULL, school VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, INDEX IDX_2B298877C21394EB (school_degree_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_roles (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_delete TINYINT(1) NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, date_of_birth DATE NOT NULL, place_of_birth VARCHAR(255) NOT NULL, phone VARCHAR(50) NOT NULL, salary INT DEFAULT NULL, image_url LONGTEXT DEFAULT NULL, gender VARCHAR(50) NOT NULL, nationality VARCHAR(100) NOT NULL, religion VARCHAR(100) NOT NULL, address LONGTEXT NOT NULL, is_married TINYINT(1) NOT NULL, password VARCHAR(255) NOT NULL, join_date DATE NOT NULL, emp_department_id INT NOT NULL, user_role_id INT DEFAULT NULL, emp_position_id INT DEFAULT NULL, bank_account_id INT DEFAULT NULL, user_education_degree_id INT DEFAULT NULL, is_delete INT NOT NULL, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), INDEX IDX_1483A5E9A898937B (emp_department_id), INDEX IDX_1483A5E98E0E3CA6 (user_role_id), INDEX IDX_1483A5E9DF5521AE (emp_position_id), UNIQUE INDEX UNIQ_1483A5E912CB990C (bank_account_id), UNIQUE INDEX UNIQ_1483A5E9D7317DE (user_education_degree_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bank_accounts ADD CONSTRAINT FK_FB88842B11C8FB41 FOREIGN KEY (bank_id) REFERENCES banks (id)');
        $this->addSql('ALTER TABLE emp_attendances ADD CONSTRAINT FK_9EBA803C1D0EA656 FOREIGN KEY (emp_attendance_type_id) REFERENCES emp_attendance_types (id)');
        $this->addSql('ALTER TABLE emp_attendances ADD CONSTRAINT FK_9EBA803C8C03F15C FOREIGN KEY (employee_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE emp_families ADD CONSTRAINT FK_F7BBEDD2B71C1A7 FOREIGN KEY (family_relationship_id) REFERENCES family_relationships (id)');
        $this->addSql('ALTER TABLE emp_families ADD CONSTRAINT FK_F7BBEDD28C03F15C FOREIGN KEY (employee_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE emp_leaves ADD CONSTRAINT FK_2C21C58378E07470 FOREIGN KEY (emp_leave_reason_id) REFERENCES emp_leave_reasons (id)');
        $this->addSql('ALTER TABLE emp_leaves ADD CONSTRAINT FK_2C21C5838C03F15C FOREIGN KEY (employee_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE user_education_degrees ADD CONSTRAINT FK_2B298877C21394EB FOREIGN KEY (school_degree_id) REFERENCES school_degrees (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9A898937B FOREIGN KEY (emp_department_id) REFERENCES emp_departments (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E98E0E3CA6 FOREIGN KEY (user_role_id) REFERENCES user_roles (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9DF5521AE FOREIGN KEY (emp_position_id) REFERENCES emp_positions (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E912CB990C FOREIGN KEY (bank_account_id) REFERENCES bank_accounts (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9D7317DE FOREIGN KEY (user_education_degree_id) REFERENCES user_education_degrees (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bank_accounts DROP FOREIGN KEY FK_FB88842B11C8FB41');
        $this->addSql('ALTER TABLE emp_attendances DROP FOREIGN KEY FK_9EBA803C1D0EA656');
        $this->addSql('ALTER TABLE emp_attendances DROP FOREIGN KEY FK_9EBA803C8C03F15C');
        $this->addSql('ALTER TABLE emp_families DROP FOREIGN KEY FK_F7BBEDD2B71C1A7');
        $this->addSql('ALTER TABLE emp_families DROP FOREIGN KEY FK_F7BBEDD28C03F15C');
        $this->addSql('ALTER TABLE emp_leaves DROP FOREIGN KEY FK_2C21C58378E07470');
        $this->addSql('ALTER TABLE emp_leaves DROP FOREIGN KEY FK_2C21C5838C03F15C');
        $this->addSql('ALTER TABLE user_education_degrees DROP FOREIGN KEY FK_2B298877C21394EB');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9A898937B');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E98E0E3CA6');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9DF5521AE');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E912CB990C');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9D7317DE');
        $this->addSql('DROP TABLE bank_accounts');
        $this->addSql('DROP TABLE banks');
        $this->addSql('DROP TABLE emp_attendance_types');
        $this->addSql('DROP TABLE emp_attendances');
        $this->addSql('DROP TABLE emp_departments');
        $this->addSql('DROP TABLE emp_families');
        $this->addSql('DROP TABLE emp_leave_reasons');
        $this->addSql('DROP TABLE emp_leaves');
        $this->addSql('DROP TABLE emp_positions');
        $this->addSql('DROP TABLE family_relationships');
        $this->addSql('DROP TABLE school_degrees');
        $this->addSql('DROP TABLE user_education_degrees');
        $this->addSql('DROP TABLE user_roles');
        $this->addSql('DROP TABLE users');
    }
}
