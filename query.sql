CREATE TABLE Branches (
     ID MEDIUMINT NOT NULL AUTO_INCREMENT,
     Name CHAR(30) NOT NULL,
     PRIMARY KEY (ID)
);
INSERT INTO Branches (ID,Name) VALUES(NUll,'Pune');
INSERT INTO Branches (ID,Name) VALUES(NULL,'Mumbai');

CREATE TABLE `Enquiry` (
 `id` mediumint(9) NOT NULL AUTO_INCREMENT,
 `name` char(30) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1