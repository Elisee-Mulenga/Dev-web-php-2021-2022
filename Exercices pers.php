<html>
    <head>
        <title>Elisee - Php excercies pers</title>
    </head>

    <body>
        <?php
        echo "Salut à vous !";
        ?>
        <!-- $SERVER_ADDR 
        $HTTP_HOST 
        $REMOTE_ADDR 
        gethostbyAddr($REMOTE_ADDR) 
        $HTTP_USER_AGENT  -->
        <table border="1"> 
            <caption align="top">Quelques variables d'environnement</caption> 
            <tr><th align="center">Variable</th><th align="center">Valeur</th></tr> 
            <tr><td>Adresse IP du serveur web</td> 
            <td><?php echo $_SERVER['SERVER_ADDR'] ?></td></tr> 
            <tr><td>Nom du serveur web</td> 
            <td><?php echo $_SERVER['HTTP_HOST'] ?></td></tr> 
            <tr><td>Adresse IP du client</td> 
            <td><?php echo $_SERVER['REMOTE_ADDR'] ?></td></tr> 
            <tr><td>Nom de la machine cliente</td> 
            <td><?php echo gethostbyAddr($_SERVER['REMOTE_ADDR']) ?></td></tr> 
            <tr><td>Navigateur du client</td> 
            <td><?php echo $_SERVER['HTTP_USER_AGENT'] ?></td></tr> 
        </table> 

        Nous sommes le <?php echo Date("j/m/Y"); ?><br> 
        <?php 
            echo "il est ".Date("H:i:s")."<br>"; 
            if ( Date("H") < 12 ) { 
            echo "Bon matin Elisee .."; 
            } else { 
            echo "Bonne après midi .."; 
            } 
            echo 'Hello word, hello Esis je suis dans un cas zarbi'; 
        ?>
    </body>
</html>