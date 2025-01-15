SELECT CONCAT(personne.nom,' ',personne.prenom) AS nom_prenom, count(film.nom) AS nb_film FROM film

INNER JOIN realisateur ON film.realisateur_id = realisateur.id_realisateur
INNER JOIN personne ON realisateur.personne_id = personne.id_personne

WHERE film.realisateur_id = realisateur.id_realisateur
GROUP BY personne.nom, personne.prenom
