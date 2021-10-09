<html>
    <body>
        <form action="invioNumero.php" method = "post">
            <p>numero:<input type="text" name="num"></p>
            <input type="hidden" name="fisso" value="3487">
            <input type="submit" values="submit">
        </form>
        <?php

        if(!empty($_POST)){
            echo "Tentativi ". $tentativi;
            if($_POST['num']>$_POST['fisso']){
                echo "Troppo Grande, riprova";
                $tentativi++;
            } else if($_POST['fisso']>$_POST['num']){
                echo "Troppo piccolo, riprova";
                $tentativi++;
            } else {

                echo "Hai indovinato";
            } 

            /*
            echo "<p>il numero è ".$_POST['num']."</p>";
           echo "<p>".$_POST['fisso']."</p>";*/
        }
        ?>
    </body>
</html>