<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190305043129 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE categoria_produtos (tb_produtos_id INT NOT NULL, tb_categorias_id INT NOT NULL, INDEX IDX_3289C525CD64B04 (tb_produtos_id), INDEX IDX_3289C525242DCB27 (tb_categorias_id), PRIMARY KEY(tb_produtos_id, tb_categorias_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categoria_produtos ADD CONSTRAINT FK_3289C525CD64B04 FOREIGN KEY (tb_produtos_id) REFERENCES tb_produtos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categoria_produtos ADD CONSTRAINT FK_3289C525242DCB27 FOREIGN KEY (tb_categorias_id) REFERENCES tb_categorias (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tb_produtos DROP categorias');
        $this->addSql('ALTER TABLE tb_categorias DROP FOREIGN KEY FK_E70360FF65691519');
        $this->addSql('DROP INDEX IDX_E70360FF65691519 ON tb_categorias');
        $this->addSql('ALTER TABLE tb_categorias DROP produtos_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE categoria_produtos');
        $this->addSql('ALTER TABLE tb_categorias ADD produtos_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tb_categorias ADD CONSTRAINT FK_E70360FF65691519 FOREIGN KEY (produtos_id) REFERENCES tb_produtos (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_E70360FF65691519 ON tb_categorias (produtos_id)');
        $this->addSql('ALTER TABLE tb_produtos ADD categorias INT NOT NULL');
    }
}
