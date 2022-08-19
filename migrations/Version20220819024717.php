<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220819024717 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp_attendances ADD employee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp_attendances ADD CONSTRAINT FK_9EBA803C8C03F15C FOREIGN KEY (employee_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_9EBA803C8C03F15C ON emp_attendances (employee_id)');
//        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME NOT NULL, CHANGE modified modified DATETIME NOT NULL');
        $this->addSql('ALTER TABLE emp_leaves ADD employee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp_leaves ADD CONSTRAINT FK_2C21C5838C03F15C FOREIGN KEY (employee_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_2C21C5838C03F15C ON emp_leaves (employee_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp_attendances DROP FOREIGN KEY FK_9EBA803C8C03F15C');
        $this->addSql('DROP INDEX IDX_9EBA803C8C03F15C ON emp_attendances');
        $this->addSql('ALTER TABLE emp_attendances DROP employee_id');
        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE emp_leaves DROP FOREIGN KEY FK_2C21C5838C03F15C');
        $this->addSql('DROP INDEX IDX_2C21C5838C03F15C ON emp_leaves');
        $this->addSql('ALTER TABLE emp_leaves DROP employee_id');
    }
}
