CREATE TABLE covoiturage (
    nom varchar(10) PRIMARY KEY,
    prenom varchar(10) NOT NULL,
    ville varchar(10) NOT NULL,
    code_postal int(5) NOT NULL,
    adresse varchar(30) NOT NULL,
    email varchar(10) NOT NULL,
    voiture varchar(10) NOT NULL,
    places int(10) NOT NULL,
    heure varchar(10) NOT NULL,
    prix int(10) NOT NULL,
)
