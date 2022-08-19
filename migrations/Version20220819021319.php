<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220819021319 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp_attendances ADD emp_attendance_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp_attendances ADD CONSTRAINT FK_9EBA803C1D0EA656 FOREIGN KEY (emp_attendance_type_id) REFERENCES emp_attendance_types (id)');
        $this->addSql('CREATE INDEX IDX_9EBA803C1D0EA656 ON emp_attendances (emp_attendance_type_id)');
//        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME NOT NULL, CHANGE modified modified DATETIME NOT NULL');
        $this->addSql('ALTER TABLE emp_leaves ADD emp_leave_reason_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp_leaves ADD CONSTRAINT FK_2C21C58378E07470 FOREIGN KEY (emp_leave_reason_id) REFERENCES emp_leave_reasons (id)');
        $this->addSql('CREATE INDEX IDX_2C21C58378E07470 ON emp_leaves (emp_leave_reason_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp_attendances DROP FOREIGN KEY FK_9EBA803C1D0EA656');
        $this->addSql('DROP INDEX IDX_9EBA803C1D0EA656 ON emp_attendances');
        $this->addSql('ALTER TABLE emp_attendances DROP emp_attendance_type_id');
        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE emp_leaves DROP FOREIGN KEY FK_2C21C58378E07470');
        $this->addSql('DROP INDEX IDX_2C21C58378E07470 ON emp_leaves');
        $this->addSql('ALTER TABLE emp_leaves DROP emp_leave_reason_id');
    }
}
