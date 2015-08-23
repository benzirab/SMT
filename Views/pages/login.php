<?php
/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 10/08/15
 * Time: 13:52
 */
?>
    <style>
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        
        .form-signin .checkbox {
            font-weight: normal;
        }
        
        .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        
        .form-signin .form-control:focus {
            z-index: 2;
        }
        
        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        
        .account-wall {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        
        .login-title {
            color: #a9223e;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        
        .profile-img {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
        }

    </style>


    <div class="container-fluid col-sm-12">
        <h1 class="text-center login-title">Connexion à la BDE Application</h1>
        <p class="text-center text-info" id="date_heure"></p>
        <div class="col-sm-6 col-md-4 col-md-offset-4">

            <?php
            if(isset($_SESSION['erreur'])){
                $errMsg = $_SESSION['erreur'];
                $_SESSION['erreur'] = null;
                echo '<div style="color:#FF0000;text-align:center;font-size:12px;">'.$errMsg.'</div>';
            }
            ?>
                <div class="account-wall">
                    <img class="profile-img" src="../img/attention.png" alt="">
                    <form class="form-signin" action="../../Controllers/validerConnexion.php" method="post">
                        <input type="text" class="form-control col-sm-12" placeholder="Matricule" name="login" required autofocus>
                        <input type="password" class="form-control col-sm-12" name="password" placeholder="Mot de passe" required>
                        <input type="submit" name="connecter" value="Connexion" class="btn btn-lg btn-primary btn-block">


                    </form>
                </div>

        </div>
    </div>
    <script type="text/javascript">
        window.onload = date_heure('date_heure');

    </script>
