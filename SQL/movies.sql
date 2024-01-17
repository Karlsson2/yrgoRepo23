CREATE table movies(id integer primary key, rating float, release_year integer, title varchar, play_time integer);

CREATE table actors(id integer primary key, first_name varchar, last_name varchar, dob date, photo varchar);

CREATE table directors(id integer primary key, first_name varchar, last_name varchar, dob date, photo varchar);

CREATE table awards(id integer primary key, award_type varchar, award_name varchar);


CREATE table movie_directors(id integer primary key, director_id, movie_id, 
FOREIGN KEY(director_id) REFERENCES directors(id), 
FOREIGN KEY(movie_id) REFERENCES movies(id));

CREATE table roles(id integer primary key, character_name varchar, actor_id, movie_id,
FOREIGN KEY(actor_id) REFERENCES actor(id), 
FOREIGN KEY(movie_id) REFERENCES movies(id));

CREATE table director_awards(id integer primary key, year_awarded integer, director_id, award_id, movie_id,
FOREIGN KEY(director_id) REFERENCES director(id),
FOREIGN KEY (award_id) REFERENCES awards(id),
FOREIGN KEY(movie_id) REFERENCES movies(id));

CREATE table actor_awards(id integer primary key, year_awarded integer, award_id, actor_id, role_id, movie_id,
FOREIGN KEY (award_id) REFERENCES awards(id),
FOREIGN KEY (actor_id) REFERENCES actors(id),
FOREIGN KEY (role_id) REFERENCES roles(id),
FOREIGN KEY (movie_id) REFERENCES movie(id)
);

CREATE table movie_awards(id integer primary key, year_awarded integer, award_id, movie_id,
FOREIGN KEY (award_id) REFERENCES awards(id),
FOREIGN KEY (movie_id) REFERENCES movie(id)
);

INSERT INTO actors (first_name, last_name, dob, photo)
VALUES
    ( 'Al', 'Pacino', '1940-04-25', 'https://mediaproxy.salon.com/width/1200/https://media.salon.com/2018/07/pacino-godfather.jpg'),
    ( 'Marlon', 'Brando', '1924-04-03', 'https://m.media-amazon.com/images/M/MV5BMTg3MDYyMDE5OF5BMl5BanBnXkFtZTcwNjgyNTEzNA@@._V1_FMjpg_UX1000_.jpg'),
    ( 'James', 'Caan', '1940-03-26', 'https://imageresizer.static9.net.au/VcI_ldqQSkBpyG9-EJWE0jINLf8=/500x0/https%3A%2F%2Fprod.static9.net.au%2Ffs%2F48503121-f3f5-4131-8d49-947bb88ef6f2'),
    ( 'Diane', 'Keaton', '1946-01-05', 'https://www.indiewire.com/wp-content/uploads/2023/06/FEkLUmB6eVBpYRfdXFopMF.jpg'),
    ( 'Robert', 'Duvall', '1931-01-05', 'https://www.cnet.com/a/img/resize/b2a95f8bdb745daa8be2c1b348497bb48c51aebb/hub/2022/03/22/20c2c4c6-b4cc-4b1d-8f10-299dc138c0d4/gettyimages-1195327740.jpg?auto=webp&width=1200'),
    ('John', 'Cazale', '1935-08-12', 'https://m.media-amazon.com/images/M/MV5BNzE0OThmMWMtODI2My00NGIwLWIyZGQtMGFmMjdmNGJjNGFkXkEyXkFqcGdeQXVyMTIwODk1NTQ@._V1_.jpg'),
    ( 'Robert', 'de Niro', '1943-08-17', 'https://64.media.tumblr.com/32d9b7cedc52ce815598ddc7312c1cfd/12b562306dacb15d-5b/s1280x1920/e8159a74ed186e20634e4abb009e889231a88005.jpg');

INSERT into movies (rating, release_year, title, play_time)
VALUES (9.8, 1972, "The Godfather", 175);
INSERT into movies (rating, release_year, title, play_time)
VALUES (9, 1974, "The Godfather Part II", 202);



