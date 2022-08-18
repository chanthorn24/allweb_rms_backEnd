<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220818133057 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
//        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME NOT NULL, CHANGE modified modified DATETIME NOT NULL');
        $this->addSql('ALTER TABLE user_education_degrees ADD school_degree_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_education_degrees ADD CONSTRAINT FK_2B298877C21394EB FOREIGN KEY (school_degree_id) REFERENCES school_degrees (id)');
        $this->addSql('CREATE INDEX IDX_2B298877C21394EB ON user_education_degrees (school_degree_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emp_departments CHANGE created created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE modified modified DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE user_education_degrees DROP FOREIGN KEY FK_2B298877C21394EB');
        $this->addSql('DROP INDEX IDX_2B298877C21394EB ON user_education_degrees');
        $this->addSql('ALTER TABLE user_education_degrees DROP school_degree_id');
    }
}
