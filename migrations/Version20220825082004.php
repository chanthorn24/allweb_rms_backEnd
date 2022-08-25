<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220825082004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bank_accounts CHANGE number number VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE emp_attendances ADD created TIMESTAMP DEFAULT CURRENT_TIMESTAMP, ADD modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
//        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME NOT NULL, CHANGE modified modified DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bank_accounts CHANGE number number INT NOT NULL');
        $this->addSql('ALTER TABLE emp_attendances DROP created, DROP modified');
        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
