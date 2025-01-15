SELECT CONCAT(personne.nom, ' ', personne.prenom) AS nom_prenom, count(film.nom) AS nb_film FROM casting

INNER JOIN film ON casting.film_id = film.id_film
INNER JOIN acteur ON casting.acteur_id = acteur.id_acteur
INNER JOIN personne ON acteur.personne_id = personne.id_personne

WHERE nb_film >= 3
GROUP BY nom_prenom