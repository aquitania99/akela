<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160803075124 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE account CHANGE timezone timezone DATETIME NOT NULL');
        $this->addSql('ALTER TABLE passport DROP FOREIGN KEY FK_B5A26E088D93D649');
        $this->addSql('ALTER TABLE passport ADD CONSTRAINT FK_B5A26E088D93D649 FOREIGN KEY (user) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE profile ADD office_id INT DEFAULT NULL, ADD mobile INT NOT NULL, ADD gender VARCHAR(2) NOT NULL, ADD nationality VARCHAR(255) DEFAULT NULL, ADD passport VARCHAR(255) NOT NULL, ADD language VARCHAR(255) DEFAULT NULL, ADD dob DATE DEFAULT NULL, ADD birth_country VARCHAR(255) DEFAULT NULL, ADD birth_city VARCHAR(255) DEFAULT NULL, ADD counsellor_id INT DEFAULT NULL, CHANGE name type VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE profile ADD CONSTRAINT FK_8157AA0FFFA0C224 FOREIGN KEY (office_id) REFERENCES office (id)');
        $this->addSql('CREATE INDEX IDX_8157AA0FFFA0C224 ON profile (office_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649FFA0C224');
        $this->addSql('DROP INDEX IDX_8D93D649FFA0C224 ON user');
        $this->addSql('ALTER TABLE user DROP office_id, DROP counsellor_id, DROP mobile, DROP gender, DROP nationality, DROP language, DROP dob, DROP birth_country, DROP birth_city, DROP passport');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE account CHANGE timezone timezone DATETIME NOT NULL');
        $this->addSql('ALTER TABLE passport DROP FOREIGN KEY FK_B5A26E088D93D649');
        $this->addSql('ALTER TABLE passport ADD CONSTRAINT FK_B5A26E088D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE profile DROP FOREIGN KEY FK_8157AA0FFFA0C224');
        $this->addSql('DROP INDEX IDX_8157AA0FFFA0C224 ON profile');
        $this->addSql('ALTER TABLE profile ADD name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP office_id, DROP type, DROP mobile, DROP gender, DROP nationality, DROP passport, DROP language, DROP dob, DROP birth_country, DROP birth_city, DROP counsellor_id');
        $this->addSql('ALTER TABLE user ADD office_id INT DEFAULT NULL, ADD counsellor_id INT DEFAULT NULL, ADD mobile INT NOT NULL, ADD gender VARCHAR(2) NOT NULL COLLATE utf8_unicode_ci, ADD nationality VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD language VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD dob DATE DEFAULT NULL, ADD birth_country VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD birth_city VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD passport VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649FFA0C224 FOREIGN KEY (office_id) REFERENCES office (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649FFA0C224 ON user (office_id)');
    }
}
