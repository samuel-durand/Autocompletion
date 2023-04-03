CREATE DATABASE autocompletion;
USE autocompletion;

CREATE TABLE animaux (
   id INT PRIMARY KEY,
   nom VARCHAR(255) NOT NULL,
   espece VARCHAR(255) NOT NULL,
   habitat VARCHAR(255) NOT NULL
);

INSERT INTO animaux (id, nom, espece, habitat) VALUES
(1, 'Tigre', 'Panthera tigris', 'Forêt et savane'),
(2, 'Lion', 'Panthera leo', 'Savane'),
(3, 'Girafe', 'Giraffa camelopardalis', 'Savane'),
(4, 'Ours polaire', 'Ursus maritimus', 'Banquise'),
(5, 'Léopard', 'Panthera pardus', 'Forêt et savane'),
(6, 'Gorille', 'Gorilla gorilla', 'Forêt tropicale'),
(7, 'Zèbre', 'Equus quagga', 'Savane'),
(8, 'Singe hurleur', 'Alouatta caraya', 'Forêt tropicale'),
(9, 'Rhino', 'Ceratotherium simum', 'Savane'),
(10, 'Panda géant', 'Ailuropoda melanoleuca', 'Forêt'),
(11, 'Kangourou', 'Macropus rufus', 'Forêt'),
(12, 'Orang-outan', 'Pongo pygmaeus', 'Forêt tropicale'),
(13, 'Loup', 'Canis lupus', 'Forêt et toundra'),
(14, 'Crocodile', 'Crocodylus niloticus', 'Rivière et marais'),
(15, 'Chimpanzé', 'Pan troglodytes', 'Forêt tropicale'),
(16, 'Panthère', 'Panthera pardus', 'Forêt et savane'),
(17, 'Aigle royal', 'Aquila chrysaetos', 'Montagnes et falaises'),
(18, 'Loutre', 'Lutra lutra', 'Rivières et lacs'),
(19, 'Poulet', 'Gallus gallus domesticus', 'Ferme'),
(20, 'Renard', 'Vulpes vulpes', 'Forêt et prairie');
