CREATE TABLE evenements (
    nom varchar(10) NOT NULL,
    prenom varchar(10) NOT NULL,
    ville varchar(10) NOT NULL,
    code_postal int(5) NOT NULL,
    adresse varchar(30) NOT NULL,
    email varchar(10) NOT NULL,
    activite varchar(30) NOT NULL,
    personnes int(20) NOT NULL,
    quand varchar(20) PRIMARY KEY,
    heure varchar(10) NOT NULL,
    prix varchar(10) NOT NULL,
)
