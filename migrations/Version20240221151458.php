<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221151458 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande ADD panier_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D5669B1EA FOREIGN KEY (panier_id_id) REFERENCES panier (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6EEAA67D5669B1EA ON commande (panier_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D5669B1EA');
        $this->addSql('DROP INDEX UNIQ_6EEAA67D5669B1EA ON commande');
        $this->addSql('ALTER TABLE commande DROP panier_id_id');
    }
}
