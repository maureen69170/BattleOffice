<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200728120823 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE clients_livraison ADD client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE clients_livraison ADD CONSTRAINT FK_F7421E5319EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F7421E5319EB6921 ON clients_livraison (client_id)');
        $this->addSql('ALTER TABLE product CHANGE quantit quantit� INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE clients_livraison DROP FOREIGN KEY FK_F7421E5319EB6921');
        $this->addSql('DROP INDEX UNIQ_F7421E5319EB6921 ON clients_livraison');
        $this->addSql('ALTER TABLE clients_livraison DROP client_id');
        $this->addSql('ALTER TABLE product CHANGE quantit� quantit INT DEFAULT NULL');
    }
}
