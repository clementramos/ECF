# ECF :house:	
***
## Table Of Contents
1. [Description of the project](#description) :speaking_head:
2. [Deploiement](#local) :globe_with_meridians:	
3. [Technologies used](#techno) :compass:	
4. [How to create an an admin](#howtoAdmin) :teacher:	
5. [How to create a manager](#howtowebsite) :man_judge:	
6. [Docs](#docs) :books:	
7. [MCD / Wireframes](#mcd) :dart:	
8. [Scripts SQL](#sql) :joystick:	
***
<a name="description"></a>
### Description of the project :speaking_head:
The main goal is to create a complete website of an hotel group. 7 main functionnalties are required, with 3 types of people using the website. The Admin, the Visitor and the Manager. <br>
The administrator creates hotels and managers, <br>
The manager creates rooms in his hotel, <br>
The visitor can navigate trough the website and check availability of one room or another. If he wants to book, he must create an account. <br>
***
<a name="local"></a>
### Deploiement :globe_with_meridians:
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
### Technologies used :compass:
A list of technologies used within the project:
* [HTML 5](https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/HTML_basics)
* [CSS 3](https://developer.mozilla.org/fr/docs/Web/CSS)
* * [Bootstrap](https://getbootstrap.com/)
* [PHP 8.0](https://www.php.net/)
* [MariaDB](https://mariadb.org/)
<a name="howtoAdmin"></a>
### How to create an admin :teacher:
Well in fact... you can't...:fearful:
One admin is created for this website, the ID is "2" and the password is "admin". <br>
<br>
Obviously, you can create one with the ```createAdmin.php``` file :partying_face:	
<br>
<a name="howtowebsite"></a>
### How to create a manager :man_judge:	
It's as simple as "Hello!" <br>
When you're logged in as the admin, you can easily find "Ajouter un manager" in the main menu. Once you've clicked, few informations are required. Name, First name, mail and secured password.
<br>
<a name="docs"></a>
### Docs :books:
Graphic Chart :
[Charte graphique V1.pdf](https://github.com/clementramos/ECF/files/8254778/Charte.graphique.V1.pdf)
<br>
Manuel :
[Manuel d'utilisation.pdf](https://github.com/clementramos/ECF/files/8523823/MANUEL.UTILISATION.pdf)
<br>
Documentation technique :
[DOCUMENTATION TECHNIQUE.pdf](https://github.com/clementramos/ECF/files/8525184/DOCUMENTATION.TECHNIQUE.pdf)
<br>
Modèle de copie Studi :
(https://github.com/clementramos/ECF/files/8525093/MODELE.COPIE.RAMOS.pdf)
<br>
Maquettes (pdf):
[MAQUETTE RAMOS.pdf](https://github.com/clementramos/ECF/files/8525298/MAQUETTE.RAMOS.pdf)
<br>
Liens : <br>
Trello : https://trello.com/invite/b/2APNLfKH/28d6bc6791e03c370d6eff2c59279b8c/ecf-hypnos
<br>
Website : http://hypnoshotels.online/

<a name="mcd"></a>
### Modèles Conceptuels de Données :dart:
#### Diagramme d'activité : "Réserver une suite"
![CASE OF USE BOOKING](https://user-images.githubusercontent.com/81080837/161830574-3c72abaf-60f0-416f-9f52-c7fa772d6c82.png)
#### Diagramme de cas d'utilisation : "Général"
![CASE OF USE DIAGRAM drawio](https://user-images.githubusercontent.com/81080837/161830580-29c4d774-a07d-4063-93ce-c4d8dc68c039.png)
#### Diagramme de classes
![MODELE PHYSIQUE DE DONNES](https://user-images.githubusercontent.com/81080837/164315116-de415209-3ae4-40c6-845b-a9339e8adbfd.png)

#### Diagramme de paquetages 
![PACKAGE DIAGRAM](https://user-images.githubusercontent.com/81080837/161830583-6c74f2ad-cd57-4314-ad39-bacb8afbb921.png)
#### Diagramme de séquence
![SEQUENCE CONTACT](https://user-images.githubusercontent.com/81080837/161830585-07055715-f447-482d-be6b-997c57a9c94e.png)
## Wireframes :
US1 : <br>
![US1 WEB](https://user-images.githubusercontent.com/81080837/164493512-0f415ffd-17a7-40e3-ae1d-ef165262f268.png)
![wireframemobile1](https://user-images.githubusercontent.com/81080837/164494273-6b753119-06ae-4294-a6f0-9b5168865d5c.png)
US2 : <br>
![wireframe1](https://user-images.githubusercontent.com/81080837/164493654-913ee398-2eba-446a-9bb5-4832cb45f329.png)
US3 : <br>
![US3 WEB](https://user-images.githubusercontent.com/81080837/164493763-9642b300-75f0-40ee-b56f-476e1d760e5e.png)
US4 : <br>
![US4 WEB](https://user-images.githubusercontent.com/81080837/164494001-548a1808-ecaa-4b33-bd73-d2d0b4395b3a.png)
US5 : <br>
![US5 WEB](https://user-images.githubusercontent.com/81080837/164494127-0e3deb02-4487-47e4-9677-1db8c5ce78ef.png)
US7 : <br>
![US7 WEB](https://user-images.githubusercontent.com/81080837/164494204-09330b2d-15c6-4b4a-8794-55a03ec362cc.png)
<a name="sql"></a>
### Scripts SQL :joystick:
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
## Create an admin
```
INSERT INTO administrateur(admin_id, admin_name, admin_password)VALUES(?, ?, ?)
```
## Delete an admin
```
DELETE FROM administrateur WHERE admin_id = ?
```
## Updating an hotel
```
$new_hotel_title = htmlspecialchars($_POST['etablissement_id']);
        $new_hotel_description = nl2br(htmlspecialchars($_POST['etablissement_description']));
        $new_hotel_adress =nl2br(htmlspecialchars($_POST['etablissement_adress']));
        $new_hotel_city = nl2br(htmlspecialchars($_POST['etablissement_city']));
        
        $editHotelOnWebsite = $bdd->prepare('UPDATE etablissements SET etablissement_id = ?, etablissement_description = ?, etablissement_adress = ?, etablissement_city = ? WHERE etablissement_id = ?');
        $editHotelOnWebsite->execute(array($new_hotel_title, $new_hotel_description, $new_hotel_adress, $new_hotel_city, $idOfHotel));
```
