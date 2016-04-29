<?php
/* Посылаем запрос серверу */ 
        if ($result = $dbc->query("SELECT * FROM content")) { 
            /* Выбираем результаты запроса: */ 
            while( $row = $result->fetch_assoc()){ 
                echo '<p> '.$row["id"].'.  '.$row["content"].' </p>';               
            }             
        }  
