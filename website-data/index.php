<?php 
phpinfo(); 

echo "Databases";
$pdo = new PDO("mysql:host=localhost", "drupaladmin", "drupalpw");
$sql = 'SHOW DATABASES';

$q = $pdo->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
while( ( $db = $q->fetchColumn( 0 ) ) !== false ){
    echo $db.'<br>';
}

?>