<?php
    // Code
    //requête ajouter un produit :
    function insertProduit($bdd,$nom, $content){
        try{
            $req = $bdd->prepare('INSERT INTO produit(nom_produit, contenu_produit) 
            VALUES(:nom_produit, :contenu_produit)');
            $req->execute(array(
                'nom_produit' => $nom,
                'contenu_produit' =>$content
                ));
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
        }
    }
?>
    <!-- git config --global user.email claudeblandin@yahoo.fr 
git config --global user.name Lupusatris
git add *
git commit -m "ajout fichier"
git push https://github.com/Lupusatris/exoPHP master
-->