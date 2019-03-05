<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190305041110 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tb_pedidos (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tb_caracteristicas (id INT AUTO_INCREMENT NOT NULL, titulocaracteristicas VARCHAR(255) NOT NULL, textcaracteristicas LONGTEXT NOT NULL, datecreate DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tb_produtos (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, imagem LONGTEXT NOT NULL, preco NUMERIC(10, 2) NOT NULL, descricao LONGTEXT NOT NULL, categorias INT NOT NULL, caracteristicas INT NOT NULL, datecreate DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tb_categorias (id INT AUTO_INCREMENT NOT NULL, produtos_id INT DEFAULT NULL, nome_categoria VARCHAR(255) NOT NULL, descricao LONGTEXT NOT NULL, datecreate DATETIME NOT NULL, INDEX IDX_E70360FF65691519 (produtos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tb_endereco (id INT AUTO_INCREMENT NOT NULL, rua VARCHAR(150) NOT NULL, numero VARCHAR(50) NOT NULL, bairro VARCHAR(50) NOT NULL, cep VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tb_categorias ADD CONSTRAINT FK_E70360FF65691519 FOREIGN KEY (produtos_id) REFERENCES tb_produtos (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tb_categorias DROP FOREIGN KEY FK_E70360FF65691519');
        $this->addSql('DROP TABLE tb_pedidos');
        $this->addSql('DROP TABLE tb_caracteristicas');
        $this->addSql('DROP TABLE tb_produtos');
        $this->addSql('DROP TABLE tb_categorias');
        $this->addSql('DROP TABLE tb_endereco');
    }
}
