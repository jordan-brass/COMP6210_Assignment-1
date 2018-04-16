USE `container-db`;

DROP TABLE IF EXISTS tbl_content;
DROP TABLE IF EXISTS tbl_plays;
DROP TABLE IF EXISTS tbl_dms;
DROP TABLE IF EXISTS tbl_adventures;
DROP TABLE IF EXISTS tbl_people;


CREATE TABLE tbl_people (

    DCI INT(11) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL,
    FNAME VARCHAR(255) NOT NULL,
    LNAME VARCHAR(255),
    PRIMARY KEY (DCI)

);

CREATE TABLE tbl_adventures (

    ID INT(11) NOT NULL AUTO_INCREMENT,
    TITLE VARCHAR(50) NOT NULL,
    SYNOPSIS VARCHAR(255) NOT NULL,
    LEVEL VARCHAR(50) NOT NULL,
    TIME VARCHAR(50)
    PRIMARY KEY (ID),
    
) AUTO_INCREMENT=1;

CREATE TABLE tbl_dms (

);

CREATE TABLE tbl_plays (

);

CREATE TABLE tbl_content (
    ID INT(11) NOT NULL AUTO_INCREMENT,
    PAGE VARCHAR(20) NOT NULL,
    LOCATION VARCHAR(50) NOT NULL,
    CONTENT VARCHAR(1000) NOT NULL,
    PRIMARY KEY (ID)

)

-- *********************************
-- ********* CREATE PEOPLE *********
-- *********************************

-- INSERT INTO tbl_people (FNAME,LNAME) VALUES ('Jeff', 'Kranenburg');
-- INSERT INTO tbl_people (FNAME,LNAME) VALUES ('Steve', 'Stevenson');
-- INSERT INTO tbl_people (FNAME,LNAME) VALUES ('Roger', 'Rogers');
-- INSERT INTO tbl_people (FNAME,LNAME) VALUES ('Kevin', 'Bateman');

-- SELECT * FROM tbl_people;

-- UPDATE tbl_people SET FNAME = 'Peter' WHERE ID = 1;

-- DELETE FROM tbl_people WHERE ID = 1;

-- *********************************
-- ********** CREATE POST **********
-- *********************************

-- INSERT INTO tbl_posts (TITLE, CONTENT, PID) VALUES ('LOREM IPSUM', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, doloremque.', 1);
-- INSERT INTO tbl_posts (TITLE, CONTENT, PID) VALUES ('LOREM IPSUM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi repellat vitae magni et exercitationem non optio dolorem qui iure similique!', 2);
-- INSERT INTO tbl_posts (TITLE, CONTENT, PID) VALUES ('LOREM IPSUM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, illo.', 2);
-- INSERT INTO tbl_posts (TITLE, CONTENT, PID) VALUES ('LOREM IPSUM', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, modi?', 3);

-- SELECT * FROM tbl_posts;

-- SELECT * FROM tbl_posts WHERE PID = 2;

-- UPDATE tbl_posts SET TITLE = 'NOPE!' WHERE ID = 1;

-- DELETE FROM tbl_posts WHERE ID = 1;

-- TRUNCATE tbl_posts;