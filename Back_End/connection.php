<?php
  
try
{
	$conn = new PDO('mysql:host=localhost;dbname=e_classe_db;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
