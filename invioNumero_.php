<html>
    <body>
        <form action="invioNumero_.php" method="post">
            numero: <input type="text" nome="numero"><br>

            <input type="hidden" nome="numero_fisso" value="3487">
            <input type="submit" values="submit">
        </form>

    <?php
$numero_ricevuto=$_POST['numero'];

echo  "<p>numero: ". $_POST['numero']. "</p> ";

    ?>
        </body>


</html>