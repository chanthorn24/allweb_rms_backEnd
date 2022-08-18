<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220818094803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bank_accounts ADD bank_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bank_accounts ADD CONSTRAINT FK_FB88842B11C8FB41 FOREIGN KEY (bank_id) REFERENCES banks (id)');
        $this->addSql('CREATE INDEX IDX_FB88842B11C8FB41 ON bank_accounts (bank_id)');
//        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME NOT NULL, CHANGE modified modified DATETIME NOT NULL');
//        $this->addSql('ALTER TABLE users CHANGE created created DATETIME DEFAULT NULL, CHANGE modified modified DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bank_accounts DROP FOREIGN KEY FK_FB88842B11C8FB41');
        $this->addSql('DROP INDEX IDX_FB88842B11C8FB41 ON bank_accounts');
        $this->addSql('ALTER TABLE bank_accounts DROP bank_id');
        $this->addSql('ALTER TABLE users CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP');
    }
}
