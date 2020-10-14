<?php

if(isset($_POST)){ // test si le formlaire post est envoyé
    $dbh = new PDO('mysql:host=localhost;dbname=twitter','root', ''); // connexion bd mysql

    preg_match_all('/#([^\s]+)/', $_POST['message'], $htags); // cherche les hashtags dans le tweet
    $tags = implode(" ", $htags[0]); // $tags = liste des hashtags du message

    $array = [ //ajoute les données du formulaire dans un tableau
        "ID" => uniqid(),
        "user" => $_POST['user'],
        "msg" => $_POST['message'],
        "htags" => $tags,
        "date" => date('d-m-Y'),
    ];

    function insertjson($array){ // Encode le tableau au format json
        return json_encode($array);
    }

    function viewjson($dbh){ // Affiche tout les tweet format json
        $stmt = $dbh->prepare("SELECT * FROM tweet"); // Requète sql affichage
        $stmt->execute();
        $arr = array();
        while($opt = $stmt->fetch()){
            $arr[] = $opt;
        }
        echo json_encode($arr);
    }

    function insertmysql($dbh, $data){ // Ajoute les données a la base de données
        $stmt = $dbh->prepare("INSERT INTO tweet (ID,user,msg,htags,date) VALUES (:ID,:user,:msg,:htags,:date)"); // Requète sql insertion
        $stmt->bindParam(':ID', $id);
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':msg', $message);
        $stmt->bindParam(':htags', $htags);
        $stmt->bindParam(':date', $date);

        $id = $data['ID']; // Affecte les différents paramètres
        $user = $data['user'];
        $message = $data['msg'];
        $htags = $data['htags'];
        $date = $data['date'];
        $stmt->execute();
    }

    function formjsonmysql($dbh, $array){ // Procédure validation formulaire
        $myjson = insertjson($array);
        $obj = json_decode($myjson,true);
        insertmysql($dbh, $obj);
        //viewjson($dbh);
        echo "<script>alert('Tweet envoyé');</script>"; 
        header('Location: twitter.php');
    }

    formjsonmysql($dbh, $array);

} else{
    header('Location: twitter.php');
}

?>