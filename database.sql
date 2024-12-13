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
