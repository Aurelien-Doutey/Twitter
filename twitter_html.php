<?php

function begin_html() {
  print('<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Twitter microservice</title>
</head>
<body>
<style>
    body{
      width: 600px;
      margin: 30px auto;
    }
  </style>
</head>
<body>
  <h2>Twitter microservice</h2><br> 
    <form action="postTweet.php" method="post">

        <Label>Utilisateur</Label><br> 
        <input type="text" name="user" required><br><br>

        <Label>Message</Label><br> 
        <textarea name="message" maxlength="1000" cols=70 rows=5 required></textarea><br><br>
        
        <input type="submit" name="submit" value="Envoyer">

    </form><br><br>

    <form action="ListTweet.php" method="get">

      <input type="text" name="recherche" required>
      <input type="submit" name="submit" value="Rechercher">

    </form>');
}

function end_html(){
  print('</body>
</html>');
}

    








