<?php
/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 19/08/15
 * Time: 10:10
 */
session_start();

include '../Models/SPDO.php';

$idBde = $_SESSION['immatricule'];

if(isset($_POST['inserer']))
{
    //$dt=$_POST['dt'];
    $sjt=$_POST['sjt'];
    $cmt=$_POST['cmt'];
    $sct=$_POST['sct'];
    $mrq=$_POST['mrq'];
    $requete= "INSERT INTO `SMT`.`remontee_terrain` (`id`, `date`, `idbde`, `sujet`, `commentaire`, `Secteur`, `Marque`)  VALUES (NULL,CURRENT_TIMESTAMP , $idBde,'$sjt','$cmt','$sct','$mrq')";
    $reponse = SPDO::getInstance()->exec($requete);

    if($reponse == 1){
        $_SESSION['enquete'] = true;
        ?>
        <script>
            var obj = 'window.location.replace("http://localhost/Stage_SMT/Views/pages/Enquete.php");';
            setTimeout(obj,1000);
        </script>
        <?php
    }
    else{
        $_SESSION['enquete'] = false;
        ?>
        <script>

            var obj = 'window.location.replace("http://localhost/Stage_SMT/Views/pages/Enquete.php");';
            setTimeout(obj,1000);
        </script>
        <?php
    }


}
?>