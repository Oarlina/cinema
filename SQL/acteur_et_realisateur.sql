SELECT CONCAT  (ac.nom,' ',ac.prenom) AS nom_prenom
FROM casting

INNER JOIN acteur ON casting.acteur_id = acteur.id_acteur
INNER JOIN film ON casting.film_id = film.id_film
INNER JOIN realisateur ON film.realisateur_id = realisateur.id_realisateur
INNER JOIN personne ac ON acteur.personne_id = ac.id_personne 

WHERE realisateur.personne_id = acteur.personne_id
