<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160709000658 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, address_line1 VARCHAR(255) NOT NULL, address_line2 VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, postcode INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE counsellor (id INT AUTO_INCREMENT NOT NULL, office_id INT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, mobile INT NOT NULL, language VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, remember_token VARCHAR(100) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_D58EABE9FFA0C224 (office_id), UNIQUE INDEX counsellor_email_unique (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, iso VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, nicename VARCHAR(255) NOT NULL, iso3 VARCHAR(255) DEFAULT NULL, numcode INT DEFAULT NULL, phonecode INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE education_detail (id INT AUTO_INCREMENT NOT NULL, country_id INT NOT NULL, study_type VARCHAR(255) NOT NULL, study_name VARCHAR(255) NOT NULL, from_month INT NOT NULL, from_year INT NOT NULL, to_month INT NOT NULL, to_year INT NOT NULL, degree_awarded VARCHAR(255) NOT NULL, education_language VARCHAR(255) NOT NULL, institution_name VARCHAR(255) NOT NULL, institution_address VARCHAR(255) NOT NULL, institution_url VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employment_detail (id INT AUTO_INCREMENT NOT NULL, employer_name VARCHAR(255) NOT NULL, date_from DATE NOT NULL, date_to DATE NOT NULL, position_role VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, employer_url VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ielts_test_detail (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, country VARCHAR(255) NOT NULL, test_date DATE NOT NULL, test_report_no INT NOT NULL, overall_score DOUBLE PRECISION NOT NULL, listening DOUBLE PRECISION NOT NULL, reading DOUBLE PRECISION NOT NULL, writing DOUBLE PRECISION NOT NULL, speaking DOUBLE PRECISION NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE office (id INT AUTO_INCREMENT NOT NULL, addressLine1 VARCHAR(255) NOT NULL, addressLine2 VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, postcode INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passport (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, passport_number VARCHAR(255) NOT NULL, passport_issue_date DATE NOT NULL, passport_expiry_date DATE NOT NULL, passport_issuing_authority INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE password_reset (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, token VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, office_id INT NOT NULL, counsellor_id INT DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, username VARCHAR(255) DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(68) NOT NULL, mobile INT NOT NULL, gender VARCHAR(2) NOT NULL, nationality VARCHAR(255) DEFAULT NULL, language VARCHAR(255) DEFAULT NULL, dob DATE DEFAULT NULL, birth_country VARCHAR(255) DEFAULT NULL, birth_city VARCHAR(255) DEFAULT NULL, remember_token VARCHAR(100) DEFAULT NULL, is_active TINYINT(1) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_8D93D649FFA0C224 (office_id), UNIQUE INDEX user_username_unique (username), UNIQUE INDEX user_email_unique (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE counsellor ADD CONSTRAINT FK_D58EABE9FFA0C224 FOREIGN KEY (office_id) REFERENCES office (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649FFA0C224 FOREIGN KEY (office_id) REFERENCES office (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE counsellor DROP FOREIGN KEY FK_D58EABE9FFA0C224');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649FFA0C224');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE counsellor');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE education_detail');
        $this->addSql('DROP TABLE employment_detail');
        $this->addSql('DROP TABLE ielts_test_detail');
        $this->addSql('DROP TABLE office');
        $this->addSql('DROP TABLE passport');
        $this->addSql('DROP TABLE password_reset');
        $this->addSql('DROP TABLE user');
    }
}