CREATE TABLE Users
(
    id         INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name  VARCHAR(255) NOT NULL,
    email      VARCHAR(255) NOT NULL,
    password   VARCHAR(255) NOT NULL,
    username   VARCHAR(255) NOT NULL
);

CREATE TABLE reports
(
    id                 INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    animal_type        VARCHAR(255) NOT NULL,
    city               VARCHAR(255) NOT NULL,
    street             VARCHAR(255) NOT NULL,
    description        VARCHAR(255) NOT NULL,
    additional_aspects VARCHAR(255) NOT NULL,
    is_approve         INT          NOT NULL
);

ALTER TABLE users
    ADD COLUMN admin BOOLEAN DEFAULT FALSE;
ALTER TABLE users DROP COLUMN admin;