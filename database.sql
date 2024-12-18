CREATE DATABASE football_team;

CREATE TABLE nationalities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    flag_url VARCHAR(255) NOT NULL
);

CREATE TABLE clubs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    logo_url VARCHAR(255) NOT NULL
);


CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    photo_url VARCHAR(255),
    position VARCHAR(10) NOT NULL,
    nationality_id INT NOT NULL,
    club_id INT NOT NULL,
    rating INT,

    pace INT,
    shooting INT,
    passing INT,
    dribbling INT,
    defending INT,
    physical INT,

    diving INT,
    handling INT,
    kicking INT,
    reflexes INT,
    speed INT,
    positioning INT,

    FOREIGN KEY (nationality_id) REFERENCES nationalities(id) ON DELETE CASCADE,
    FOREIGN KEY (club_id) REFERENCES clubs(id) ON DELETE CASCADE
);
-- Inserting nationality data
INSERT INTO nationalities (name, flag_url) VALUES
('Argentina', 'https://cdn.sofifa.net/flags/ar.png'),
('Portugal', 'https://cdn.sofifa.net/flags/pt.png'),
('Belgium', 'https://cdn.sofifa.net/flags/be.png'),
('France', 'https://cdn.sofifa.net/flags/fr.png'),
('Netherlands', 'https://cdn.sofifa.net/flags/nl.png'),
('Germany', 'https://cdn.sofifa.net/flags/de.png'),
('Brazil', 'https://cdn.sofifa.net/flags/br.png'),
('Egypt', 'https://cdn.sofifa.net/flags/eg.png'),
('Slovenia', 'https://cdn.sofifa.net/flags/si.png'),
('Croatia', 'https://cdn.sofifa.net/flags/hr.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Norway', 'https://cdn.sofifa.net/flags/no.png'),
('Canada', 'https://cdn.sofifa.net/flags/ca.png'),
('England', 'https://cdn.sofifa.net/flags/gb-eng.png'),
('Italy', 'https://cdn.sofifa.net/flags/it.png');

-- Inserting club data
INSERT INTO clubs (name, logo_url) VALUES
('Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png'),
('Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
('Manchester City', 'https://cdn.sofifa.net/meta/team/239/085/25_120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png'),
('Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png'),
('Bayern Munich', 'https://cdn.sofifa.net/meta/team/503/120.png'),
('Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png'),
('Fenerbahçe', 'https://cdn.sofifa.net/meta/team/88/120.png'),
('Paris Saint-Germain', 'https://cdn.sofifa.net/meta/team/591/120.png'),
('Manchester United', 'https://cdn.sofifa.net/meta/team/14/120.png'),
('Al-Ittihad', 'https://cdn.sofifa.net/meta/team/476/120.png');



