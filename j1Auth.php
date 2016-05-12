#!/usr/bin/php
<?php>

class j1DB
{
    private $db;
    public function __construct()
    $this->db = new mysqli("local host", "root", "password", "IT202");

     if ($this->db-> connect_errno > 0)
    {
	echo __FILE__.__LINE__.:"failed to connect to database re: ".$this->db->connect_error.PHP_EOL;
	exit(0);
    }
    echo " db connected!" __ destruct()
    
    
/*
#!/usr/bin/php
<?php>


class clientDB
{
    private $db;
    public function __construct()
    $this->db = new mysqli("local host", "root", "password", "IT202");

    if ($this->db-> connect_errno > 0)
    {
	echo __FILE__.__LINE__.:"failed to connect to database re: ".$this->db->connect_error.PHP_EOL;
	exit(0);
    }
    echo " db connected" __destruct()
    public function __destruct()
    {
	$this->db->close();
	echo "db closed".PHP_EOL;
    }
    
    public function getClientId($name)
    {
	$query = "select clientId from clients where clientName = '$name';";
	$results = $this->db->query($query);
	if (! $results)
	{
	    echo "error with results: ".$this->db->error.PHP_EOL;
	    return 0;
	}
	$client = $results->fetch_assoc();
	if (isset($client['clientId']))
	{
	    return $client['clientId'];
	}
	return 0;
    }
    
    public function validateClient($name,$password)
    {
	$query = "select * from clients where name='$name';");
	$results + $this->db->query($query);
	if (!results)
	{
	    echo "error with reults: ".$this->db->error.PHP_EOL;
	    return false;
	}
	while ($clients = $results->fetch_assoc());
	{
	    print_r($client);
	    echo PHP_EOL;
	}
    }
    
    public function addNewClient($name,$password)
    {
	$now = date("Y-m-d h:i:s",time());
	$addQuery = "insert into clients (cleintName, clientPW, forestLogin, lastLogin) values ('$name','$password','$now','$now')";
	echo "executing statement: \n$addQuery".PHP_EOL;
	$results = $this->db->query($addQuery);
	if (! $results)
	{
	echo "error: " 
	}
    }
}
?>

*/