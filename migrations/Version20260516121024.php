<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260516121024 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE solde (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, eleve_id INT DEFAULT NULL, classe_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, avance DOUBLE PRECISION NOT NULL, reste DOUBLE PRECISION NOT NULL, createt_at DATE NOT NULL, typepaiement VARCHAR(255) NOT NULL, tranche VARCHAR(255) NOT NULL, INDEX IDX_66918367A76ED395 (user_id), INDEX IDX_66918367A6CC7B2 (eleve_id), INDEX IDX_669183678F5EA509 (classe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE solde ADD CONSTRAINT FK_66918367A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE solde ADD CONSTRAINT FK_66918367A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE solde ADD CONSTRAINT FK_669183678F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE solde DROP FOREIGN KEY FK_66918367A76ED395');
        $this->addSql('ALTER TABLE solde DROP FOREIGN KEY FK_66918367A6CC7B2');
        $this->addSql('ALTER TABLE solde DROP FOREIGN KEY FK_669183678F5EA509');
        $this->addSql('DROP TABLE solde');
    }
}
