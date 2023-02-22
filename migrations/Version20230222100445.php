<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222100445 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA14A76ED395');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA76ED395');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, mail LONGTEXT NOT NULL, adress VARCHAR(255) NOT NULL, telephone_number VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, profil_picture VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, full_name VARCHAR(50) DEFAULT NULL, email VARCHAR(180) NOT NULL, subject VARCHAR(100) DEFAULT NULL, message LONGTEXT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC567F5183');
        $this->addSql('DROP INDEX IDX_67F068BCA76ED395 ON commentaire');
        $this->addSql('DROP INDEX IDX_67F068BC567F5183 ON commentaire');
        $this->addSql('ALTER TABLE commentaire ADD clients_id INT NOT NULL, DROP user_id, DROP film_id');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCAB014612 FOREIGN KEY (clients_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCAB014612 ON commentaire (clients_id)');
        $this->addSql('ALTER TABLE film CHANGE duree durée TIME NOT NULL');
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA14567F5183');
        $this->addSql('DROP INDEX IDX_CFBDFA14A76ED395 ON note');
        $this->addSql('DROP INDEX IDX_CFBDFA14567F5183 ON note');
        $this->addSql('ALTER TABLE note ADD client_id INT NOT NULL, DROP user_id, DROP film_id');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA1419EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_CFBDFA1419EB6921 ON note (client_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCAB014612');
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA1419EB6921');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, roles JSON NOT NULL, password LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, first_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, last_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, address LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, telephone_number VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, highschool VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP INDEX IDX_CFBDFA1419EB6921 ON note');
        $this->addSql('ALTER TABLE note ADD user_id INT DEFAULT NULL, ADD film_id INT DEFAULT NULL, DROP client_id');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_CFBDFA14A76ED395 ON note (user_id)');
        $this->addSql('CREATE INDEX IDX_CFBDFA14567F5183 ON note (film_id)');
        $this->addSql('DROP INDEX IDX_67F068BCAB014612 ON commentaire');
        $this->addSql('ALTER TABLE commentaire ADD user_id INT DEFAULT NULL, ADD film_id INT DEFAULT NULL, DROP clients_id');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_67F068BCA76ED395 ON commentaire (user_id)');
        $this->addSql('CREATE INDEX IDX_67F068BC567F5183 ON commentaire (film_id)');
        $this->addSql('ALTER TABLE film CHANGE durée duree TIME NOT NULL');
    }
}
