SELECT film.nom, YEAR( annee_sortie) AS anne_sortie,DATE_FORMAT(SEC_TO_TIME(duree*60), "%H h %i min") AS durée, CONCAT(personne.nom,' ',personne.prenom) AS nom_prenom FROM film 

INNER JOIN realisateur ON film.realisateur_id = realisateur.id_realisateur
INNER JOIN personne ON realisateur.personne_id = personne.id_personne