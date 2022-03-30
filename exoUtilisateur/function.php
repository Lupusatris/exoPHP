<?php
    //requête ajouter un utilisateur :
    function insertUtilisateur($bdd,$nom,$prenom,$mail,$mdp,$img="./images/default.png"){
        try{
            $req = $bdd->prepare('INSERT INTO utilisateur(nom_utilisateur,prenom_utilisateur,mail_utilisateur,mdp_utilisateur,img_utilisateur)
            VALUES(:nomUtil, :prenomUtil, :mailUtil, :mdpUtil, :imgUtil)');
            $req->execute(array(
                'nomUtil' => $nom,
                'prenomUtil' =>$prenom,
                'mailUtil' =>$mail,
                'mdpUtil' =>$mdp,
                'imgUtil' =>$img,
                ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    //requête qui affiche tous les utilisateurs en BDD(table->utilisateur)
    function showAllUtilisateur($bdd){
        try{
            $req = $bdd->prepare('SELECT * FROM utilisateur');
            $req->execute();
            while ($data = $req->fetch()){
                $id= $data['id_utilisateur'];
                $nomUtil = $data['nom_utilisateur'];
                $prenomUtil = $data['prenom_utilisateur'];
                echo '<p><input type="checkbox" name="id_util[]" value="'.$id.'">
                <a href="updateUtilisateur.php?id='.$id.'">'.$nomUtil.' '.$prenomUtil.'</a></p>';
            }
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    //requête qui supprime un utilisateur (table->utilisateur)
    function deleteUtilisateur($bdd, $value){
        try{
            $req = $bdd->prepare('DELETE FROM utilisateur WHERE id_utilisateur = :id_utilisateur');
            $req->execute(array(
                'id_utilisateur' => $value
                ));
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
        }
    }
    //requête qui met à jour un utilisateur (table->utilisateur)
    function updateUtilisateur($bdd,$nom,$prenom,$mail,$mdp,$img="./images/default.png",$value){
        try{
            $req = $bdd->prepare('UPDATE utilisateur SET nom_utilisateur = :nom_utilisateur,
            prenom_utilisateur = :prenom_utilisateur, mail_utilisateur = :mail_utilisateur,
            mdp_utilisateur = :mdp_utilisateur, img_utilisateur = :img_utilisateur
             WHERE id_utilisateur = :id_utilisateur');
            $req->execute(array(
                'id_utilisateur' => $value,
                'nom_utilisateur' => $nom,
                'prenom_utilisateur' => $prenom,
                'mail_utilisateur' => $mail,
                'mdp_utilisateur' => $mdp,
                'img_utilisateur' => $img
                ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?>