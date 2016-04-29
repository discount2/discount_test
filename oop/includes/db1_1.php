<?php
// Экспериментируем с запросами к БД
class SQLRequire {
    
    public $arr1 = array();

    public function  myMethod ($dbc, $n){
      /* Посылаем запрос серверу */ 
      echo '___+++___',$n;
//        if ($result = $dbc->query("SELECT * FROM content WHERE id=1"))
                if ($result = $dbc->query($n)){ 
            /* Выбираем результаты запроса: */ 
            while( $row = $result->fetch_assoc()){ 
                echo '<p> '.$row["id"].'.  '.$row["content"].' </p>';               
            }             
        }    
    }  
    public function  myMethod2 ($dbc) {
        
        if ($result = $dbc->query("SELECT * FROM requests")) { 
            /* Выбираем результаты запроса: */ 
            while( $row = $result->fetch_assoc()){ 
                echo '<p> '.$row["id"].'.  '.$row["request"].'.  '.$row["comment"].' </p>';               
            }             
        } 
    }
        
    public function  myMethod3 ($dbc, $z) {
        if ($result = $dbc->query($z)) { 
            /* Выбираем результаты запроса: */ 
            
            while( $row = $result->fetch_assoc()){ 
                echo '<p> '.$row["id"].'.  '.$row["request"].'.  '.$row["comment"].' </p>'; 
//                echo '<p> '.$row["id"].' </p>'; 
            }
        } 
    }
// Метод выбирает из БД набор запросов и записывает их в массив.    
    public function  myMethod4 ($sql, $dbc, $a) {
        $arr = array();
        if ($result = $dbc->query($a)) { 
                      
            while( $row = $result->fetch_assoc()){ 
//              echo '<p> '.$row["id"].'.  '.$row["request"].'.  '.$row["comment"].' </p>'; 
//                echo '<p> '.$row["request"].' </p>'; 
                $z= $row["request"]; 
//                echo $z;
//                заполняем массив SQL запросов (поэкспериментировать с двумерными массивами!!!)
                array_push($arr,$z);
            }   
        } 
//        $n = $arr[0];
//        $this->myMethod3($dbc, $n);
        print_r($arr);
        return $arr;
    }    
}
// !!!  проверка работы класса
// создаем новый объет запроса и передаем ему подключение к БД
$sql = new SQLRequire ();
//$sql ->myMethod($dbc);//изменилась сигнатура метода
$sql ->myMethod2($dbc);

$a = 'SELECT * FROM requests';
$sql ->myMethod3($dbc,$a);
$sql ->myMethod4($sql,$dbc,$a);
// Формируем массив SQL запросов из БД.
$arr2 = $sql ->myMethod4($sql,$dbc,$a);

//$n = implode($arr2[1]);
$n = $arr2[2];
$k = "SELECT * FROM content WHERE id=1";
$k1 = $n;
echo "!!!",$k1;
$sql ->myMethod($dbc, $n);
echo $k1;
//$sql ->myMethod3($dbc,$a);
