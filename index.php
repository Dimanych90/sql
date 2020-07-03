<?php

$mysqli = new Mysqli ('127.0.0.1','root','','test',3306);

if (mysqli_connect_errno()){
    echo 'Error: '. mysqli_connect_errno(). mysqli_connect_error();
    die();
}else{
    echo 'Connection is well';
}

$connection = $mysqli->query('SELECT * FROM users');
$connection1 = $connection->fetch_all();
$rows = $mysqli->affected_rows;
echo '<pre>' ;
echo 'Вернулось '.$rows. ' строк'. '<br>';

print_r($connection1);
echo '</pre>';

//$password = md5('owen');
//
//$smth = $mysqli->query("INSERT INTO users (`login`,`pass`,`email`) VALUES ('Michael', '$password','michaelowen@mail.con');");
//if (!$smth){
//    echo $mysqli->errno .'<br>';
//    echo $mysqli->error;
//}
//echo 'Last insert id: ' . $mysqli->insert_id;

$smth1 = $mysqli->query("UPDATE users SET `email` = 'pet@gmail.com' WHERE `login` = 'Peter'");
if (!$smth1){
    echo $mysqli->errno . '<br>';
    echo $mysqli->error;
}
echo $mysqli->affected_rows . ' rows updated';