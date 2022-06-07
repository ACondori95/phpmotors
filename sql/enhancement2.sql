-- QUERY 1
INSERT INTO clients (
    clientFirstname,
    clientLastname,
    clientEmail,
    clientPassword,
    comment
  )
VALUES (
    'Tony',
    'Stark',
    'tony@starkent.com',
    'Iam1ronM@n',
    'I am the real Ironman'
  );
-- QUERY 2
UPDATE clients
SET clientLevel = 3
WHERE clientEmail = 'tony@starkent.com';
-- QUERY 3
SELECT REPLACE (
    'Do you have 6 kids and like to go off-roading? The Hummer gives you the small interiors with an engine to get you out of any muddy or rocky situation.',
    'small interiors',
    'spacious interiors'
  );
-- QUERY 4
SELECT classificationName
FROM carclassification
  INNER JOIN inventory ON carclassification.classificationName = inventory.invModel
WHERE carclassification.classificationName = 'SUV';
-- QUERY 5
DELETE FROM inventory
WHERE invId = 1;
-- QUERY 6
UPDATE inventory
SET invImage = concat("/phpmotors", invImage);