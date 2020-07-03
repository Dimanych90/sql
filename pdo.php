<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=test", 'root', '');
    echo "It's working";
} catch (PDOException $e) {
    echo $e->getMessage();
}

$login = $_GET['login'] ?? '';
$query = $pdo->prepare("SELECT * FROM users WHERE `login` = :login");
$query->execute([':login' => $login]);
if (!$query){
    echo $query->errorInfo();
}
$res = $query->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($res);
echo '</pre>';
//$newpassword = md5("privet");
//$newquery = $pdo->prepare("INSERT INTO users(`login`,`pass`,`email`) VALUES (?,?,?)");
//$newquery->execute(['Blohin',$newpassword,'oleg@mail.com']);
//$newquery->execute(['lobanovskiy',$newpassword,'andrey@mail.com']);


