<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=u415020159_mantiz;charset=utf8', 'u415020159_mantiz', 'Eguito*#17');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
