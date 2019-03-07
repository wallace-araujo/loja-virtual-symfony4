<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190307224033 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tb_produto_order (id INT AUTO_INCREMENT NOT NULL, orderid_id INT DEFAULT NULL, produto_id_id INT DEFAULT NULL, preco NUMERIC(10, 2) NOT NULL, qtd INT NOT NULL, INDEX IDX_346D61926F90D45B (orderid_id), INDEX IDX_346D6192CDBF150D (produto_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tb_order (id INT AUTO_INCREMENT NOT NULL, userid INT NOT NULL, pagamento VARCHAR(100) NOT NULL, status VARCHAR(100) NOT NULL, data DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tb_produto_order ADD CONSTRAINT FK_346D61926F90D45B FOREIGN KEY (orderid_id) REFERENCES tb_order (id)');
        $this->addSql('ALTER TABLE tb_produto_order ADD CONSTRAINT FK_346D6192CDBF150D FOREIGN KEY (produto_id_id) REFERENCES tb_produtos (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tb_produto_order DROP FOREIGN KEY FK_346D61926F90D45B');
        $this->addSql('DROP TABLE tb_produto_order');
        $this->addSql('DROP TABLE tb_order');
    }
}