INSERT INTO roles (character_name, movie_id, actor_id)
VALUES ("Michael Corleone", 1, 1),("Vito Corleone ", 1, 2), ("Santino Corleone",1,3),("Kay Adams-Corleone", 1, 3),(" Tom Hagen",1, 4),("Fredo Corleone",1, 5),("Young Michael Corleone", 2, 6),("Michael Corleone", 2, 1),("Tom Hagen", 2,4),("Kay Adams-Corleone", 2, 3);

INSERT INTO directors (first_name,last_name,dob, photo)
VALUES ("Francis Ford","Coppola","17-04-1939","https://upload.wikimedia.org/wikipedia/commons/1/1b/Francis_Ford_Coppola_-1976.jpg");

INSERT INTO awards(award_type, award_name)
VALUES 
("Best Picture","Oscar"),
("Best Actor in a Leading Role","Oscar"),
("Best Writing Screenplay Based on Material from Another Medium", "Oscar"),
("Best DVD Collection","Academy of Science Fiction"),
("Anthony Asquith Award for Film Music", "Bafta"), 
("Best Motion Picture -Drama", "Golden Globe"),
("Best Actor in a Motion Picture -Drama", "Golden Globe"),
("Best Director - Motion Picture", "Golden Globe"),
("Best Instrumental Composition","Grammy Awards");

INSERT INTO movie_awards(year_awarded,award_id,movie_id)
VALUES (1973, 1, 1),(2009,4,1),(1973,5,1),(1973,6,1),(1973,8,1);

INSERT INTO actor_awards(year_awarded,award_id,actor_id,role_id,movie_id)
VALUES (1973, 2, 2,2,1),(1973, 7, 2,2,1);

INSERT INTO director_awards(year_awarded,award_id,director_id, movie_id)
VALUES (1973, 3, 1,1),(1973, 8,1,1);

INSERT INTO movie_directors (director_id,movie_id)
VALUES (1,1),(1,2);

INSERT INTO awards(award_type, award_name)
VALUES 
("Best Director ","Oscar"),
("Best Supporting Actor ", "Oscar"),
("Best Adapted Screenplay","Oscar"),
("Best Art Direction-Set Decoration", "Oscar"), 
("Best Original Dramatic Score", "Oscar"),
("Best Film Editing", "Oscar");

INSERT INTO movie_awards(year_awarded,award_id,movie_id)
VALUES (1975,1,2),(1975,12,2),(1975,13,2),(1975,14,2),(1975,15,2);

INSERT INTO actor_awards(year_awarded,award_id,actor_id,role_id,movie_id)
VALUES (1975,11,7,7,2);

INSERT INTO director_awards(year_awarded,award_id,director_id, movie_id)
VALUES (1975,10,1,2);

/*Which actor played the role of "Fredo" in the movie the godfather II?*/

SELECT roles.character_name, actors.first_name || " " || actors.last_name as Actor
FROM actors
INNER JOIN roles ON roles.actor_id = actors.id
INNER JOIN movies ON movie_id = roles.movie_id
WHERE movies.title LIKE "The Godfather Part II%" AND roles.character_name LIKE "Fredo%";

/*What is the average rating for the movies made in the seventies (1970-1979)?*/

SELECT AVG(rating)as "average rating"
FROM movies
WHERE movies.release_year > 1969 AND movies.release_year < 1980;

/*Who directed the longest godfather movie?*/

SELECT directors.first_name || " " || directors.last_name as directors, movies.play_time
FROM movies
INNER JOIN movie_directors ON movie_directors.movie_id = movies.id
INNER JOIN directors ON director_id = movie_directors.director_id
ORDER BY movies.play_time DESC
LIMIT 1;

/*In which movies did Marlon Brando participate?*/

SELECT movies.title
FROM movies
INNER JOIN roles ON roles.movie_id = movies.id
INNER JOIN actors ON actors.id = roles.actor_id
WHERE actors.first_name LIKE "Marlon";

/*Was the godfather awarded both the academy awards for best movie and best photo?*/



/*The godfather won an Oscar (academy awards) for "Best picture", but did it also win a Golden Globe for "Best motion picture"?*/

SELECT awards.award_name, awards.award_type, movies.title
FROM movie_awards
INNER JOIN awards on awards.id = movie_awards.award_id
INNER JOIN movies on movies.id = movie_awards.movie_id
WHERE movies.title ="The Godfather" AND awards.award_type LIKE "Best Motion%" AND awards.award_name LIKE "golden%" 