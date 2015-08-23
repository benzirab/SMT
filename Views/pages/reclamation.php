<?php
/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 06/08/15
 * Time: 12:17
 */
session_start();
?>

<!doctype>
<html>
<head>
<?php include 'menu.php';  ?>
</head>
<body>
<div class="container-fluid well col-sm-6 col-sm-offset-3">
	<form action="" method="post" role="form">
		<legend class="text-center">Formulaire de réclamation</legend>
		<!-- Code BDE -->
		<div class="container-fluid well-sm col-sm-12">
			<label class="label-primary col-sm-5">Code BDE : </label>
			<input class="form-control col-sm-6 col-sm-push-1 input-sm text-center" type="text" value="<?php echo $_SESSION['immatricule']; ?>" disabled/>
		</div>

		<!-- E-mail -->
		<div class="container-fluid well-sm col-sm-12">
			<label class="label-primary col-sm-5">Email : </label>
			<input class="form-control col-sm-6 col-sm-push-1 input-sm" type="text" placeholder="Inserez votre E-mail"/>
		</div>

		<!-- Texte E-mail -->
		<div class="container-fluid well-sm col-sm-12">
			<label  class="label-primary col-sm-5">Contenu de la réclamation : </label>
			<textarea name="" class="form-control col-sm-6 col-sm-push-1" placeholder="Inserez le contenu de votre réclamation"></textarea>
		</div>

<!--		<div class="form-group-sm">-->
<!--			<label for="">Email: </label>-->
<!--			<input type="text" class="form-control" name="" id="" placeholder="e-mail"/>-->
<!--			<textarea name="" id="" cols="30" rows="10"></textarea>-->
<!--		</div>-->

		<div class="form-group-sm col-sm-12">
			<br>
		</div>
		<legend></legend>
		<div class="container-fluid col-sm-12">

			<button type="submit" class="button btn-xs btn-primary btn-block">Validez votre réclamation</button>

		</div>

	</form>
</div>

</body>
</html>
