SELECT film.nom, genre.nom AS type_genre FROM appartenir

INNER JOIN genre ON appartenir.genre_id = genre.id_genre
INNER JOIN film ON appartenir.film_id = film.id_film

WHERE genre.id_genre =6
ORDER BY genre.nom DESC