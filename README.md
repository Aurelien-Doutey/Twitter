# Twitter
Twitter microservice

J'ai réalisé cette application avec Wamp Serveur.

La base de données MySQL contient une base twitter avec une table tweet qui correspond au fichier tweet.sql du projet.

La ligne 4 des fichiers ListTweet.php et PostTweet.php doivent être modifiés selon la configuration de MySQL :

$dbh = new PDO('mysql:host=localhost;dbname=twitter','root', '');

Pour lancer le service il faut ouvrir le fichier twitter.php dans localhost :

http://localhost/twitter/twitter.php

Un premier formulaire permet d'écrire un tweet (nom d'utilisateur et message).

Un second formulaire permet de rechercher les tweets des utilisateurs et par hashtags.
