SELECT etage.nom,
salles.nom AS Biggest_Room, 
MAX(salles.capacite) 
FROM etage 
JOIN salles ON etage.id=salles.id_etage; 
