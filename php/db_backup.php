<?

/*************** Modify database settings ***************/
/*"localhost", "id1771132_root", "rooot", "id1771132_ingenieriadesoftware"*/
$Host = "localhost";
$UserName = "id1771132_root";
$Password = "rooot";
$Database = "id1771132_ingenieriadesoftware";

/*************** Do not modify below this line ***************/

$connection = mysql_connect("$Host","$UserName","$Password");
mysql_select_db($Database, $connection);
$sql = 'SHOW TABLES FROM '.$Database;
$result = mysql_query($sql);
$contents = "-- Script Created By: Scott Spear\n-- Website: http://www.webmastersbydesign.com\n\n-- Database: ".$Database."\n-- Created: ".date('M j, Y')." at ".date('h:i A')."\n\n";
while ($tables = mysql_fetch_array($result)) {
	$TableList[] = $tables[0];
}
foreach ($TableList as $table) {
	$row = mysql_fetch_assoc(mysql_query('SHOW CREATE TABLE '.$table));
	$contents .= $row["Create Table"].";\n\n";
	$sql = 'SELECT * FROM '.$table;
	$result = mysql_query($sql);
	$columns = explode(',',$row["Create Table"]);
	$i = 0;
	while ($records = mysql_fetch_array($result)) {
		$contents .= "INSERT INTO ".$table." VALUES (";
		for ($i=0;$i<=count($records)/2;$i++) {
			if ($i < count($records)/2-1) {
				if (strstr($columns[$i],"varchar") || strstr($columns[$i],"text") || strstr($columns[$i],”datetime”)) {
					$contents .= "'".mysql_real_escape_string($records[$i])."',";
				} else {
					$contents .= mysql_real_escape_string($records[$i]).",";
				}
			} else {
				if (strstr($columns[$i],"varchar") || strstr($columns[$i],"text") || strstr($columns[$i],”datetime”)) {
					$contents .= "'".mysql_real_escape_string($records[$i])."'";
				} else {
					$contents .= mysql_real_escape_string($records[$i])."";
				}
			}
		}
		$contents .= ");\n";
		$i++;
	}
	$contents .= "\n";
}
$file = 'DB_Backup_'.$Database.'_'.date('Y-m-d').'.sql';
$handle = fopen($file,'w');
fwrite($handle,$contents);

?>