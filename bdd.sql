CREATE TABLE `client` (
  `id_client` int(16) AUTO_INCREMENT NOT NULL,
  `nom` varchar(42) NOT NULL,
  `prenom` varchar(42) NOT NULL,
  `age` varchar(42) NOT NULL,
  `email` varchar(42) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ville` varchar(42) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `evenement` (
  `id_event` int(16) AUTO_INCREMENT NOT NULL,
  `nom` varchar(42) NOT NULL,
  `description` varchar(42) NOT NULL,
  `date_creation` datetime DEFAULT current_timestamp(),
  `date_modification` datetime DEFAULT current_timestamp(),
  `image` varchar(42) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `historique_client` (
  `id_client` int(16) NOT NULL,
  `id_event` int(16) NOT NULL,
  `date_modification` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `historique_client` ADD PRIMARY KEY (`id_client`,`id_event`,`date_modification`);
ALTER TABLE `historique_client` ADD KEY `id_event` (`id_event`);
ALTER TABLE `evenement` MODIFY `id_event` int(16) NOT NULL AUTO_INCREMENT;
ALTER TABLE `client` MODIFY `id_client` int(16) NOT NULL AUTO_INCREMENT;
ALTER TABLE `historique_client` ADD CONSTRAINT `historique_client_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id_event`);
ALTER TABLE `historique_client` ADD CONSTRAINT `historique_client_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);
