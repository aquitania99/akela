<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160531233339 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE username username VARCHAR(255) DEFAULT NULL, CHANGE nationality nationality VARCHAR(255) DEFAULT NULL, CHANGE dob dob DATE DEFAULT NULL, CHANGE birth_country birth_country VARCHAR(255) DEFAULT NULL, CHANGE birth_city birth_city VARCHAR(255) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users CHANGE type type VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE username username VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE nationality nationality VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE dob dob DATE NOT NULL, CHANGE birth_country birth_country VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE birth_city birth_city VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
