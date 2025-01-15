SELECT nom, YEAR(annee_sortie) AS annee FROM film

WHERE DATE_FORMAT(NOW(),"%Y")- YEAR(annee_sortie) >=5
ORDER BY annee DESC