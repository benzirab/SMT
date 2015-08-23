<?php
//si tu utilise un autre fichier pour la déconnexion n'oublie pas le session_start() ^^

session_start();
//pour la clôture : 
session_unset(); //efface les variable session
session_destroy();//détruit la session
$_SESSION = null;//histoire d'être sûre
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="0;url=pages/index.php">
    <title>Smt</title>
    <script>

        window.location.href = "index.php"

    </script>
</head>

<body>
Go to <a href="index.php">index.php</a>
</body>

</html>