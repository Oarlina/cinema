SELECT film.nom, DATE_FORMAT(SEC_TO_TIME(duree*60), "%H h %i min") AS duree FROM film 

WHERE duree > 135
ORDER BY film.duree DESC