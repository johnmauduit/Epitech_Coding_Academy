use coding;
SELECT title AS "Movie title",
TIMESTAMPDIFF(DAY, release_date, '2018-06-26') AS "Number of days passed"
FROM movies WHERE (release_date <> 0);
