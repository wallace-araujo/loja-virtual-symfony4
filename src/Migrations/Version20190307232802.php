<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190307232802 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tb_produto_order DROP FOREIGN KEY FK_346D61926F90D45B');
        $this->addSql('ALTER TABLE tb_produto_order DROP FOREIGN KEY FK_346D6192CDBF150D');
        $this->addSql('DROP INDEX IDX_346D6192CDBF150D ON tb_produto_order');
        $this->addSql('DROP INDEX IDX_346D61926F90D45B ON tb_produto_order');
        $this->addSql('ALTER TABLE tb_produto_order ADD orderid INT NOT NULL, ADD produto_id INT NOT NULL, DROP orderid_id, DROP produto_id_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tb_produto_order ADD orderid_id INT DEFAULT NULL, ADD produto_id_id INT DEFAULT NULL, DROP orderid, DROP produto_id');
        $this->addSql('ALTER TABLE tb_produto_order ADD CONSTRAINT FK_346D61926F90D45B FOREIGN KEY (orderid_id) REFERENCES tb_order (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE tb_produto_order ADD CONSTRAINT FK_346D6192CDBF150D FOREIGN KEY (produto_id_id) REFERENCES tb_produtos (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_346D6192CDBF150D ON tb_produto_order (produto_id_id)');
        $this->addSql('CREATE INDEX IDX_346D61926F90D45B ON tb_produto_order (orderid_id)');
    }
}
