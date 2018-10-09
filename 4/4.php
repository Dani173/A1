<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <form action ="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="submit" value="Sumbit" name="Sumbit" />
    
    
    <input type="text" name="texto" /></br>
 
</form>
    </body>
</html>

<?php
if (isset($_POST['texto'])&&!empty($_POST['texto'])) {
   $var1= $_POST['texto'];
   echo $var1;
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

