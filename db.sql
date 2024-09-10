DROP TABLE IF EXISTS books;
CREATE TABLE books (
	id serial PRIMARY KEY,
	title VARCHAR (255) NOT NULL,
	author VARCHAR (255),
	year INT
);

INSERT INTO books (title, author, year) 
VALUES 
('Don Quixote', 'Miguel de Cervantes', 1605),
('Robinson Crusoe', 'Daniel Defoe', 1719),
('Pride and Prejudice', 'Jane Austen', 1813),
('Emma', 'Jane Austen', 1816),
('A Tale of Two Cities', 'Charles Dickens', 1859);

CREATE TABLE users (
	id serial PRIMARY KEY,
	name VARCHAR (255) NOT NULL
);

INSERT INTO users (name) 
VALUES 
('Aron'),
('Sara'),
('Michelle')
