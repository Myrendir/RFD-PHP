<h1>Ajouter un Produit</h1>
<?php

if (isset($_POST['albator'])) {
    $reference = isset($_POST['reference']) ? $_POST['reference'] : "";
    $nomProduit = isset($_POST['nomProduit']) ? $_POST['nomProduit'] : "";
    $prix = isset($_POST['prix']) ? $_POST['prix'] : "";
    //$photo = isset($_FILES['photo']);
    $nomPhoto = $_FILES['photo']['name'];
    $tyePhoto = $_FILES['photo']['type'];
    $tmpPhoto = $_FILES['photo']['tmp_name'];
    $errorPhoto = $_FILES['photo']['error'];
    $sizePhoto = $_FILES['photo']['size'];

    // debug($photo);
    $erreurs = array();



    if ($errorPhoto == 0) {
        function suppr_accents($str, $encoding='utf-8')
        {
            $str = htmlentities($str, ENT_NOQUOTES, $encoding);
            $str = preg_replace('#&([A-za-z])(?:acute|grave|cedil|circ|orn|ring|slash|th|tilde|uml);#', '\1', $str);
            $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
            $str = preg_replace('#&[^;]+;#', '', $str);
            return $str;
        }
        $nomPhoto = str_replace(' ', '_', $nomPhoto);
        $nomPhoto = str_replace(array(" ", "'", "\""), "_", $nomPhoto);

    }
    else {
        echo "<p>Morche pô</p>";
    }

   /* if (!(mb_strlen($reference) >= 2 && ctype_alpha($reference)))
        array_push($erreurs, "Veuillez saisir une référence correcte.");

    if (!(mb_strlen($nomProduit) >= 2 && ctype_alpha($nomProduit)))
        array_push($erreurs, "Veuillez saisir un nom de produit correct.");

    if (!filter_var($prix) >= 2)
        array_push($erreurs, "Veuillez saisir une prix valide.");

    if (count($erreurs) > 0) {
        $message = "<ul>";
        $i = 0;

        while ($i < count($erreurs)) {
            $message .= "<li>" . $erreurs[$i] . "</li>";
            $i++;
        }

        $message .= "</ul>";

        echo $message;

        include "frmajouterProduit.php";
    } else {
        $sql = "SELECT COUNT(*) FROM t_users WHERE USEMAIL='" . $reference . "'";
        $nombreOccurences = $pdo->query($sql)->fetchColumn();
        if ($nombreOccurences == 0) {
            $sql = "INSERT INTO T_USERS
                (USENOM, USEPRENOM, USEMAIL)
                VALUES ('" . $reference . "', '" . $nomProduit . "', '" . $prix . "')";

            $query = $pdo->prepare($sql);
            $query->bindValue('USENOM', $reference, PDO::PARAM_STR);
            $query->bindValue('USEPRENOM', $nomProduit, PDO::PARAM_STR);
            $query->bindValue('USEMAIL', $prix, PDO::PARAM_STR);

            $query->execute();

            $msg = "Ajout OK";
            $sujet = "Validation de votre Ajout";
        } else {
            echo "Objet déjà dans la BDD";
        }

    }*/
} else {
    require_once "frmajouterProduit.php";
}
