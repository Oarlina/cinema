SELECT CONCAT(personne.nom,' ',personne.prenom) AS nom_prenom, film.nom, YEAR(annee_sortie) AS annee_sortie FROM film

INNER JOIN realisateur ON film.realisateur_id = realisateur.id_realisateur
INNER JOIN personne ON realisateur.personne_id = personne.id_personne


WHERE realisateur.id_realisateur = 2