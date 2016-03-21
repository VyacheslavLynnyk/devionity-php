DROP DATABASE IF EXISTS hw01_books;
CREATE DATABASE hw01_books;

use hw01_books;

CREATE TABLE authors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author VARCHAR(100) NOT NULL DEFAULT 'unknown'
)  CHARACTER SET UTF8 COLLATE utf8_unicode_ci;

CREATE TABLE styles (
    id TINYINT AUTO_INCREMENT PRIMARY KEY,
    style VARCHAR(100) NOT NULL DEFAULT 'other'
)  CHARACTER SET UTF8 COLLATE utf8_unicode_ci;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book VARCHAR(100) NOT NULL DEFAULT 'PHP',
    price MEDIUMINT NOT NULL DEFAULT '0',
    style_id TINYINT,
    author_id INT,
    FOREIGN KEY(style_id) REFERENCES styles(id)
		ON DELETE NO ACTION,
    FOREIGN KEY(author_id) REFERENCES authors(id)
		ON DELETE NO ACTION
) CHARACTER SET UTF8 COLLATE utf8_unicode_ci;

ALTER TABLE books ADD value VARCHAR(16) NOT NULL DEFAULT 'грн';

INSERT INTO authors (author) 
	VALUES ('Лев И.Толстой'), ('Омар Хайям'), 
		('Анастасия Новых'),('Смирнова-Ракитина Вера');

INSERT INTO styles (style) 
	VALUES ('Художественная'), ('Проза'), ('Документальная');

--Заполнить таблицы тестовыми данными (до десяти записей). 
INSERT INTO books (book, price, style_id, author_id) VALUES 
	('Война и Мир', 150, 1, 1), 
	('Рубаи', 102, 2, 2), 
	('Сэнсэй 1', 45, 1, 3),
	('Сэнсэй 4', 95, 1, 3),
	('Аллатра', 200, 1, 3),
	('Авиценна', 120, 3, 4);

--Сделать выборку книг с ценой менее 100грн.
SELECT books.book, authors.author, styles.style, books.price, books.value 
FROM books, authors, styles
	WHERE 
		authors.id = books.author_id AND
		styles.id = books.style_id AND
		books.price < 100;

--Сделать выборку книг с ценой в диапазоне от 100 до 500грн.
SELECT books.book, authors.author, styles.style, books.price, books.value 
FROM books, authors, styles
	WHERE 
		authors.id = books.author_id AND
		styles.id = books.style_id AND
		books.price BETWEEN 100 AND 500;

--Сделать выборку книг определённых жанров
SELECT books.book, authors.author, styles.style, books.price, books.value 
FROM books, authors, styles
	WHERE 
		authors.id = books.author_id AND
		styles.id = books.style_id AND
		styles.style = 'Художественная';


--Сделать выборку книг определенного жанра у определённого автора.
SELECT books.book, authors.author, styles.style, books.price, books.value 
FROM books, authors, styles
	WHERE 
		authors.id = books.author_id AND
		styles.id = books.style_id AND
		styles.style = 'Художественная' AND
		authors.author = 'Анастасия Новых';

--Почитайте про команду update и увеличьте в 1,5 раза цену на книги определённого жанра.
UPDATE books SET price = price * 1.5 
	WHERE style_id = (
		SELECT id FROM styles WHERE styles.style = 'Проза'
	);
--Проверка без индекса
SELECT books.book, authors.author, styles.style, books.price, books.value 
FROM books, authors, styles
	WHERE 
		authors.id = books.author_id AND
		styles.id = books.style_id AND
		books.price BETWEEN 100 AND 500;

--Добавить индекс по полю "цена" (таблица книги) 
--и сравнить скорость выполнения тех же запросов. 
ALTER TABLE books ADD INDEX(price);

--Проверка c индексом
SELECT books.book, authors.author, styles.style, books.price, books.value 
FROM books, authors, styles
	WHERE 
		authors.id = books.author_id AND
		styles.id = books.style_id AND
		books.price BETWEEN 100 AND 500;

-- Охотно верю что  индекс увеличивает производительность
-- но с ssd на этой базе раници никакой 0.00 сек :)