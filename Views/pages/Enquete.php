<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/08/2015
 * Time: 16:44
 */
session_start();

include 'menu.php';
?>

<?php
/**
 * Affichage du traitement du controlleur
 * @Controller enqueteController.php
 */
if(isset($_SESSION['enquete'])){
    if($_SESSION['enquete'] == true)
    {
        echo "<div class=\"alert alert-success col-sm-6 col-sm-offset-3\">
	<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
	<strong>Bonne nouvelle !</strong> Votre enquête a été correctement enregistrée dans la base !
    </div>";
        $_SESSION['enquete'] = null;
    }else{
        if($_SESSION['enquete'] == false){
            echo "<div class=\"alert alert-danger col-sm-6 col-sm-offset-3\">
	                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    	            <strong>Mauvaise nouvelle</strong> Une erreur est survenue, votre enquête n'as pas été sauvegardée !
                    </div>";
        }
    }
}
?>


<div class="container-fluid well col-sm-6 col-sm-offset-3">
    <form action="../../Controllers/enqueteController.php" method="post" role="form">
        <legend class="text-center">Formulaire d'enquêtes</legend>

        <div class="container-fluid well-sm col-sm-12">
            <label class="label-primary col-sm-5">Date : </label>
            <input class="form-control col-sm-6 col-sm-push-1 input-sm text-center" style="color: #2d6987" type="text"  name="dt" id="dateEnquete"/>
        </div>


        <div class="container-fluid well-sm col-sm-12">
            <label class="label-primary col-sm-5">Secteur : </label>
            <input class="form-control col-sm-6 col-sm-push-1 input-sm" type="text" name="sct"/>
        </div>

        <div class="container-fluid well-sm col-sm-12">
            <label class="label-primary col-sm-5">Marque : </label>
            <input class="form-control col-sm-6 col-sm-push-1 input-sm" type="text" name="mrq"/>
        </div>

        <div class="container-fluid well-sm col-sm-12">
            <label class="label-primary col-sm-5">Sujet : </label>
            <input class="form-control col-sm-6 col-sm-push-1 input-sm" type="text" name="sjt"/>
        </div>

        <div class="container-fluid well-sm col-sm-12">
            <label  class="label-primary col-sm-5">Commentaire : </label>
            <textarea class="form-control col-sm-6 col-sm-push-1" name="cmt"></textarea>
        </div>

        <div class="form-group-sm col-sm-12">
            <br>
        </div>
        <legend></legend>
        <div class="container-fluid col-sm-12">

            <button type="submit" class="button btn-xs btn-primary btn-block" name="inserer">Validez votre Enquete </button>

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
