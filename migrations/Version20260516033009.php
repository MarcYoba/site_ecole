<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260516033009 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseignant ADD user_id INT DEFAULT NULL, ADD createt_at DATE NOT NULL');
        $this->addSql('ALTER TABLE enseignant ADD CONSTRAINT FK_81A72FA1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_81A72FA1A76ED395 ON enseignant (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseignant DROP FOREIGN KEY FK_81A72FA1A76ED395');
        $this->addSql('DROP INDEX IDX_81A72FA1A76ED395 ON enseignant');
        $this->addSql('ALTER TABLE enseignant DROP user_id, DROP createt_at');
    }
}
