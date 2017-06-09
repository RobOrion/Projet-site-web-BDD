CREATE TABLE Profils (
    nom varchar(10) NOT NULL,
    prenom varchar(10) NOT NULL,
    ville varchar(10) NOT NULL,
    code_postal int(5) NOT NULL,
    adresse varchar(30) NOT NULL,
    email varchar(10) NOT NULL,
    naissance date NOT NULL,
    login varchar(7) PRIMARY KEY,
    mot_de_passe varchar(7) NOT NULL,
)
