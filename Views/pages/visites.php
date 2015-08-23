<?php
/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 19/08/15
 * Time: 09:50
 */
session_start();

include 'menu.php';
include '../../Models/Connection.php';
$connexion = Connexion::connect();
$IDBde =$_SESSION['login'];
$idClient = $_GET['id'];
if(isset($_POST['inserer'])=="OK")
{
    //$dt=$_POST['dt'];
    $sjt=$_POST['sjt'];
    $cmt=$_POST['cmt'];
    $sct=$_POST['sct'];
    $mrq=$_POST['mrq'];
    //$req="INSERT INTO  remontee_terrain VALUES ('','$dt','$IDBde','$sjt','$cmt','$sct','$mrq')";

    $reponse = $dbh->exec("INSERT INTO  remontee_terrain VALUES (NULL,CURRENT_TIMESTAMP ,'$IDBde','$sjt','$cmt','$sct','$mrq','$idClient')");

    if($reponse){
        echo "<h3></h3><p class='text-success'>insertion valide</p></h3>";
    }
    else{
        echo "<h3></h3><p class='text-error'> Error dans la requete : ".$req .mysql_error()."</p></h3>";
    }
    $_SESSION['error-sql']=serialize($req .mysql_error());

}
?>
<div class="container-fluid well col-sm-6 col-sm-offset-3">
    <form action="Enquete.php" method="post" role="form">
        <legend class="text-center">Formulaire de visites</legend>
        <!-- Code BDE -->
        <div class="container-fluid well-sm col-sm-12">
            <label class="label-primary col-sm-5">Date : </label>
            <input class="form-control col-sm-6 col-sm-push-1 input-sm text-center text-success" style="color: #2d6987" type="text"  name="dt" id="dateEnquete"/>
        </div>

        <div class="container-fluid well-sm col-sm-12">
            <label class="label-primary col-sm-5">ID Client : </label>
            <input class="form-control col-sm-6 col-sm-push-1 input-sm text-center text-success" style="color: #2d6987" type="text"  name="dt" id="dateEnquete" value="<?php echo $idClient?>"/>
        </div>

        <!-- E-mail -->
        <div class="container-fluid well-sm col-sm-12">
            <label class="label-primary col-sm-5">Nom BDE : </label>
            <input class="form-control col-sm-6 col-sm-push-1 input-sm text-center" style="color: #2d6987" type="text" name="sct" value="<?php echo $_SESSION['login'];?>"/>
        </div>

        <div class="container-fluid well-sm col-sm-12">
            <label class="label-primary col-sm-5">Secteur : </label>
            <input class="form-control col-sm-6 col-sm-push-1 input-sm" type="text" name="mrq"/>
        </div>

        <div class="container-fluid well-sm col-sm-12">
            <label class="label-primary col-sm-5">Sujet : </label>
            <input class="form-control col-sm-6 col-sm-push-1 input-sm" type="text" name="sjt"/>
        </div>

        <!-- Texte E-mail -->
        <div class="container-fluid well-sm col-sm-12">
            <label  class="label-primary col-sm-5">Commentaire : </label>
            <textarea name="" class="form-control col-sm-6 col-sm-push-1" name="cmt"></textarea>
        </div>

        <div class="form-group-sm col-sm-12">
            <br>
        </div>
        <legend></legend>
        <div class="container-fluid col-sm-12">

            <button type="submit" class="button btn-xs btn-primary btn-block">Validez votre Enquete </button>

        </div>

    </form>
</div>
<script>
    var date = new Date();
    if(date.getMonth()<10){
        var moi = "0"+(date.getMonth()+1);
    }else{
        var moi = date.getMonth();
    }

    var charDate = ""+date.getDate()+" / "+moi+" / "+date.getFullYear()+"";
    $("#dateEnquete").val(charDate);

</script>
