<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250727081329 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE nom (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ecole DROP FOREIGN KEY FK_9786AACA76ED395');
        $this->addSql('DROP INDEX UNIQ_9786AACA76ED395 ON ecole');
        $this->addSql('ALTER TABLE ecole ADD sigle VARCHAR(255) NOT NULL, ADD type VARCHAR(255) NOT NULL, ADD code VARCHAR(255) NOT NULL, ADD adresses VARCHAR(255) NOT NULL, ADD telephone VARCHAR(255) NOT NULL, DROP user_id, DROP adresse, DROP arrondissement');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE nom');
        $this->addSql('ALTER TABLE ecole ADD user_id INT DEFAULT NULL, ADD adresse VARCHAR(255) NOT NULL, ADD arrondissement VARCHAR(255) NOT NULL, DROP sigle, DROP type, DROP code, DROP adresses, DROP telephone');
        $this->addSql('ALTER TABLE ecole ADD CONSTRAINT FK_9786AACA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9786AACA76ED395 ON ecole (user_id)');
    }
}
