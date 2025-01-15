SELECT CONCAT(personne.nom, ' ', personne.prenom) AS prenom_nom, YEAR(date_naissance) FROM acteur

INNER JOIN personne ON acteur.personne_id = personne.id_personne

WHERE DATE_FORMAT(NOW(),"%Y")- YEAR(date_naissance) >=50