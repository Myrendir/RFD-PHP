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
    // $erreurs = array();


    if ($errorPhoto == 0) {
        debug($nomPhoto);
        $nomPhoto = suppr_accents($nomPhoto);
        $nomPhoto = str_replace(' ', '_', $nomPhoto);
        $nomPhoto = str_replace(array(" ", "'", "\""), "_", $nomPhoto);
        debug($nomPhoto);
    } else {
        echo "<p>Morche pô</p>";
    }


} else {
    require_once "frmajouterProduit.php";
}
