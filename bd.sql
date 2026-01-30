-- Création de la table contact
CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message VARCHAR(255) NOT NULL
);

-- Insertion du message à afficher sur la page contact
INSERT INTO contact (message)
VALUES ('Contactez-nous au 016434200');

 
