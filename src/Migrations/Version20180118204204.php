<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180118204204 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, stage_id INT DEFAULT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, comment VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_E33BD3B82298D193 (stage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE configuration (id INT AUTO_INCREMENT NOT NULL, logo VARCHAR(255) NOT NULL, adresse_fr VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, adresse_en VARCHAR(255) DEFAULT NULL, phone_en VARCHAR(255) DEFAULT NULL, email_en VARCHAR(255) DEFAULT NULL, phone_ar VARCHAR(255) DEFAULT NULL, email_ar VARCHAR(255) DEFAULT NULL, adresse_ar VARCHAR(255) DEFAULT NULL, presentation_fr VARCHAR(255) NOT NULL, presentation_en VARCHAR(255) DEFAULT NULL, presentation_ar VARCHAR(255) DEFAULT NULL, facebook_link VARCHAR(255) DEFAULT NULL, linkedin_link VARCHAR(255) DEFAULT NULL, instagram_link VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, subject VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, ceated_at DATETIME NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, title_fr VARCHAR(255) NOT NULL, content_fr VARCHAR(255) NOT NULL, title_en VARCHAR(255) DEFAULT NULL, content_en VARCHAR(255) DEFAULT NULL, title_ar VARCHAR(255) DEFAULT NULL, content_ar VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, active TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gallery (id INT AUTO_INCREMENT NOT NULL, label_fr VARCHAR(255) NOT NULL, label_en VARCHAR(255) DEFAULT NULL, label_ar VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, `order` INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, title_fr VARCHAR(255) NOT NULL, content_fr VARCHAR(255) NOT NULL, title_en VARCHAR(255) DEFAULT NULL, content_en VARCHAR(255) DEFAULT NULL, title_ar VARCHAR(255) DEFAULT NULL, content_ar VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partner (id INT AUTO_INCREMENT NOT NULL, label_fr VARCHAR(255) NOT NULL, label_en VARCHAR(255) DEFAULT NULL, label_ar VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE presse (id INT AUTO_INCREMENT NOT NULL, title_fr VARCHAR(255) NOT NULL, content_fr VARCHAR(255) NOT NULL, title_en VARCHAR(255) DEFAULT NULL, content_en VARCHAR(255) DEFAULT NULL, title_ar VARCHAR(255) DEFAULT NULL, content_ar VARCHAR(255) DEFAULT NULL, media VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE slider (id INT AUTO_INCREMENT NOT NULL, text_fr VARCHAR(255) DEFAULT NULL, text_en VARCHAR(255) DEFAULT NULL, text_ar VARCHAR(255) DEFAULT NULL, `order` INT NOT NULL, image VARCHAR(255) DEFAULT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stage (id INT AUTO_INCREMENT NOT NULL, title_fr VARCHAR(255) NOT NULL, content_fr VARCHAR(255) NOT NULL, title_en VARCHAR(255) DEFAULT NULL, content_en VARCHAR(255) DEFAULT NULL, title_ar VARCHAR(255) DEFAULT NULL, content_ar VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, expired_at DATETIME NOT NULL, duration VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, firstname_fr VARCHAR(255) NOT NULL, lastname_fr VARCHAR(255) NOT NULL, decription_fr VARCHAR(255) NOT NULL, firstname_en VARCHAR(255) DEFAULT NULL, lastname_en VARCHAR(255) DEFAULT NULL, decription_en VARCHAR(255) DEFAULT NULL, firstname_ar VARCHAR(255) DEFAULT NULL, lastname_ar VARCHAR(255) DEFAULT NULL, decription_ar VARCHAR(255) DEFAULT NULL, image VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B82298D193 FOREIGN KEY (stage_id) REFERENCES stage (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B82298D193');
        $this->addSql('DROP TABLE candidature');
        $this->addSql('DROP TABLE configuration');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE gallery');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE partner');
        $this->addSql('DROP TABLE presse');
        $this->addSql('DROP TABLE slider');
        $this->addSql('DROP TABLE stage');
        $this->addSql('DROP TABLE team');
        $this->addSql('DROP TABLE user');
    }
}
