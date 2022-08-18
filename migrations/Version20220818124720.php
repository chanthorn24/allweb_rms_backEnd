<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220818124720 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
//        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME NOT NULL, CHANGE modified modified DATETIME NOT NULL');
        $this->addSql('ALTER TABLE emp_families ADD employee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emp_families ADD CONSTRAINT FK_F7BBEDD28C03F15C FOREIGN KEY (employee_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_F7BBEDD28C03F15C ON emp_families (employee_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE emp_families DROP FOREIGN KEY FK_F7BBEDD28C03F15C');
        $this->addSql('DROP INDEX IDX_F7BBEDD28C03F15C ON emp_families');
        $this->addSql('ALTER TABLE emp_families DROP employee_id');
    }
}
