SELECT CONCAT(personne.nom,' ',personne.prenom) AS nom_prenom, film.nom AS nom_film, role.nom AS nom_role, YEAR(film.annee_sortie) AS anne_sortie FROM casting

INNER JOIN acteur ON casting.acteur_id = acteur.id_acteur
INNER JOIN film ON casting.film_id = film.id_film
INNER JOIN role ON casting.role_id = role.id_role
INNER JOIN personne ON acteur.personne_id = personne.id_personne

WHERE acteur_id = 15
ORDER BY annee_sortie DESC