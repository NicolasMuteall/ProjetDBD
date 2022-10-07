create database if not exists PROJETDBD CHARACTER SET utf8 COLLATE utf8_unicode_ci; 
use PROJETDBD;

CREATE TABLE COMPETENCES(
   ID_COMPETENCE INT not null auto_increment,
   NOM_COMPETENCE VARCHAR(50) NOT NULL,
   PRESENTATION_COMPT TEXT,
   REF_IMAGE_COMPT VARCHAR(50),
   PRIMARY KEY(ID_COMPETENCE)
)Engine = InnoDB CHARSET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE RANK_GE(
   NOM_RANK VARCHAR(50) not null,
   REF_IMAGE_RANK VARCHAR(50),
   PRIMARY KEY(NOM_RANK)
)Engine = InnoDB CHARSET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE PLATEFORME(
   NOM_PLATEFORME VARCHAR(50) not null,
   PRIMARY KEY(NOM_PLATEFORME)
)Engine = InnoDB CHARSET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE ROLE(
   NOM_ROLE VARCHAR(50) not null,
   PRIMARY KEY(NOM_ROLE)
)Engine = InnoDB CHARSET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE ADMIN(
   ID_ADMIN INT not null auto_increment,
   PSEUDO_ADMIN VARCHAR(50) NOT NULL,
   PWD_ADMIN VARCHAR(50) NOT NULL,
   PRIMARY KEY(ID_ADMIN)
)Engine = InnoDB CHARSET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE JOUEUR(
   ID_JOUEUR INT not null auto_increment,
   PSEUDO_JOUEUR VARCHAR(50) NOT NULL,
   PWD_JOUEUR VARCHAR(50) NOT NULL,
   MAIL_JOUEUR VARCHAR(100) NOT NULL,
   NOMBRES_HEURES INT,
   PSEUDO_PLATEFORME VARCHAR(50),
   REF_IMAGE_JOUEUR VARCHAR(50),
   ID_COMPETENCE1 INT NOT NULL,
   ID_COMPETENCE2 INT NOT NULL,
   ID_COMPETENCE3 INT NOT NULL,
   ID_COMPETENCE4 INT NOT NULL,
   RANK_JOUEUR VARCHAR(50) NOT NULL,
   RANK_MINIMUM_RECHERCHE VARCHAR(50) NOT NULL,
   NOM_PLATEFORME VARCHAR(50) NOT NULL,
   NOM_ROLE VARCHAR(50) NOT NULL,
   PRIMARY KEY(ID_JOUEUR)
)Engine = InnoDB CHARSET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE PERSONNAGE(
   ID_PERSONNAGE INT,
   NOM_PERSO VARCHAR(50) NOT NULL,
   PRESENTATION_PERSO TEXT,
   RESUME_PERSO TEXT,
   DATE_SORTIE_PERSO DATE,
   REF_IMAGE_PERSO VARCHAR(50),
   ID_COMPETENCE1 INT NOT NULL,
   ID_COMPETENCE2 INT NOT NULL,
   ID_COMPETENCE3 INT NOT NULL,
   NOM_ROLE VARCHAR(50) NOT NULL,
   PRIMARY KEY(ID_PERSONNAGE)
)Engine = InnoDB CHARSET utf8 COLLATE utf8_unicode_ci;

/*--------------------------CONTRAINTES TABLE JOUEUR----------------------------------------*/

alter table JOUEUR add constraint FK_JOUEUR_UTILISE_COMPETENCE1 foreign key (ID_COMPETENCE1)
      references COMPETENCES (ID_COMPETENCE) on delete cascade on update cascade;
alter table JOUEUR add constraint FK_JOUEUR_UTILISE_COMPETENCE2 foreign key (ID_COMPETENCE2)
      references COMPETENCES (ID_COMPETENCE) on delete cascade on update cascade;
alter table JOUEUR add constraint FK_JOUEUR_UTILISE_COMPETENCE3 foreign key (ID_COMPETENCE3)
      references COMPETENCES (ID_COMPETENCE) on delete cascade on update cascade;
alter table JOUEUR add constraint FK_JOUEUR_UTILISE_COMPETENCE4 foreign key (ID_COMPETENCE4)
      references COMPETENCES (ID_COMPETENCE) on delete cascade on update cascade;
alter table JOUEUR add constraint FK_JOUEUR_CLASSE_RANK foreign key (RANK_JOUEUR)
      references RANK_GE (NOM_RANK) on delete cascade on update cascade;
alter table JOUEUR add constraint FK_JOUEUR_RECHERCHE_RANK foreign key (RANK_MINIMUM_RECHERCHE)
      references RANK_GE (NOM_RANK) on delete cascade on update cascade;
alter table JOUEUR add constraint FK_JOUEUR_JOUE_PLATEFORME foreign key (NOM_PLATEFORME)
      references PLATEFORME (NOM_PLATEFORME) on delete cascade on update cascade;
alter table JOUEUR add constraint FK_JOUEUR_JOUE_ROLE foreign key (NOM_ROLE)
      references ROLE (NOM_ROLE) on delete cascade on update cascade;

/*--------------------------CONTRAINTES TABLE PERSONNAGE----------------------------------------*/

alter table PERSONNAGE add constraint FK_PERSONNAGE_UTILISE_COMPETENCE1 foreign key (ID_COMPETENCE1)
      references COMPETENCES (ID_COMPETENCE) on delete cascade on update cascade;
alter table PERSONNAGE add constraint FK_PERSONNAGE_UTILISE_COMPETENCE2 foreign key (ID_COMPETENCE2)
      references COMPETENCES (ID_COMPETENCE) on delete cascade on update cascade;
alter table PERSONNAGE add constraint FK_PERSONNAGE_UTILISE_COMPETENCE3 foreign key (ID_COMPETENCE3)
      references COMPETENCES (ID_COMPETENCE) on delete cascade on update cascade;
alter table PERSONNAGE add constraint FK_PERSONNAGE_JOUE_ROLE foreign key (NOM_ROLE)
      references ROLE (NOM_ROLE) on delete cascade on update cascade;
