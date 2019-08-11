use coding;
LOAD DATA LOCAL INFILE '/home/john/Téléchargements/jobs.csv'
INTO TABLE jobs
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;
