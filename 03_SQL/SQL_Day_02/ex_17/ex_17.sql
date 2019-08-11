use coding;
UPDATE movies
SET producer_id = (SELECT producer_id FROM (SELECT * FROM movies)
AS films
INNER JOIN producers ON producers.id = films.producer_id
WHERE producers.name LIKE '%film'
GROUP BY producer_id
ORDER BY COUNT(producer_id) LIMIT 1)
WHERE producer_id IS NULL;
