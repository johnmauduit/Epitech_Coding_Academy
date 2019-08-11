use coding;
SELECT floor AS "Floor number", SUM(seats) AS "Total number of seats",
SUM(room_number) AS "Total number of rooms" FROM rooms
GROUP BY floor ORDER BY SUM(seats) ASC;


