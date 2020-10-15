<?php

if(isset($_GET)){ // test si le formulaire get est envoyé
    $dbh = new PDO('mysql:host=localhost;dbname=twitter','root', ''); // connexion bd mysql
    
    $array = [ //ajoute les données du formulaire dans un tableau
        "recherche" => $_GET['recherche'],
        "type" => substr($_GET['recherche'],0,1), //type == # si on cherche un hashtag sinon recherche user type != #
    ];
    
    function DisplayTweet($dbh,$data){ // Affiche les tweets
        if ($data['type'] == "#") { 
            $stmt = $dbh->prepare("SELECT * FROM tweet WHERE htags LIKE (:recherche)"); // recherche si les messages contiennent le hashtag
            $stmt->bindParam(':recherche', $htag); 
            $htag = '%'.$data['recherche'].'%'; // Affecte le paramètre
            $stmt->execute();
            $arr = array();
            while($opt = $stmt->fetch()){
                $arr[] = $opt;
            }
            $i = 0;
            echo "<h1>Tweet : ". $data['recherche'] . "</h1>";
            echo "<table>"; // Affiche la table avec tous les résultats
            foreach($arr as $row) {
                print('<tr><td width=500px>'.$arr[$i]['msg'].'</td><td><i><b>'.$arr[$i]['user'].'</b></i></td><td>'.$arr[$i]['date'].'</td></tr>');
                $i++;
            }
            echo "</table>";
        }
        else {
            $stmt = $dbh->prepare("SELECT * FROM tweet WHERE user=(:recherche)"); //limit '.$limite.','.$nombre;"); // recherche par utilisateur
            $stmt->bindParam(':recherche', $user);
            $user = $data['recherche']; // Affecte le paramètre
            $stmt->execute();
            $arr = array();
            while($opt = $stmt->fetch()){
                $arr[] = $opt;
            }
            $i = 0;
            echo "<h1>Tweet utilisateur : ". $user . "</h1>";
            echo "<table>"; // Affiche la table avec tous les résultats
            foreach($arr as $row) {
                print('<tr><td width=500px>'.$arr[$i]['msg'].'</td><td>'.$arr[$i]['date'].'</td></tr>');
                $i++;
            }
            echo "</table>";
        }
    }
    
    DisplayTweet($dbh,$array);

} else{
    header('Location: twitter.php');
}
?>


