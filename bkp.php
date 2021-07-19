<?php
//Enter your database information here and the name of the backup file
 
	$db_server			= 'sql208.unaux.com';				// Database server, usually "localhost", 
	                                                // on (mt) servers something like internal-db.s12345.gridserver.com
 	$db_name 			= 'unaux_28553267';				// Database name, leave empty for 'all databases'
	$db_user 		    = 'unaux_28553267_javabo';				// Database username
	$db_pass 		    = '123abcABC@';				// Database password


$mysqlDatabaseName ='unaux_28553267';
$mysqlUserName ='unaux_28553267_javabo';
$mysqlPassword ='123abcABC@';
$mysqlHostName ='sql208.unaux.com';
$mysqlExportPath ='bkp.sql';

//Please do not change the following points
//Export of the database and output of the status
$command='mysqldump --opt -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' > ' .$mysqlExportPath;
exec($command,$output,$worked);
switch($worked){
case 0:
echo 'The database <b>' .$mysqlDatabaseName .'</b> was successfully stored in the following path '.getcwd().'/' .$mysqlExportPath .'</b>';
break;
case 1:
echo 'An error occurred when exporting <b>' .$mysqlDatabaseName .'</b> zu '.getcwd().'/' .$mysqlExportPath .'</b>';
break;
case 2:
echo 'An export error has occurred, please check the following information: <br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$mysqlHostName .'</b></td></tr></table>';
break;
}
?>