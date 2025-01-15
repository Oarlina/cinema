SELECT CONCAT(personne.nom,' ',personne.prenom) AS nom_prenom, personne.sexe FROM casting

INNER JOIN acteur ON casting.acteur_id = acteur.id_acteur
INNER JOIN personne ON acteur.personne_id = personne.id_personne

WHERE film_id = 18