<?php
include "bdd.inc.php";
$id=$_SESSION['id'];

    ///////////////////////////////////////////////////////////////////////////////
    /*									        	E L E V E																			 */
    ///////////////////////////////////////////////////////////////////////////////
        if ($_SESSION['profil']=="eleve")
        {

          $id_interet=$_POST['choix_interet'];

          $uninteret = new stage ($id,'','','');
          $uninteret -> affiche_stage($uninteret, $conn);

          $img=$uninteret -> affiche_interet($uninteret, $conn)['img_interet'];

          $sql="SELECT * FROM stage
                WHERE id_utilisateur=$id";
          $req = $conn -> query($sql)or die($conn->errorInfo());
          $req -> execute();
          $res=$req->fetch();
          $libs=$res['lib_stage'];
          $descs=$res['desc_stage'];
          $dated=date("d-m-Y", strtotime($res['date_debut_stage']));
          $datef=date("d-m-Y", strtotime($res['date_fin_stage']));
          $commentaire=$res['commentaire'];
          $entreprise=$res['id_entreprise'];
          $filiere=$res['id_filiere'];

        }

?>
