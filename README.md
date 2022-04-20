# ECF :house:	
***
## Table Of Contents
1. [Description of the project](#description)
2. [Deploiement](#local)
3. [Technologies used](#techno)
4. [How to create an an admin](#howtoAdmin)
5. [How to create a manager](#howtowebsite)
6. [Docs](#docs)
7. [MCD](#mcd) 
8. [Scripts SQL](#sql)
***
<a name="description"></a>
### Description of the project
The main goal is to create a complete website of an hotel group. 7 main functionnalties are required, with 3 types of people using the website. The Admin, the Visitor and the Manager. <br>
The administrator creates hotels and managers, <br>
The manager creates rooms in his hotel, <br>
The visitor can navigate trough the website and check availability of one room or another. If he wants to book, he must create an account. <br>
***
<a name="local"></a>
### Deploiement
A little intro about the installation. 

I've personnaly used ```XAMP Control Panel v3.3.0``` during the development. <br>
To deploy the website on a local environnement, you have to download the source code then copy/paste it on the ```htdocs``` file. <br>
When it's done, you can now go to localhost/CLIENT V1/ and navigate trough the website ! Have fun ! :grin:
```
$ git clone https://github.com/clementramos/ECF.git
$ cd ../path/to/the/file
$ npm install
$ npm start
```
Side information: To use the application in a special environment use ```localhost``` to start
<a name="techno"></a>
### Technologies
A list of technologies used within the project:
* [HTML 5](https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/HTML_basics)
* [CSS 3](https://developer.mozilla.org/fr/docs/Web/CSS)
* * [Bootstrap](https://getbootstrap.com/)
* [PHP 8.0](https://www.php.net/)
* [MariaDB](https://mariadb.org/)
<a name="howtoAdmin"></a>
### How to create an admin
Well in fact... you can't...:fearful:
One admin is created for this website, the ID is "1" and the password is "admin". <br>
<br>
Obviously, you can create one with the ```createAdmin.php``` file :partying_face:	
<br>
<a name="howtoWebsite"></a>
### How to create a manager
It's as simple as "Hello!" <br>
When you're logged in as the admin, you can easily find "Ajouter un manager" in the main menu. Once you've clicked, few informations are required. Name, First name, mail and secured password.
<br>
<a name="docs"></a>
### Docs
Graphic Chart :
[Charte graphique V1.pdf](https://github.com/clementramos/ECF/files/8254778/Charte.graphique.V1.pdf)
<a name="mcd"></a>
### Modèles Conceptuels de Données
#### Diagramme d'activité : "Réserver une suite"
![CASE OF USE BOOKING](https://user-images.githubusercontent.com/81080837/161830574-3c72abaf-60f0-416f-9f52-c7fa772d6c82.png)
#### Diagramme de cas d'utilisation : "Général"
![CASE OF USE DIAGRAM drawio](https://user-images.githubusercontent.com/81080837/161830580-29c4d774-a07d-4063-93ce-c4d8dc68c039.png)
#### Diagramme de classes
![MODELE PHYSIQUE DE DONNES](https://user-images.githubusercontent.com/81080837/161830581-2c74ffb2-d0b9-470d-8e9d-74180c29d940.png)
#### Diagramme de paquetages 
![PACKAGE DIAGRAM](https://user-images.githubusercontent.com/81080837/161830583-6c74f2ad-cd57-4314-ad39-bacb8afbb921.png)
#### Diagramme de séquence
![SEQUENCE CONTACT](https://user-images.githubusercontent.com/81080837/161830585-07055715-f447-482d-be6b-997c57a9c94e.png)
<a name="sql"></a>
### Scripts SQL
## Creation of the database :
```
CREATE DATABASE hypnos
USE DATABASE hypnos

CREATE TABLE administrateur
(
    admin_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    admin_name VARCHAR(255),
    admin_password TEXT
);

CREATE TABLE manager 
( 
    manager_id INT(11), 
    manager_name VARCHAR(255) PRIMARY KEY NOT NULL,
    manager_surname VARCHAR(255),
    manager_password TEXT,
    manager_mail VARCHAR(255)
);

CREATE TABLE etablissements
(
    etablissement_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    etablissement_title VARCHAR(255),
    etablissement_city VARCHAR(255),
    etablissement_adress VARCHAR(255),
    etablissement_description TEXT,
    etablissement_date DATETIME
);

CREATE TABLE clients 
(
    client_email VARCHAR(255) PRIMARY KEY NOT NULL,
    client_firstname VARCHAR(255),
    client_lastname VARCHAR(255),
    client_password TEXT
);

CREATE TABLE chambre
(
    chambre_id INT(11)  PRIMARY KEY NOT NULL AUTO_INCREMENT,
    chambre_title TEXT, 
    chambre_description TEXT,
    chambre_price TEXT,
    chambre_lien TEXT
);

CREATE TABLE reservation
(
    reservation_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    reservation_arrival DATE,
    reservation_departure DATE,
    reservation_first_name VARCHAR(255),
    reservation_last_name VARCHAR(255),
    reservation_email TEXT,
    reservation_hotel_pref INT(11),
    reservation_adults INT(11),
    reservation_children INT(11),
    reservation_room_pref INT(11)
);

CREATE TABLE contact
(
    contact_name VARCHAR(255) PRIMARY KEY NOT NULL,
    contact_email VARCHAR (255),
    contact_subject VARCHAR(255),
    contact_message TEXT
);
```
## Create a manager
```
INSERT INTO administrateur(admin_id, admin_name, admin_password)VALUES(?, ?, ?)
```
