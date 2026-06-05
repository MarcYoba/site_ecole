<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260605051330 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tenue (id INT AUTO_INCREMENT NOT NULL, eleve_id INT DEFAULT NULL, user_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, createt_at DATE NOT NULL, INDEX IDX_EB51486DA6CC7B2 (eleve_id), INDEX IDX_EB51486DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tenue ADD CONSTRAINT FK_EB51486DA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE tenue ADD CONSTRAINT FK_EB51486DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tenue DROP FOREIGN KEY FK_EB51486DA6CC7B2');
        $this->addSql('ALTER TABLE tenue DROP FOREIGN KEY FK_EB51486DA76ED395');
        $this->addSql('DROP TABLE tenue');
    }
}
