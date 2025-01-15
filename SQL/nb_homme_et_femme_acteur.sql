SELECT personne.sexe, COUNT(personne.sexe) AS nombre FROM acteur

INNER JOIN personne ON acteur.personne_id = personne.id_personne

GROUP BY personne.sexe