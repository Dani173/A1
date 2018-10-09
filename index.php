
<style>
    #1{
        background-color: red;
    }
</style>

<div id="1">
<form action ="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div> Ejercicio 1<input type="radio" name="ejercicio" value="1" /></br>
     
    Ejercicio 2<input type="radio" name="ejercicio" value="2" /></br>
    
    Ejercicio 3<input type="radio" name="ejercicio" value="3" /></br>
    
    Ejercicio 4<input type="radio" name="ejercicio" value="4" /></br>
    
     Ejercicio 5<input type="radio" name="ejercicio" value="5" /></br>
     Ejercicio 6<input type="radio" name="ejercicio" value="6" /></br>
      Ejercicio 7<input type="radio" name="ejercicio" value="7" /></br>
         Ejercicio 8<input type="radio" name="ejercicio" value="8" /></br>
         Ejercicio 9<input type="radio" name="ejercicio" value="9" /></br>
         Ejercicio 10<input type="radio" name="ejercicio" value="10" /></br>
         Ejercicio 11<input type="radio" name="ejercicio" value="11" /></br>
         Ejercicio 12<input type="radio" name="ejercicio" value="12" /></br><div><div>
         Ejercicio 13<input type="radio" name="ejercicio" value="13" /></br>
         Ejercicio 14<input type="radio" name="ejercicio" value="14" /></br>
         Ejercicio 15<input type="radio" name="ejercicio" value="15" /></br>
         Ejercicio 16<input type="radio" name="ejercicio" value="16" /></br>
         Ejercicio 17<input type="radio" name="ejercicio" value="17" /></br>
         Ejercicio 18<input type="radio" name="ejercicio" value="18" /></br>
         Ejercicio 19<input type="radio" name="ejercicio" value="19" /></br>
         Ejercicio 20<input type="radio" name="ejercicio" value="20" /></br>
         Ejercicio 21<input type="radio" name="ejercicio" value="21" /></br>
         Ejercicio 22<input type="radio" name="ejercicio" value="22" /></br>
         Ejercicio 23<input type="radio" name="ejercicio" value="23" /></br>
         Ejercicio 24<input type="radio" name="ejercicio" value="24" /></br></div><div>
         Ejercicio 25<input type="radio" name="ejercicio" value="25" /></br>
         Ejercicio 26<input type="radio" name="ejercicio" value="26" /></br>
         Ejercicio 27<input type="radio" name="ejercicio" value="27" /></br>
         Ejercicio 28<input type="radio" name="ejercicio" value="28" /></br>
         Ejercicio 29<input type="radio" name="ejercicio" value="29" /></br>
         Ejercicio 30<input type="radio" name="ejercicio" value="30" /></br>
           Ejercicio 31<input type="radio" name="ejercicio" value="31" /></br>
         Ejercicio 32<input type="radio" name="ejercicio" value="32" /></br>
         Ejercicio 33<input type="radio" name="ejercicio" value="33" /></br>
         Ejercicio 34<input type="radio" name="ejercicio" value="34" /></br>
         Ejercicio 35<input type="radio" name="ejercicio" value="35" /></br></div>
    <input type="submit" value="Enviar" name="enviar" />
</form>
</div>
<?php

if (isset($_POST['ejercicio'])&&!empty($_POST['ejercicio'])) {
    //comprobamos que esta seleccionado
    $ejercicio=$_POST['ejercicio'];
    switch ($ejercicio){
        
        case '1':
            header('Location:1/1.php');
            break;
        case '2':
           header('Location:2/2.php');
            break;
            
        case '3':
            header('Location:3/3.php');
            break;
        case'4':
             header('Location:4/4.php');
            break;
         case'5':
             header('Location:5/5.php');
            break;
        case'6':
             header('Location:6/6.php');
            break;
         case'7':
             header('Location:7/7.php');
            break;
         case'8':
             header('Location:8/8.php');
            break;
        case'9':
             header('Location:9/9.php');
            break;case'10':
             header('Location:10/10.php');
            break;case'11':
             header('Location:11/11.php');
            break;case'12':
             header('Location:12/12.php');
            break;case'13':
             header('Location:13/13.php');
            break;case'14':
             header('Location:14/14.php');
            break;case'15':
             header('Location:15/15.php');
            break;case'16':
             header('Location:16/16.php');
            break;case'17':
             header('Location:17/17.php');
            break;case'18':
             header('Location:18/18.php');
            break;case'19':
             header('Location:19/19.php');
            break;case'20':
             header('Location:20/20.php');
            break;case'21':
             header('Location:21/21.php');
            break;case'22':
             header('Location:22/22.php');
            break;case'23':
             header('Location:23/23.php');
            break;case'24':
             header('Location:24/24.php');
            break;case'25':
             header('Location:25/25.php');
            break;case'26':
             header('Location:26/26.php');
            break;case'27':
             header('Location:27/27.php');
            break;case'28':
             header('Location:28/28.php');
            break;case'29':
             header('Location:29/29.php');
            break;case'30':
             header('Location:30/30.php');
            break;case'31':
             header('Location:31/31.php');
            break;case'32':
             header('Location:32/32.php');
            break;case'33':
             header('Location:33/33.php');
            break;case'34':
             header('Location:34/34.php');
            break;
        break;case'36':
             header('Location:36/36.php');
            break;
        break;case'35':
             header('Location:35/35.php');
            break;
            
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

