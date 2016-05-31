<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160531232855 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users CHANGE dob dob DATE NOT NULL, CHANGE birth_country birth_country VARCHAR(255) NOT NULL, CHANGE birth_city birth_city VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E98781E5CF FOREIGN KEY (counsellor_id) REFERENCES counsellors (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E98781E5CF ON users (counsellor_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E98781E5CF');
        $this->addSql('DROP INDEX IDX_1483A5E98781E5CF ON users');
        $this->addSql('ALTER TABLE users CHANGE dob dob DATE DEFAULT NULL, CHANGE birth_country birth_country VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE birth_city birth_city VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
