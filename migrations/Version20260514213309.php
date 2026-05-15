<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260514213309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eleve ADD lieu VARCHAR(255) NOT NULL, ADD autorise_mere VARCHAR(255) NOT NULL, ADD autorise_pere VARCHAR(255) NOT NULL, ADD profession_mere VARCHAR(255) NOT NULL, ADD profession_pere VARCHAR(255) NOT NULL, ADD telephone_mere VARCHAR(255) NOT NULL, ADD autre_responsable VARCHAR(255) NOT NULL, ADD fonction VARCHAR(255) NOT NULL, ADD telephone_responsable VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eleve DROP lieu, DROP autorise_mere, DROP autorise_pere, DROP profession_mere, DROP profession_pere, DROP telephone_mere, DROP autre_responsable, DROP fonction, DROP telephone_responsable');
    }
}
