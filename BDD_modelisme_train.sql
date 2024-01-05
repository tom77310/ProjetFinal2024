CREATE TABLE Utilisateur(
   id_utilisateur VARCHAR(50),
   nom_utilisateur VARCHAR(50),
   prenom_utilisateur VARCHAR(50),
   date_naissance_utilisateur DATE NOT NULL,
   civilité_utilisateur VARCHAR(10),
   adresse_utilisateur VARCHAR(100),
   cp_utilisateur VARCHAR(5),
   ville_utilisateur TEXT,
   tel_utilisateur VARCHAR(10),
   mail_utilisateur VARCHAR(100),
   login_utilisateur VARCHAR(100) NOT NULL,
   mdp_utilisateur VARCHAR(100) NOT NULL,
   PRIMARY KEY(id_utilisateur),
   UNIQUE(login_utilisateur)
);

CREATE TABLE Commande(
   id_commande INT NOT NULL AUTO-INCREMENT,
   date_commande DATE,
   prix_unitaire VARCHAR(50),
   quantité_commande VARCHAR(50),
   id_utilisateur VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_commande),
   FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE Categorie(
   id_categorie VARCHAR(50),
   nom_categorie VARCHAR(50),
   PRIMARY KEY(id_categorie)
);

CREATE TABLE role(
   id_role VARCHAR(50),
   nom_role VARCHAR(150),
   id_utilisateur VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_role),
   FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE facture(
   id_facture VARCHAR(50),
   numero_facture DECIMAL(15,2),
   nom_facture VARCHAR(50),
   id_commande_1_1 VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_facture),
   UNIQUE(numero_facture),
   FOREIGN KEY(id_commande) REFERENCES Commande(id_commande)
);

CREATE TABLE Produit(
   id_produit VARCHAR(50),
   prix_produit CURRENCY,
   detail_produit VARCHAR(150),
   nom_produit VARCHAR(50),
   quantité_produit SMALLINT NOT NULL,
   id_categorie VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_produit),
   FOREIGN KEY(id_categorie) REFERENCES Categorie(id_categorie)
);

CREATE TABLE acheter(
   id_utilisateur INT,
   id_produit INT,
   PRIMARY KEY(id_utilisateur, id_produit),
   FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
   FOREIGN KEY(id_produit) REFERENCES Produit(id_produit)
);

CREATE TABLE Concerner(
   id_produit INT,
   id_commande INT,
   prix_total INT,
   PRIMARY KEY(id_produit, id_commande),
   FOREIGN KEY(id_produit) REFERENCES Produit(id_produit),
   FOREIGN KEY(id_commande) REFERENCES Commande(id_commande)
);

ALTER TABLE Commande ADD FOREIGN KEY (id_utilisateur) REFERENCES utilisateur (id_utilisateur);