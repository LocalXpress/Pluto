try
{
	$db = new PDO("mysql:dbname=webauth;host=localhost", "root", "" );
	echo "PDO object not created!!";
}
catch(PDOException $e)
{
    alert($e->getMessage()) ;
}

//put the name of database in place webauth   
