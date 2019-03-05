<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190305161249 extends AbstractMigration
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
        $this->addSql('CREATE TABLE tb_produtos (id INT AUTO_INCREMENT NOT NULL, caracteristicas_id INT DEFAULT NULL, nome VARCHAR(255) NOT NULL, imagem LONGTEXT NOT NULL, preco NUMERIC(10, 2) NOT NULL, descricao LONGTEXT NOT NULL, datecreate DATETIME NOT NULL, INDEX IDX_3B42312BB9087426 (caracteristicas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categoria_produtos (tb_produtos_id INT NOT NULL, tb_categorias_id INT NOT NULL, INDEX IDX_3289C525CD64B04 (tb_produtos_id), INDEX IDX_3289C525242DCB27 (tb_categorias_id), PRIMARY KEY(tb_produtos_id, tb_categorias_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tb_categorias (id INT AUTO_INCREMENT NOT NULL, nome_categoria VARCHAR(255) NOT NULL, descricao LONGTEXT NOT NULL, datecreate DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tb_endereco (id INT AUTO_INCREMENT NOT NULL, rua VARCHAR(150) NOT NULL, numero VARCHAR(50) NOT NULL, bairro VARCHAR(50) NOT NULL, cep VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tb_produtos ADD CONSTRAINT FK_3B42312BB9087426 FOREIGN KEY (caracteristicas_id) REFERENCES tb_caracteristicas (id)');
        $this->addSql('ALTER TABLE categoria_produtos ADD CONSTRAINT FK_3289C525CD64B04 FOREIGN KEY (tb_produtos_id) REFERENCES tb_produtos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categoria_produtos ADD CONSTRAINT FK_3289C525242DCB27 FOREIGN KEY (tb_categorias_id) REFERENCES tb_categorias (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tb_produtos DROP FOREIGN KEY FK_3B42312BB9087426');
        $this->addSql('ALTER TABLE categoria_produtos DROP FOREIGN KEY FK_3289C525CD64B04');
        $this->addSql('ALTER TABLE categoria_produtos DROP FOREIGN KEY FK_3289C525242DCB27');
        $this->addSql('DROP TABLE tb_pedidos');
        $this->addSql('DROP TABLE tb_caracteristicas');
        $this->addSql('DROP TABLE tb_produtos');
        $this->addSql('DROP TABLE categoria_produtos');
        $this->addSql('DROP TABLE tb_categorias');
        $this->addSql('DROP TABLE tb_endereco');
    }
}
