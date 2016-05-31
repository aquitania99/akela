<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160601000129 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE counsellors CHANGE office_id office_id INT NOT NULL');
        $this->addSql('ALTER TABLE counsellors ADD CONSTRAINT FK_C20D1B7CFFA0C224 FOREIGN KEY (office_id) REFERENCES offices (id)');
        $this->addSql('CREATE INDEX IDX_C20D1B7CFFA0C224 ON counsellors (office_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE counsellors DROP FOREIGN KEY FK_C20D1B7CFFA0C224');
        $this->addSql('DROP INDEX IDX_C20D1B7CFFA0C224 ON counsellors');
        $this->addSql('ALTER TABLE counsellors CHANGE office_id office_id INT DEFAULT NULL');
    }
}
