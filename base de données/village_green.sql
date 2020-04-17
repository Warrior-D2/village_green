/*==============================================================*/
/* DBMS name:      Microsoft SQL Server 2008                    */
/* Created on:     06/03/2020 11:09:57                          */
/*==============================================================*/


if exists (select 1
            from  sysobjects
           where  id = object_id('CATEGORIE_CLIENT')
            and   type = 'U')
   drop table CATEGORIE_CLIENT
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('CLIENTS')
            and   name  = 'AVOIR_FK'
            and   indid > 0
            and   indid < 255)
   drop index CLIENTS.AVOIR_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('CLIENTS')
            and   name  = 'ASSOCIER_FK'
            and   indid > 0
            and   indid < 255)
   drop index CLIENTS.ASSOCIER_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('CLIENTS')
            and   type = 'U')
   drop table CLIENTS
go

if exists (select 1
            from  sysobjects
           where  id = object_id('COMMANDES')
            and   type = 'U')
   drop table COMMANDES
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('EMPLOYES')
            and   name  = 'ATTRIBUER_FK'
            and   indid > 0
            and   indid < 255)
   drop index EMPLOYES.ATTRIBUER_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('EMPLOYES')
            and   type = 'U')
   drop table EMPLOYES
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('FOURNIR')
            and   name  = 'FOURNIR2_FK'
            and   indid > 0
            and   indid < 255)
   drop index FOURNIR.FOURNIR2_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('FOURNIR')
            and   name  = 'FOURNIR_FK'
            and   indid > 0
            and   indid < 255)
   drop index FOURNIR.FOURNIR_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('FOURNIR')
            and   type = 'U')
   drop table FOURNIR
go

if exists (select 1
            from  sysobjects
           where  id = object_id('FOURNISSEURS')
            and   type = 'U')
   drop table FOURNISSEURS
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('LIGNES_DE_COMMANDES')
            and   name  = 'DIVISER_FK'
            and   indid > 0
            and   indid < 255)
   drop index LIGNES_DE_COMMANDES.DIVISER_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('LIGNES_DE_COMMANDES')
            and   type = 'U')
   drop table LIGNES_DE_COMMANDES
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('LIVRAISONS')
            and   name  = 'CORRESPONDRE_FK'
            and   indid > 0
            and   indid < 255)
   drop index LIVRAISONS.CORRESPONDRE_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('LIVRAISONS')
            and   type = 'U')
   drop table LIVRAISONS
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('PASSER')
            and   name  = 'PASSER2_FK'
            and   indid > 0
            and   indid < 255)
   drop index PASSER.PASSER2_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('PASSER')
            and   name  = 'PASSER_FK'
            and   indid > 0
            and   indid < 255)
   drop index PASSER.PASSER_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('PASSER')
            and   type = 'U')
   drop table PASSER
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('PRODUITS')
            and   name  = 'CONTENIR_FK'
            and   indid > 0
            and   indid < 255)
   drop index PRODUITS.CONTENIR_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('PRODUITS')
            and   name  = 'APPARTENIR_FK'
            and   indid > 0
            and   indid < 255)
   drop index PRODUITS.APPARTENIR_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('PRODUITS')
            and   type = 'U')
   drop table PRODUITS
go

if exists (select 1
            from  sysobjects
           where  id = object_id('ROLES')
            and   type = 'U')
   drop table ROLES
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('RUBRIQUES')
            and   name  = 'DEPRENDRE_FK'
            and   indid > 0
            and   indid < 255)
   drop index RUBRIQUES.DEPRENDRE_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('RUBRIQUES')
            and   type = 'U')
   drop table RUBRIQUES
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('S_OCCUPER_DE')
            and   name  = 'S_OCCUPER_DE2_FK'
            and   indid > 0
            and   indid < 255)
   drop index S_OCCUPER_DE.S_OCCUPER_DE2_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('S_OCCUPER_DE')
            and   name  = 'S_OCCUPER_DE_FK'
            and   indid > 0
            and   indid < 255)
   drop index S_OCCUPER_DE.S_OCCUPER_DE_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('S_OCCUPER_DE')
            and   type = 'U')
   drop table S_OCCUPER_DE
go

/*==============================================================*/
/* Table: CATEGORIE_CLIENT                                      */
/*==============================================================*/
create table CATEGORIE_CLIENT (
   CAT_CLI_ID           numeric(1)           not null,
   CAT_CLI_NOM          varchar(30)          null,
   CAT_CLI_COEF         decimal(3,2)         null,
   constraint PK_CATEGORIE_CLIENT primary key nonclustered (CAT_CLI_ID)
)
go

