<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220818101235 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
//        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME NOT NULL, CHANGE modified modified DATETIME NOT NULL');
        $this->addSql('ALTER TABLE users ADD bank_account_id INT DEFAULT NULL, CHANGE created created DATETIME DEFAULT NULL, CHANGE modified modified DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E912CB990C FOREIGN KEY (bank_account_id) REFERENCES bank_accounts (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E912CB990C ON users (bank_account_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E912CB990C');
        $this->addSql('DROP INDEX UNIQ_1483A5E912CB990C ON users');
        $this->addSql('ALTER TABLE users DROP bank_account_id, CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP');
    }
}
