-- MySQL dump 10.13  Distrib 8.0.12, for macos10.13 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_lojavirtual
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caracteristicas_id` int(11) DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `datecreate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3B42312BB9087426` (`caracteristicas_id`),
  CONSTRAINT `FK_3B42312BB9087426` FOREIGN KEY (`caracteristicas_id`) REFERENCES `tb_caracteristicas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_produtos`
--

LOCK TABLES `tb_produtos` WRITE;
/*!40000 ALTER TABLE `tb_produtos` DISABLE KEYS */;
INSERT INTO `tb_produtos` VALUES (1,1,'Rack Retro Weimar','https://staticmobly.akamaized.net/p/Mobly-Rack-RetrC3B4-Weimar-Preto-162-cm-4287-020834-1-zoom.jpg',280.90,'O Rack Retrô Weimar é a peça que faltava para deixar tudo arrumadinho do jeito que ','2019-03-05 13:16:26'),(2,1,'Cadeira de Jantar Ella Natural e Daple','https://staticmobly.akamaized.net/p/Mobly-Cadeira-de-Jantar-Ella-Natural-e-Daple-6709-130084-1-zoom.jpg',324.99,'Quer deixar a sua sala de jantar ou cozinha com uma decoração contemporânea, moderna e sofisticada? Então esta maravilhosa Cadeira de Jantar Ella é a escolha perfeita para complementar a sua casa! A peça foi projetada para oferecer o máximo de conforto para a sua família e amigos durante as refeições. Demais, não é?','2019-03-05 13:16:28'),(3,1,'Puff Redondo Tecido Pitangui Telha','https://staticmobly.akamaized.net/p/m-collection-Puff-Redondo-Tecido-Pitangui-Telha-8609-29887-1-zoom.jpg',102.99,'Um lindo puff redondo para esquentar o teu outono/inverno. Além de trazer mais beleza e descontração ao seu quarto ou sala, ele é super confortável e macio. Perfeito para passar horas enrolada no edredon, curtindo um filme e tomando chocolate quente.\n\nO seu formato redondo é diferenciado devido a estampa graciosa de folhas secas. Para garantir o aconchego ele é preenchido com flocos de isopor. Confeccionado em couro sintético, tecido de alta resistência, e feito com costura tripla, ele garante mais segurança e durabilidade.','2019-03-05 13:16:29'),(4,1,'Plafon Lua Alumínio Escovado 1 Lâmpada Pavilonis','https://staticmobly.akamaized.net/p/Pavilonis-Plafon-Lua-AlumC3ADnio-Escovado-1-LC3A2mpada-Pavilonis-5179-950991-1-zoom.jpg',70.90,'Que tal contar com uma peça que proporciona uma iluminação agradável e ainda decora qualquer ambiente da sua casa com simplicidade e estilo? O Plafon Lua possui um design clean que deixa o espaço mais acolhedor e receptivo. Bom, né? Agora é só levar! ;)','2019-03-05 13:16:29'),(5,1,'Spot 302 Escovado 2 Lâmpadas Bivolt','https://staticmobly.akamaized.net/p/Jd-Molina-Spot-302-Escovado-2-LC3A2mpadas-Bivolt-4140-261122-1-zoom.jpg',97.00,'A iluminação correta pode salvar ou arruinar tudo. Por isso você deve contar com o Spot 302. Com ele, seu lar vai ficar muito mais iluminado e bonito. Já o imaginou na área externa ou qualquer outro ambiente da sua casa?. Incrível, né? Um item indispensável para dar aquela repaginada no seu espaço.','2019-03-05 13:16:30'),(6,1,'Mesa de Apoio Londres Redonda 60x60 Vermelha','https://staticmobly.akamaized.net/p/Wood-Prime-Mesa-de-Apoio-Londres-Redonda-60x60C2A0Vermelha-8316-688274-1-zoom.jpg',329.90,'Minimalista e com um estilo moderno, a Mesa de Apoio Londres tem todos os requisitos para compor o ambiente com delicadeza e elegância. É feita de madeira de eucalipto e MDF prolongando sua durabilidade.','2019-03-05 13:16:30'),(7,1,'Conjunto Mesas Ninho Lateral de Apoio Centro Laqueada - Azul','https://staticmobly.akamaized.net/p/Formalivre-Conjunto-Mesas-Ninho-Lateral-de-Apoio-Centro-Laqueada---Azul-0748-704742-1-zoom.jpg',458.90,'Peças com design exclusivo para Otimização do seu espaço.;O móvel se adapta bem em ambientes como, Sala de Estar, Dormitórios e Escritórios. ;Móvel alto Padrão de Acabamento. ;','2019-03-05 13:16:31'),(8,1,'Rack Wooden Preto e Marrom 120 cm','https://staticmobly.akamaized.net/p/Mobly-Rack-Wooden-Preto-e-Marrom-120-cm-3411-105115-1-zoom.jpg',339.99,'O que acha da decoração industrial? O Rack Wooden é uma boa opção para quem pensa em abusar desse estilo. A combinação entre tubos pretos e a madeira em evidência é um traço marcante da tendência e funciona também como destaque em decorações onde o estilo mais urbano predomina, afinal, na sua casa, o especialista em decoração é você.','2019-03-05 13:16:31'),(9,1,'Mesa de Jantar Redonda Eames Eiffel Preta 120 cm','https://staticmobly.akamaized.net/p/Mobly-Mesa-de-Jantar-Redonda-Eames-Eiffel-Preta-120-cm-9472-282205-1-zoom.jpg',679.90,'Com a correria do dia a dia, a rotina pede móveis práticos e que otimizam o espaço da sua casa, não é mesmo? Uma opção para os momentos de confraternização é a Mesa de Jantar Eames. Ela possui um lindo design minimalista com pés alongados e extremamente charmosos. O formato redondo é bem fácil de inserir na decoração e dá para criar desde um lar-style básico e enxuto ao mais extravagante. A escolha de como você vai personalizar fica por sua conta!','2019-03-05 13:16:32'),(10,1,'Buffet Opera 4 PT Off White e Freijo Touch','https://staticmobly.akamaized.net/p/Imcal-Buffet-Opera-4-PT-Off-White-e-Freijo-Touch-9056-921245-1-zoom.jpg',582.90,'Lindo este Buffet Opera, não é? Toda a sofisticação está na imponente estrutura e nas cores off white e freijó, dando um aspecto contemporâneo ao móvel. Ideal para acomodar diversos objetos em seus compartimentos internos e no tampo, você pode usá-lo para organizar e decorar o ambiente fazendo as combinações que mais têm a ver com seu gosto. Quer maneira melhor de ter um lar-style tão incrível?','2019-03-05 13:16:32'),(11,1,'Cobre Leito Dual Color Preto E Branco Queen 03 Peças','https://staticmobly.akamaized.net/p/Dourados-Enxovais-Cobre-Leito-Dual-Color-Preto-E-Branco-Queen-03-PeC3A7as-1893-327135-1-zoom.jpg',109.90,'A linha 100% poliéster Dourados Enxovais tem um toque suave e macio. O tecido caracteriza-se por ser muito leve, confortável, sedoso, com secagem rápida e ótimo caimento. Vem trazendo estilo para a decoração de seu quarto, ficará de ótimo bom gosto e elegância. Confira!\n\n01 Cobre leito 2,20m x 2,60m\n02 porta travesseiro 65cm x 45cm\n\nComposição: \ntecido superior: 100% poliéster\ntecido inferior: 100% poliéster\nporta travesseiro: 100% poliéster\nenchimento: 100% poliéster\n\ninstruções de lavagem:\nnas primeiras lavagens, não as misture com peças de outras cores;\nenxágüe as peças de forma a retirar todo o sabão;','2019-03-05 13:16:33'),(12,1,'Roupão P Flannel Extra Macio Corttex - Rosa Antigo','https://staticmobly.akamaized.net/p/Corttex-RoupC3A3o-P-Flannel-Extra-Macio-Corttex---Rosa-Antigo-2399-044464-1-zoom.jpg',79.90,'Não há nada melhor do que um banho relaxante sempre à disposição dos melhores acessórios! Com esse roupão Corttex você sentirá todo o conforto e maciez sobre a pele. Ele possui sua confecção em poliéster e adquire faixa de amarração na altura da cintura, além um lindo bolso em sua frente, para você sentir ainda mais conforto e maciez com esse lindo roupão! 100% poliéster ','2019-03-05 13:16:33'),(13,1,'Cama Infantil com Capitonê Vitor l e Cama Auxiliar Branca e Nogueira','https://staticmobly.akamaized.net/p/Tigus-Baby-Cama-Infantil-com-CapitonC3AA-Vitor-l-e-Cama-Auxiliar-Branca-e-Nogueira-6530-608685-1-zoom.jpg',679.90,'Chegou a hora de trocar o berço do seu filho por uma cama? Olha só que dica espetacular o modelo Vitor! Trabalhada em um design charmoso, a peça tem extremidades arredondadas que não só valorizam o aspecto visual como também oferecem mais segurança para o uso da criança. E por falar em aparência e utilidade, reparou que ela possui aplicação de capitonê nas laterais e cama auxiliar? São detalhes que fazem toda a diferença, assim como as cores branca e nogueira que são sofisticadas e fáceis de utilizar no estilo de decoração que você quiser ;)','2019-03-05 13:16:34'),(14,1,'Quarto Infantil Unissex Decorado Cabana','https://staticmobly.akamaized.net/p/Mobly-Quarto-Infantil-Unissex-Decorado-Cabana-1010-745415-1-bundle-zoom.jpg',529.90,'Querendo renovar por completo um cômodo da sua casa? Então você vai se apaixonar pelo Quarto Infantil Decorado Cabana! Especialmente charmoso, ele possui tudo que você precisa para ter um ambiente convidativo e atraente. Aproveite!','2019-03-05 13:16:34'),(15,1,'Escorregador Para Brinquedoteca Indoor - Casatema','https://staticmobly.akamaized.net/p/Casatema-Escorregador-Para-Brinquedoteca-Indoor---Casatema-4569-184775-1-zoom.jpg',364.90,'- Os objetos que ambientam as fotos não acompanham o produto.\n\n- Verifique as dimensões do produto e certifique-se que o percurso que ele fará até o local de uso permite sua passagem. Nós não nos responsabilizamos por transporte de produtos, caso não caibam em elevadores, acima de três lances de escada e não cabendo na passagem das escadas, por içamentos ou desmontagens de produtos. Quaisquer despesas deste tipo ficam a cargo do cliente.\n\n- Favor verificar se os pés estão dentro do forro inferior do produto.\n\n- Fique atento, nossas cores podem sofrer alterações dependendo do seu monitor.','2019-03-05 13:16:35');
/*!40000 ALTER TABLE `tb_produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-07 20:42:34
