final web project for dr gt!
members : karim itani - razan hourani - karim halal - omar mayassi 

SQL CREATE TABLES:

CREATE TABLE USERS(
    ID INT(11) NOT NULL AUTO_INCREMENT,
    fullName VARCHAR(20) NOT NULL,
    Email VARCHAR(200) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    dob DATE,
    sex CHAR(1),
    displayName VARCHAR(200),
    PRIMARY KEY (ID)
    );

CREATE TABLE PLATTERS(
    ID INT(11) NOT NULL AUTO_INCREMENT,
    PLATTER VARCHAR(200) NOT NULL,
    DESCRIPTION VARCHAR(255) NOT NULL,
    isActive int(11) NOT NULL,
    
    PRIMARY KEY (ID)

    
    );
CREATE TABLE table_contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    email VARCHAR(100),
    subject VARCHAR(255),
    body TEXT
);

