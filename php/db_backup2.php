<?php
/*"localhost", "id1771132_root", "rooot", "id1771132_ingenieriadesoftware"*/
// variables
$dbhost = 'localhost';
$dbname = 'id1771132_ingenieriadesoftware';
$dbuser = 'id1771132_root';
$dbpass = 'rooot';
 
$backup_file = "../".$dbname. "-" .date("Y-m-d-H-i-s"). ".sql";
 
// comandos a ejecutar
$commands = array(
        "mysqldump --opt -h $dbhost -u $dbuser -p$dbpass -v $dbname > $backup_file",
      "bzip2 $backup_file"
);
 
// ejecución y salida de éxito o errores
foreach ( $commands as $command ) {
        system($command,$output);
        echo $output;
}
?>