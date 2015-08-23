<?php
/**
 * Created by PhpStorm.
 * User: Ach-Khalil
 * Date: 12/08/15
 * Time: 09:08
 */

session_start();


    //DB configuration Constants
    define('_HOST_NAME_', 'localhost');
    define('_USER_NAME_', 'root');
    define('_DB_PASSWORD', 'khalil007');
    define('_DATABASE_NAME_', 'SMT');

    //PDO Database Connection
    try {
        $databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    if(isset($_POST['connecter'])){

        $errMsg = '';
        //username and password sent from Form
        $username = trim($_POST['login']);
        $password = trim($_POST['password']);

        if($username == ' ')
            $errMsg .= 'You must enter your Username<br>';

        if($password == ' ')
            $errMsg .= 'You must enter your Password<br>';


        if($errMsg == ''){
            $records = $databaseConnection->prepare('SELECT * FROM  bde WHERE id = :username');
            $records->bindParam(':username', $username);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
            if(count($results) > 0 && ($password == $results['password'])){
                // SESSIONS

                $_SESSION['immatricule'] = $results['id'];

                $_SESSION['login'] = $results['nom'];

                // ./SESSIONS
                header('location: http://localhost/Stage_SMT/Views/pages/Accueil.php');
                exit;
            }else{
                $errMsg .= 'Username and Password are not found<br>';
                $_SESSION['erreur'] = $errMsg;
                Header('Location: http://localhost/Stage_SMT/Views/pages/index.php');
            }
        }else{
            $errMsg .= 'Username and Password are not found<br>';
            $_SESSION['erreur'] = $errMsg;
            Header('Location: http://localhost/Stage_SMT/Views/pages/index.php');
        }





}

