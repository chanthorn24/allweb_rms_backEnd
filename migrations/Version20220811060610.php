<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220811060610 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD em_department_id INT NOT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9C1F8E01D FOREIGN KEY (em_department_id) REFERENCES em_departments (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9C1F8E01D ON users (em_department_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9C1F8E01D');
        $this->addSql('DROP INDEX IDX_1483A5E9C1F8E01D ON users');
        $this->addSql('ALTER TABLE users DROP em_department_id');
    }
}
