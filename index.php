<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Hello Git!</h1>
	<?php
//            require'includes/mysql.inc.php';
            require'includes/config.inc.php';
            require(MYSQL);
            
            $pageContents = ('Hello OOP!!!');
            echo $pageContents;  
                        
        ?>
         <ul id="block1">
            <?php         
//                в отличие от примера код запроса к базе данных был вынесен в файл db1.php
                include 'includes/db1_1.php';                 
            ?>                             
        </ul>
        
    </body>
</html>