/*==============================================================*/
/* Table: CLIENTS                                               */
/*==============================================================*/
create table CLIENTS (
   CLI_ID               smallint             not null,
   ROLE_ID              numeric(1)           not null,
   CAT_CLI_ID           numeric(1)           not null,
   CLI_REF              varchar(30)          null,
   CLI_NOM              varchar(30)          null,
   CLI_PRENOM           varchar(30)          null,
   CLI_ADRESSE          varchar(100)         null,
   CLI_CP               numeric(10)          null,
   CLI_VILLE            varchar(50)          null,
   CLI_REG              varchar(30)          null,
   CLI_PAYS             varchar(50)          null,
   CLI_TEL              varchar(20)          null,
   CLI_MAIL             varchar(50)          null,
   constraint PK_CLIENTS primary key nonclustered (CLI_ID)
)
go

/*==============================================================*/
/* Index: ASSOCIER_FK                                           */
/*==============================================================*/
create index ASSOCIER_FK on CLIENTS (
CAT_CLI_ID ASC
)
go

/*==============================================================*/
/* Index: AVOIR_FK                                              */
/*==============================================================*/
create index AVOIR_FK on CLIENTS (
ROLE_ID ASC
)
go

/*==============================================================*/
/* Table: COMMANDES                                             */
/*==============================================================*/
create table COMMANDES (
   COM_NUM              numeric(5)           not null,
   COM_DATE             datetime             null,
   COM_OBS              varchar(50)          null,
   COM_ETAT             varchar(50)          null,
   constraint PK_COMMANDES primary key nonclustered (COM_NUM)
)
go

/*==============================================================*/
/* Table: EMPLOYES                                              */
/*==============================================================*/
create table EMPLOYES (
   EMP_ID               numeric(11)          not null,
   ROLE_ID              numeric(1)           not null,
   EMP_NOM              varchar(30)          null,
   EMP_PRENOM           varchar(30)          null,
   EMP_ADRESSE          varchar(100)         null,
   EMP_CP               numeric(5)           null,
   EMP_VILLE            varchar(50)          null,
   EMP_TEL              varchar(20)          null,
   EMP_MAIL             varchar(50)          null,
   EMP_FONCTION         varchar(30)          null,
   constraint PK_EMPLOYES primary key nonclustered (EMP_ID)
)
go

/*==============================================================*/
/* Index: ATTRIBUER_FK                                          */
/*==============================================================*/
create index ATTRIBUER_FK on EMPLOYES (
ROLE_ID ASC
)
go

/*==============================================================*/
/* Table: FOURNIR                                               */
/*==============================================================*/
create table FOURNIR (
   FOU_NUM              numeric(5)           not null,
   PRO_ID               int                  not null,
   constraint PK_FOURNIR primary key (FOU_NUM, PRO_ID)
)
go

/*==============================================================*/
/* Index: FOURNIR_FK                                            */
/*==============================================================*/
create index FOURNIR_FK on FOURNIR (
FOU_NUM ASC
)
go

/*==============================================================*/
/* Index: FOURNIR2_FK                                           */
/*==============================================================*/
create index FOURNIR2_FK on FOURNIR (
PRO_ID ASC
)
go

/*==============================================================*/
/* Table: FOURNISSEURS                                          */
/*==============================================================*/
create table FOURNISSEURS (
   FOU_NUM              numeric(5)           not null,
   FOU_CAT              varchar(20)          null,
   FOU_REF              varchar(10)          null,
   FOU_NOM              varchar(30)          null,
   FOU_ADRESSE          varchar(100)         null,
   FOU_CP               numeric(5)           null,
   FOU_VILLE            varchar(50)          null,
   FOU_REG              varchar(30)          null,
   FOU_PAYS             varchar(50)          null,
   FOU_TEL              char(10)             null,
   FOU_MAIL             varchar(50)          null,
   constraint PK_FOURNISSEURS primary key nonclustered (FOU_NUM)
)
go

/*==============================================================*/
/* Table: LIGNES_DE_COMMANDES                                   */
/*==============================================================*/
create table LIGNES_DE_COMMANDES (
   LIGCOM_ID            numeric(5)           not null,
   COM_NUM              numeric(5)           not null,
   LIGCOM_PRO_HT        decimal(6,2)         null,
   LIGCOM_QTT           smallint             null,
   LIGCOM_TOT_HT        decimal(6,2)         null,
   LIGCOM_TOT_TTC       decimal(6,2)         null,
   LIGCOM_REMISE        decimal(6,2)         null,
   constraint PK_LIGNES_DE_COMMANDES primary key nonclustered (LIGCOM_ID)
)
go

