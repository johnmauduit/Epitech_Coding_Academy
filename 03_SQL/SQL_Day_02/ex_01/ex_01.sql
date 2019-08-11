use coding;
SELECT COUNT(id) AS "Number of members",
FLOOR(AVG(TIMESTAMPDIFF(YEAR, birthdate, '2018-06-26'))) AS "Average age"
FROM profiles;