/*==============================================================*/
/* Index: DIVISER_FK                                            */
/*==============================================================*/
create index DIVISER_FK on LIGNES_DE_COMMANDES (
COM_NUM ASC
)
go

/*==============================================================*/
/* Table: LIVRAISONS                                            */
/*==============================================================*/
create table LIVRAISONS (
   LIV_NUM_BON          numeric(5)           not null,
   LIGCOM_ID            numeric(5)           not null,
   LIV_DATE             datetime             null,
   LIV_QTT_LIV          smallint             null,
   LIV_ADRESSE          varchar(100)         null,
   LIV_CP               numeric(5)           null,
   LIV_VILLE            varchar(50)          null,
   LIV_REG              varchar(30)          null,
   LIV_PAYS             varchar(30)          null,
   constraint PK_LIVRAISONS primary key nonclustered (LIV_NUM_BON)
)
go

/*==============================================================*/
/* Index: CORRESPONDRE_FK                                       */
/*==============================================================*/
create index CORRESPONDRE_FK on LIVRAISONS (
LIGCOM_ID ASC
)
go

/*==============================================================*/
/* Table: PASSER                                                */
/*==============================================================*/
create table PASSER (
   CLI_ID               smallint             not null,
   COM_NUM              numeric(5)           not null,
   constraint PK_PASSER primary key (CLI_ID, COM_NUM)
)
go

/*==============================================================*/
/* Index: PASSER_FK                                             */
/*==============================================================*/
create index PASSER_FK on PASSER (
CLI_ID ASC
)
go

/*==============================================================*/
/* Index: PASSER2_FK                                            */
/*==============================================================*/
create index PASSER2_FK on PASSER (
COM_NUM ASC
)
go

/*==============================================================*/
/* Table: PRODUITS                                              */
/*==============================================================*/
create table PRODUITS (
   PRO_ID               int                  not null,
   LIGCOM_ID            numeric(5)           not null,
   RUB_ID               numeric(2)           not null,
   PRO_REF              varchar(10)          null,
   PRO_DESCRIPTION      varchar(1000)        null,
   PRO_PRIX_ACHAT       decimal(6,2)         null,
   PRO_PRIX_VENTE_HT    decimal(6,2)         null,
   PRO_NOM_PHOTO        varchar(20)          null,
   PRO_STOCK_PHY        int                  null,
   PRO_STOCK_AL         int                  null,
   PRO_PRIX_SOLD        decimal(6,2)         null,
   PRO_D_SOLD_DEB       datetime             null,
   PRO_D_SOLD_FIN       datetime             null,
   constraint PK_PRODUITS primary key nonclustered (PRO_ID)
)
go

/*==============================================================*/
/* Index: APPARTENIR_FK                                         */
/*==============================================================*/
create index APPARTENIR_FK on PRODUITS (
RUB_ID ASC
)
go

/*==============================================================*/
/* Index: CONTENIR_FK                                           */
/*==============================================================*/
create index CONTENIR_FK on PRODUITS (
LIGCOM_ID ASC
)
go

/*==============================================================*/
/* Table: ROLES                                                 */
/*==============================================================*/
create table ROLES (
   ROLE_ID              numeric(1)           not null,
   ROLE_NOM             varchar(30)          null,
   constraint PK_ROLES primary key nonclustered (ROLE_ID)
)
go

/*==============================================================*/
/* Table: RUBRIQUES                                             */
/*==============================================================*/
create table RUBRIQUES (
   RUB_ID               numeric(2)           not null,
   RUB_RUB_ID           numeric(2)           null,
   RUB_NOM              varchar(50)          null,
   RUB_NUM_SUB          numeric(2)           null,
   constraint PK_RUBRIQUES primary key nonclustered (RUB_ID)
)
go

/*==============================================================*/
/* Index: DEPRENDRE_FK                                          */
/*==============================================================*/
create index DEPRENDRE_FK on RUBRIQUES (
RUB_RUB_ID ASC
)
go

/*==============================================================*/
/* Table: S_OCCUPER_DE                                          */
/*==============================================================*/
create table S_OCCUPER_DE (
   CLI_ID               smallint             not null,
   EMP_ID               numeric(11)          not null,
   constraint PK_S_OCCUPER_DE primary key (CLI_ID, EMP_ID)
)
go

/*==============================================================*/
/* Index: S_OCCUPER_DE_FK                                       */
/*==============================================================*/
create index S_OCCUPER_DE_FK on S_OCCUPER_DE (
CLI_ID ASC
)
go

/*==============================================================*/
/* Index: S_OCCUPER_DE2_FK                                      */
/*==============================================================*/
create index S_OCCUPER_DE2_FK on S_OCCUPER_DE (
EMP_ID ASC
)
go

